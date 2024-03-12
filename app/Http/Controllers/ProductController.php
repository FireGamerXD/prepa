<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){

        $products = Product::all();
        return view("home.home", compact("products"));
    }

    public function store(Request $request){
    
        request()->validate([
            "name"=> "required",
            "price"=> "required",
            "color"=> "required",
        ]);

        Product::create([
            "name"=> $request->name,
            "price"=> $request->price,
            "color"=> $request->color,
                
        ]);
        return back();
    }
    public function show(Product $product){
        return view("home.components.home_edit", compact("product"));
        }

    public function update(Request $request, Product $product){
    request()-> validate([
        "name"=> "required",
        "price"=> "required",
        "color" => "required",
    ]);

    $product->update([
        "name"=> $request->name,
        "price"=>$request->price,
        "color"=>$request->color,
    ]);
    return redirect()->route("product.index");
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect();
    }


}
