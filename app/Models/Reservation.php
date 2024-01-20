<?php
namespace App\Models;

class Reservation{

    public function insertReservation($indication, $dataTime,$idUser,$time,$people,$status){
        return \DB::table('reservation')->insert(["indication"=>$indication,"dateReservation"=>$dataTime,"idUsers"=>$idUser,"idTime"=>$time,"idPeopleNumber"=>$people,"idStatus"=>$status]);
    }

    public function timeReservation(){
        return \DB::table("timereservation")
        ->select("idTimeReservation","name")
        ->get();
    }

    public function peopleNumber(){
        return \DB::table("peoplenumber")
        ->select("idPeople","name")
        ->get();
    }

    public function getReservation(){
        return \DB::table('reservation AS r')->join("users AS u","u.idUsers","=","r.idUsers")->join("timereservation AS tr","r.idTime","=","tr.idTimeReservation")->join("peoplenumber AS pn","r.idPeopleNumber","=","pn.idPeople")->join("statusreservation AS sr","r.idStatus","=","sr.idStatus")->select("r.idReservation","u.Name","u.lastName","u.email","r.Indication","sr.idStatus","r.dateReservation","sr.name AS status","tr.name as timereservation","pn.name as peoplenumber")->get();
    }

    public function deleteReservation($id){
        return \DB::table('reservation')->where("idReservation","=",$id)->delete();
    }

    public function getUserReservation($id){
        return \DB::table('reservation AS r')->join("users AS u","u.idUsers","=","r.idUsers")->join("timereservation AS tr","r.idTime","=","tr.idTimeReservation")->join("peoplenumber AS pn","r.idPeopleNumber","=","pn.idPeople")->join("statusreservation AS sr","r.idStatus","=","sr.idStatus")->select("r.idReservation","u.Name","u.lastName","u.email","r.Indication","sr.idStatus","r.dateReservation","sr.name AS status","tr.name as timereservation","pn.name as peoplenumber")->where("u.idUsers","=",$id)->get();
    }

    public function getReservationId($id){
        return \DB::table('reservation AS r')->join("users AS u","u.idUsers","=","r.idUsers")->join("timereservation AS tr","r.idTime","=","tr.idTimeReservation")->join("peoplenumber AS pn","r.idPeopleNumber","=","pn.idPeople")->join("statusreservation AS sr","r.idStatus","=","sr.idStatus")->select("r.idReservation","u.Name","u.lastName","u.email","r.Indication","sr.idStatus","r.dateReservation","sr.name AS status","tr.name as timereservation","pn.name as peoplenumber")->where("r.idReservation","=",$id)->first();
    }

    public function getStatus(){
        return \DB::table('statusreservation')->select("idStatus","name")->get();
    }

    public function updateStatus($id,$status)
    {
        return \DB::table('reservation')->where("idReservation","=",$id)->update(["idStatus"=>$status]);
    }

    public function deleteReservationUsers($id){
        return \DB::table('reservation')->where("idUsers","=",$id)->delete();
    }

    public function countPendingReservation(){
        return \DB::table('reservation AS r')->join("statusreservation AS sr","r.idStatus","=","sr.idStatus")->where("sr.idStatus","=",1)->count();
    }

}
