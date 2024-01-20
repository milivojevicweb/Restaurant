<?php
namespace App\Models;

class News{

    public function insertNews($header,$description,$content,$user){
            return \DB::table('news')->insertGetId(["header"=>$header,"description"=>$description,"content"=>$content,"idUsers"=>$user,"created"=>date("Y-m-d H:i:s")]);
    }

    public function getAllNews(){
        return \DB::table("news AS n")->join("images AS i","n.idNews","=","i.idNews")->select("n.idNews","header","description","content","created","updated","path","alt")->get();
    }

    public function getOneNews($id){
        return \DB::table("news AS n")->join("images AS i","n.idNews","=","i.idNews")->where("n.idNews","=",$id)->select("n.idNews","header","description","content","created","updated","i.path","i.alt")->first();
    }

    public function updateNews($id,$header,$description,$content){
        return \DB::table('news')->where("idNews","=",$id)->update(["header"=>$header,"description"=>$description,"content"=>$content,"updated"=>date("Y-m-d H:i:s")]);
    }
    public function deleteNews($id){
        return \DB::table('news')->where("idNews","=",$id)->delete();
    }
}
