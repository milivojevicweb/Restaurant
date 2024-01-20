<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\UserActivity;
class AuthenticationController extends Controller
{
    public function page(){
        return view('front.pages.loginRegistration',$this->data);
    }

    public function login(LoginRequest $request){

            $loginEmail=$request->input('loginEmail');
            $loginPassword=$request->input('loginPassword');

            try{

                $model= new User();
                $user=$model->getUser($loginEmail,$loginPassword);


                if($user){

                    $request->session()->put("user", $user);
                    if(session()->has('user')){
                        $userActivity=new UserActivity();
                        $user=session()->get("user");
                        $ip=request()->ip();
                        $date=date("Y-m-d");
                        $dateTime=date("Y-m-d H:i:s");
                        $activity="login";
                        $userActivity->insert($user->idUsers,$ip,$date,$dateTime,$activity);
                    }

                    if($user->idUserLevel==1){
                        return \redirect("/user")->with("message", "You have successfully logged in!");
                    }else{
                        return \redirect("/admin")->with("message", "You have successfully logged in!");
                    }
                } else {
                    return redirect("/login")->with("message", "You are not logged in!");
                }

            }catch(\Exception $ex) {
                return redirect()->back()->with('message','Database error.');
                \Log::error($ex->getMessage());
            }

    }

    public function logout(Request $request){
        if(session()->has('user')){
            $userActivity=new UserActivity();
            $user=session()->get("user");
            $ip=request()->ip();
            $date=date("Y-m-d");
            $dateTime=date("Y-m-d H:i:s");
            $activity="logout";
            $userActivity->insert($user->idUsers,$ip,$date,$dateTime,$activity);
        }
        $request->session()->forget("user");
        $request->session()->flush();
        return redirect("/login")->with("message", "You logged out");
    }

    public function registration(RegisterRequest $request){


        $regName=$request->input('regName');
        $regLastName=$request->input('regLastName');
        $regEmail=$request->input('regEmail');
        $regPassword=$request->input('regPassword');
        $repeatPassword=$request->input('repeatPassword');

        if($regPassword!=$repeatPassword){
            return \redirect("/login")->with("message", "Repeat Password error!");
        }else{

            $model= new User();

            $checkEmail=$model->checkEmailuser($regEmail);

            if($checkEmail!=0){
                return \redirect("/login")->with("message", "The Email already exists!");
            }

            $userId=$model->insertUser($regName,$regLastName,$regEmail,$regPassword,$level=1);
            $results=$model->getUserWithId($userId);

            if($results){
                $request->session()->put("user", $results);
                if(session()->has('user')){
                    $userActivity=new UserActivity();
                    $user=session()->get("user");
                    $ip=request()->ip();
                    $date=date("Y-m-d");
                    $dateTime=date("Y-m-d H:i:s");
                    $activity="Registred";
                    $userActivity->insert($user->idUsers,$ip,$date,$dateTime,$activity);
                }
                return \redirect("/user")->with("message", "You have successfully registered!");
            } else {
                return redirect("/login")->with("message", "You are not registered!");
            }
        }
}


}
