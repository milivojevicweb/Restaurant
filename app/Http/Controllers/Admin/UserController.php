<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use App\Models\UserActivity;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Database\QueryException;

class UserController extends AdminController
{


    public function getUser(){
        $model = new User();
        $users=$model->getAllUser();
        $this->data['users']=$users;
        return view('admin.pages.users.table',$this->data);
    }

    public function getAjaxUsers(){
        $model = new User();
        $products=$model->getAllUser();
        return response()->json($products);
    }

    public function deleteUser($id){
        if(isset($id)){

            $model = new User();
            $activity=new UserActivity();
            $reservation=new Reservation();

            try{
                $reservation=$reservation->deleteReservationUsers($id);
                $activity=$activity->deleteActivity($id);
                $user=$model->deleteUser($id);
                if(!$user){
                    abort(404);
                }
            }catch(QueryException $ex) {
                return redirect()->back()->with('message','Database error!');
                \Log::error($ex->getMessage());
            }
        }
    }

    public function formUser(){
        $model = new User();
        $level=$model->getLevel();
        $this->data['level']=$level;
        return view('admin.pages.users.insert',$this->data);
    }

    public function insertUser(UserRequest $request){
        if ($request->has('user')) {
            $regName=$request->input('name');
            $regLastName=$request->input('lastName');
            $regEmail=$request->input('email');
            $regPassword=$request->input('password');
            $repeatPassword=$request->input('repeatPassword');
            $level=$request->input('level');

            $model = new User();

            if($regPassword!=$repeatPassword){
                return \redirect("/login")->with("message", "Repeat Password error!");
            }else{

                try{
                    $user=$model->insertUser($regName,$regLastName,$regEmail,$regPassword,$level);


                    if($user){
                        return redirect()->back()->with('message','User created successfully.');
                    } else {
                        return redirect()->back()->with('message','Failed to create user.');
                    }

                }catch(QueryException $ex) {
                    return redirect()->back()->with('message','Database error!');
                    \Log::error($ex->getMessage());
                }
            }
        }
    }

    public function editUserInfo($id){
        $model = new User();
        $user=$model->getUserWithId($id);
        if (!$user) {
            abort(404);
        }
        $level=$model->getLevel();
        $this->data['level']=$level;
        $this->data['user']=$user;
        return view('admin.pages.users.edit',$this->data);
    }

    public function updateUser(EditUserRequest $request){

        if ($request->has('user')) {

                $name=$request->input('name');
                $lastName=$request->input('lastName');
                $email=$request->input('email');
                $level=$request->input('level');
                $id=$request->input('id');

                $model = new User();

            try{
                $update=$model->updateUser($id,$name,$lastName,$email,$level);

                if($update){
                    return \redirect("/admin/user")->with('message','User update successfully.');
                } else {
                    return redirect()->back()->with('message','Failed to update user ');
                }

            }catch(QueryException $ex) {
                return redirect()->back()->with('message','Database error!');
                \Log::error($ex->getMessage());
            }
        }
    }
}
