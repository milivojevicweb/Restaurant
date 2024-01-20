<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateUserInfo;
use App\Models\User;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use App\Models\Reservation;
class UserController extends Controller
{
    public function page(){
        $id=session()->get("user")->idUsers;
        try{
            $user=new User();
            $reservation=new Reservation();
            $oneUser=$user->getOneUserWithLevel($id);
            $reservation=$reservation->getUserReservation($id);
        } catch (\Exception $e) {
            report($e);
            return false;
        }
        $this->data['reservation']=$reservation;
        $this->data['userpage']=$oneUser;
        return view("front.pages.user",$this->data);
    }

    public function updatePassword(UpdatePasswordRequest $request){
        if ($request->has('updatePassword')) {

            $idUser=session()->get("user")->idUsers;
            $password=$request->input('password');
            $repeatPassword=$request->input('repeatPassword');
            if($password!=$repeatPassword){
                return redirect()->back()->with('message','Repeat Password error!');
            }


            $users = new User();

            try{

                $result=$users->updateUserPassword($idUser,$password);

                    if($result){
                        if(session()->has('user')){
                            $userActivity=new UserActivity();
                            $user=session()->get("user");
                            $ip=request()->ip();
                            $date=date("Y-m-d");
                            $dateTime=date("Y-m-d H:i:s");
                            $activity="Update Password";
                            $userActivity->insert($user->idUsers,$ip,$date,$dateTime,$activity);
                        }
                        return redirect()->back()->with('message','User was successfully updated.');
                    }else{
                        return redirect()->back()->with('message','User was not successfully updated.');
                    }

            }catch(\Exception $ex) {
                return redirect()->back()->with('message','Database error.');
                \Log::error($ex->getMessage());
            }


       }else{
           return \redirect("/")->with("message", "You must be login ");
       }
    }

    public function updateUserInfo(UpdateUserInfo $request){
        if ($request->has('userUpdate')) {


            $idUser=session()->get("user")->idUsers;
            $name=$request->input('name');
            $lastName=$request->input('lastName');
            $email=$request->input('email');

            $users = new User();

            try{
                $result=$users->updateUserByUser($idUser,$name,$lastName,$email);

                    if($result){

                        if(session()->has('user')){
                            $userActivity=new UserActivity();
                            $user=session()->get("user");
                            $ip=request()->ip();
                            $date=date("Y-m-d");
                            $dateTime=date("Y-m-d H:i:s");
                            $activity="Update User parameters";
                            $userActivity->insert($user->idUsers,$ip,$date,$dateTime,$activity);
                        }
                        return redirect()->back()->with('message','User was successfully updated.');

                    }else{
                        return redirect()->back()->with('message','User was not successfully updated.');
                    }

            }catch(\Exception $ex) {
                return redirect()->back()->with('message','Database error.');
                \Log::error($ex->getMessage());
            }


       }else{
           return \redirect("/")->with("message", "You must be login ");
       }
    }

}
