<?php
namespace App\Models;

class UserActivity{

    public function insert($idUser,$ip,$date,$dateTime,$activity){
        return \DB::table('useractivity')->insert(["idUsers"=>$idUser,"ip"=>$ip,"date"=>$date,"dateTime"=>$dateTime,"activity"=>$activity]);
    }

    public function getActivity(){
        return \DB::table('useractivity AS ua')->join("users AS u","ua.idUsers","=","u.idUsers")->select("u.idUsers","u.Name","u.lastName","ip","dateTime","activity")->get();
    }

    public function getActivityDate($dateFirst){
        return \DB::table('useractivity AS ua')->where('ua.date','=', $dateFirst)->join("users AS u","ua.idUsers","=","u.idUsers")->select("u.idUsers","u.Name","u.lastName","ip","dateTime","activity")->get();
    }

    public function deleteActivity($id){
        return \DB::table('useractivity')->where("idUsers","=",$id)->delete();
    }


}
