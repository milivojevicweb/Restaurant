<?php
namespace App\Models;

class User{

    public function getUser($email,$password){
        return \DB::table("users")
        ->select("idUsers","Name","lastName","email","idUserLevel")
        ->where([
            ["email", "=", $email],
            ["password", "=", md5($password)]
        ])
        ->first();
    }

    public function insertUser($name,$lastName,$email,$password,$level){
        return \DB::table('users')->insertGetId(["Name"=>$name,"lastName"=>$lastName,"email"=>$email,"password"=>md5($password),"created"=>date("Y-m-d H:i:s"),"updated"=>date("Y-m-d H:i:s"),"idUserLevel"=>$level]);
    }

    public function getUserWithId($id){
        return \DB::table("users")
        ->select("idUsers","Name","lastName","email","idUserLevel","idUserLevel")
        ->where([
            ["idUsers", "=", $id],
        ])
        ->first();
    }

    public function getAllUser(){
        return \DB::table("users AS u")->join("userlevel AS l","u.idUserLevel","=","l.idUserLevel")->select("idUsers","created","updated","u.Name as name", "lastName", "email", "l.name as level")->get();
    }

    public function deleteUser($id){
        return  \DB::table('users')->where("idUsers","=",$id)->delete();
    }

    public function getLevel(){
        return \DB::table('userLevel')->select("idUserLevel", "name")->get();
    }

    public function updateUser($id,$name,$lastName,$email,$level){
        return \DB::table('users')->where("idUsers","=",$id)->update(["Name"=>$name,"lastName"=>$lastName,"email"=>$email,"idUserLevel"=>$level,"updated"=>date("Y-m-d H:i:s")]);
    }

    public function updateUserPassword($id,$password){
        return \DB::table('users')->where("idUsers","=",$id)->update(["password"=>md5($password),"updated"=>date("Y-m-d H:i:s")]);
    }

    public function updateUserByUser($id,$name,$lastName,$email){
        return \DB::table('users')->where("idUsers","=",$id)->update(["Name"=>$name,"lastName"=>$lastName,"email"=>$email,"updated"=>date("Y-m-d H:i:s")]);
    }

    public function getOneUserWithLevel($id){
        return \DB::table("users")
        ->join('userlevel', 'users.idUserLevel', '=', 'userlevel.idUserLevel')
        ->select("users.idUsers","users.Name AS name","users.lastName","users.email","userlevel.name AS level")
        ->where("users.idUsers", "=", $id)
        ->first();
    }
    public function checkEmailuser($email){
        return \DB::table("users")->where("email", "=", $email)->count();
    }
}
