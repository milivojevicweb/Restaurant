<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{


    public function page(){
        $model=new News();
        $news=$model->getAllNews();
        $this->data['data']=$news;
        return view("front.pages.news",$this->data);
    }

    public function oneNews($id){
        $model=new News();
        $news=$model->getOneNews($id);
        if (!$news) {
            abort(404);
        }
        $this->data['news']=$news;
        return view("front.pages.oneNews",$this->data);
    }
}
