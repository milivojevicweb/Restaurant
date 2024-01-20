<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Products;
use App\Models\Images;

class ProductsController extends AdminController
{


    public function getProducts(){
        $model = new Products();
        $products=$model->getProducts();
        $this->data['products']=$products;
        $category=$model->getCategory();
        $this->data['category']=$category;
        return view('admin.pages.products.table',$this->data);
    }

    public function getAjaxProducts(){
        $model = new Products();
        $products=$model->getProducts();
        return response()->json($products);
    }

    public function deleteProduct($id){
        if(isset($id)){
            try{
                $model = new Products();
                $img = new Images();
                $images=$img->deleteImageProduct($id);
                $product=$model->deleteProduct($id);

            }catch(\PDOException $e){

            }
        }
    }

    public function insertProducts(ProductsRequest $request){

        if($request->has('addProduct')){

            $model = new Products();
            $img = new Images();

            $productName=$request->input('productName');
            $price=$request->input('productPrice');
            $category=$request->input('productCategory');
            $alt=$request->input('alt');
            $productsText=$request->input('productsText');
            $user=session()->get("user")->idUsers;


            $file = $request->file('image');
            $imeFajla = time().$file->getClientOriginalName();


            if($file->isValid()){
                $file->move(public_path()."/images/", $imeFajla);
                try{
                    $idProduct=$model->insertProducts($productName,$price,$productsText,$category,$user);
                    $insertImage=$img->insertImagesProduct($idProduct,$imeFajla,$alt);
                    return redirect()->back()->with("message", "You have successfully insert products!");
                }
                catch(QueryException $ex) {
                    return redirect()->back()->with('message','Database error!');
                    \Log::error($ex->getMessage());
                }
            } else {
                return redirect()->back()->with("message", "You have successfully insert products!");
            }


        }
    }

    public function formProducts(){
        $model = new Products();
        $category=$model->getCategory();
        $this->data['category']=$category;
        return view('admin.pages.products.insert',$this->data);
    }


    public function editProductInfo($id){

        $model = new Products();
        $product=$model->getProductWithId($id);
        if (!$product) {
            abort(404);
        }
        $category=$model->getCategory();
        $this->data['editProduct']=$product;
        $this->data['categoryProduct']=$category;
        return view('admin.pages.products.edit',$this->data);
    }

    public function updateProduct(UpdateProductRequest $request){
        if ($request->has('editProducts')) {

            $alt=$request->input('alt');
            $name=$request->input('name');
            $text=$request->input('text');
            $price=$request->input('price');
            $category=$request->input('category');
            $id=$request->input('id');

            $file = $request->file('image');

            $model = new Products();
            $img = new Images();

            try{

                if($request->hasFile('image')){

                    $imeFajla = time().$file->getClientOriginalName();
                    $file->move(public_path()."/images/", $imeFajla);

                    $updateImage=$img->updateImageProduct($id,$imeFajla,$alt);

                }else{
                    $updateImageNo=$img->updateImageProductNo($id,$alt);
                }

                $update=$model->updateProduct($id,$name,$text,$price,$category);

                if($update){
                    return redirect()->back()->with('message','Product successfully created!');
                }elseif($update || isset($updateImage)) {
                    return redirect()->back()->with('message','Product successfully created!');
                }elseif(isset($updateImageNo)){
                    return redirect()->back()->with('message','Product successfully created!');
                }else{
                    return redirect()->back()->with('message','Product not created!');
                }

            }catch(QueryException $ex) {
                return redirect()->back()->with('message','Database error!');
                \Log::error($ex->getMessage());
            }
        }

    }

    public function fetch_data(Request $request)
    {
     if($request->ajax())
     {
        $category = $request->get('category');

        $model = new Products();

        if($category==0){

            $data=$model->getProducts();

        }else{

            $data=$model->getProductCategory($category);

        }
        return response()->json($data);
     }
    }
}
