<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view("all-products")->with("products",$products);
    }

    public function edit(Request $request){
        $product=Product::where("id",$request->product_id)->first();
        return view("edit-products")->with("product",$product);

    }

   

    public function update(Request $request){
        Product::where("id",$request->id)->update([
            "name"=>$request->name,
            "Price"=>$request->price,
            "category"=>$request->category
        ]);
        return redirect(route('products.index'));
    }

    public function delete(Request $request){
        Product::where("id",$request->product_id)->delete();
        return redirect(route('products.index'));
    }

   

    public function store(Request $request){
        Product::create([
            "Name"=>$request->name,
            "Price"=>$request->Price,
            "category"=>$request->category
        ]);
        return redirect(route('products.index'));
    }
   
}
