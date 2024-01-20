<?php
namespace App\Models;

class Contact{

    public function insertContact($name,$email,$phone,$text){
        return \DB::table('contact')->insert(["name"=>$name,"email"=>$email,"phone"=>$phone,"text"=>$text]);
    }
    public function getContact(){
        return \DB::table('contact')->select("idContact","name","email","phone","text")->get();
    }
    public function deleteContact($id){
        return  \DB::table('contact')->where("idContact",$id)->delete();
    }
    public function contactNumber(){
        return \DB::table('contact')->count();
    }
}
