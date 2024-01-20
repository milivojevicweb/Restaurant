<?php
namespace App\Models;

class Products{


    public function getProducts(){
        return \DB::table('products AS p')->join("categories AS c","p.idCategories","=","c.idCategories")->join("images AS i","p.idProducts","=","i.idProducts")->select("p.idProducts","created","updated", "p.name AS name", "price", "c.name AS categories","i.path","i.alt",)->get();
    }
    public function deleteProduct($id){
        return \DB::table('products')->where("idProducts",$id)->delete();
    }
    public function insertProducts($productName,$price,$productsText,$category,$user){
        return \DB::table('products')->insertGetId(["name"=>$productName,"price"=>$price,"textProduct"=>$productsText,"idCategories"=>$category,"idUsers"=>$user,"created"=>date("Y-m-d H:i:s")]);
    }
    public function getCategory(){
        return \DB::table('categories')->select("idCategories","name")->get();
    }
    public function getProductWithId($id){
        return \DB::table('products AS p')->join("categories AS c","p.idCategories","=","c.idCategories")->join("images AS i","p.idProducts","=","i.idProducts")->where(["p.idProducts"=>$id])->select("p.idProducts","textProduct","i.path","i.alt", "p.name as name","price", "c.name as categories")->first();
    }
    public function updateProduct($id,$name,$text,$price,$category){
        return \DB::table('products')->where("idProducts","=",$id)->update(["name"=>$name,"textProduct"=>$text, "price"=>$price,"idCategories"=>$category,"updated"=>date("Y-m-d H:i:s")]);
    }
    public function getProduct($id){
        return \DB::table('products')->where("idCategories","=",$id)->select("idProducts","name","price","idCategories","idUsers")->get();
    }
    public function orderByPaginate(){
        return \DB::table('products AS p')->join("categories AS c","p.idCategories","=","c.idCategories")->join("images AS i","p.idProducts","=","i.idProducts")->select("p.idProducts","textProduct","i.path","i.alt", "p.name as name","price", "c.name as categories")->orderBy('p.idProducts', 'asc')->paginate(7);
    }
    public function pagination($query,$range){
        return \DB::table('products AS p')
        ->join("categories AS c","p.idCategories","=","c.idCategories")->join("images AS i","p.idProducts","=","i.idProducts")->select("p.idProducts","textProduct","i.path","i.alt", "p.name as name","price", "c.name as categories")
        ->where('p.name', 'like', '%'.$query.'%')
        ->whereBetween('p.price', [0, $range])
        ->paginate(7);
    }
    public function numberProductsPagination($query,$range){
        return \DB::table('products')
        ->where('name', 'like', '%'.$query.'%')
        ->whereBetween('price', [0, $range])
        ->count();
    }
    public function paginationWithCategory($query,$range,$category){
        return \DB::table('products AS p')
        ->join("categories AS c","p.idCategories","=","c.idCategories")->join("images AS i","p.idProducts","=","i.idProducts")->select("p.idProducts","textProduct","i.path","i.alt", "p.name as name","price", "c.name as categories")
        ->where('p.name', 'like', '%'.$query.'%')
        ->where('c.idCategories','=',$category)
        ->whereBetween('p.price', [0, $range])
        ->paginate(7);
    }

    public function getProductCategory($category){
        return \DB::table('products AS p')->join("categories AS c","p.idCategories","=","c.idCategories")->join("images AS i","p.idProducts","=","i.idProducts")->select("p.idProducts","created","updated", "p.name AS name", "price", "c.name AS categories","i.path","i.alt",)->where('c.idCategories','=',$category)->get();
    }
}
