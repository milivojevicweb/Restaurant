<?php
namespace App\Models;

class Images{

    public function insertImagesNews($id,$path,$alt){
        return \DB::table('images')->insertGetId(["idNews"=>$id,"path"=>$path,"alt"=>$alt]);
    }

    public function updateImageNews($id,$path,$alt){
        return \DB::table('images')->where("idNews","=",$id)->update(["path"=>$path,"alt"=>$alt]);
    }
    public function updateImageNewsNo($id,$alt){
        return \DB::table('images')->where("idNews","=",$id)->update(["alt"=>$alt]);
    }

    public function deleteImageProduct($id){
        return  \DB::table('images')->where("idProducts",$id)->delete();
    }

    public function deleteImageNews($id){
        return  \DB::table('images')->where("idNews",$id)->delete();
    }

    public function insertImagesProduct($id,$path,$alt){
        return \DB::table('images')->insertGetId(["idProducts"=>$id,"path"=>$path,"alt"=>$alt]);
    }

    public function updateImageProduct($id,$path,$alt){
        return \DB::table('images')->where("idProducts","=",$id)->update(["idProducts"=>$id,"path"=>$path,"alt"=>$alt]);
    }
    public function updateImageProductNo($id,$alt){
        return \DB::table('images')->where("idProducts","=",$id)->update(["idProducts"=>$id,"alt"=>$alt]);
    }
}
