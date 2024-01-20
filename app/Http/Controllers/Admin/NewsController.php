<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsUpdateRequest;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Images;
class NewsController extends AdminController
{

    public function insertNews(NewsRequest $request){

        if($request->has('addNews')){

            $header=$request->input('header');
            $description=$request->input('description');
            $alt=$request->input('alt');
            $content=$request->input('summary-ckeditor');
            $user=session()->get("user")->idUsers;
            $file = $request->file('image');
            $imeFajla = time().$file->getClientOriginalName();

            $model = new News();
            $img = new Images();

            if($file->isValid()){
                $file->move(public_path()."/images/", $imeFajla);
                try{
                    $idNews=$model->insertNews($header,$description,$content,$user);
                    $insertImage=$img->insertImagesNews($idNews,$imeFajla,$alt);
                    return redirect()->back()->with("message", "You have successfully insert News!");
                }
                catch(\Exception $ex) {
                    return redirect()->back()->with('message','Database error.');
                    \Log::error($ex->getMessage());
                }
            } else {
                return redirect()->back()->with("message", "You have successfully insert News!");
            }


        }
    }

    public function getNews(){
        $model = new News();
        $news=$model->getAllNews();
        $this->data['news']=$news;
        return view("admin.pages.news.table",$this->data);
    }

    public function formNews($id){
        $model = new News();
        $news=$model->getOneNews($id);
        if (!$news) {
            abort(404);
        }
        $this->data['editNews']=$news;
        return view('admin.pages.news.update',$this->data);
    }

    public function updateNews(NewsUpdateRequest $request){
        if($request->has('updateNews')){

            $header=$request->input('header');
            $description=$request->input('description');
            $alt=$request->input('alt');
            $content=$request->input('summary-ckeditor');
            $id=$request->input('id');
            $file = $request->file('image');

            $model = new News();
            $img = new Images();


            try{
                if($request->hasFile('image')){
                    $imeFajla = time().$file->getClientOriginalName();
                    $file->move(public_path()."/images/", $imeFajla);
                    $updateImage=$img->updateImageNews($id,$imeFajla,$alt);

                }else{
                    $updateImageNo=$img->updateImageNewsNo($id,$alt);
                }
                $update=$model->updateNews($id,$header,$description,$content);

                if($update){
                    return redirect()->back()->with('message','The news was successfully updated.');
                } elseif($update || isset($updateImage)) {
                    return redirect()->back()->with('message','The news was successfully updated.');
                }elseif(isset($updateImageNo)){
                    return redirect()->back()->with('message','The news was successfully updated.');
                }else{
                    return redirect()->back()->with('message','The news was not successfully updated.');
                }


            }catch(\Exception $ex) {
                return redirect()->back()->with('message','Database error.');
                \Log::error($ex->getMessage());
            }

        }

    }

    public function getAjaxNews(){
        $model = new News();
        $news=$model->getAllNews();
        return response()->json($news);
    }

    public function deleteNews($id){
        if(isset($id)){

            $model = new News();
            $img = new Images();

            try{
                $images=$img->deleteImageNews($id);
                $news=$model->deleteNews($id);

            }catch(\Exception $ex) {
                return redirect()->back()->with('message','Database error.');
                \Log::error($ex->getMessage());
            }
        }
    }

    public function getForm(){
        return view("admin.pages.news.insert",$this->data);
    }


}
