<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductsController extends Controller
{

    public function page()
    {
        $model= new Products();
        $data = $model->orderByPaginate();
        $this->data['data']=$data;
        return view('front.pages.products', $this->data);
    }


    public function fetch_data(Request $request)
    {
     if($request->ajax())
     {
        $model= new Products();
        $query = $request->get('query');
        $range = $request->get('range');
        $category = $request->get('category');
        $query = str_replace(" ", "%", $query);
        if($category==0){
            $data=$model->pagination($query,$range);
        }else{
            $data=$model->paginationWithCategory($query,$range,$category);
        }
        return response()->json($data);
     }
    }

    public function oneProduct($id){
        $model= new Products();
        $product=$model->getProductWithId($id);
        if (!$product) {
            abort(404);
        }
        $this->data['product']=$product;
        return view('front.pages.oneProduct',$this->data);
    }

}
