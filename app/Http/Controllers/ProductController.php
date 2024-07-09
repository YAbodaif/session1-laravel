<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        // $prods=Product::get();
        $prods=Product::orderBy('id','DESC')->paginate(9);
        return view('products.index',compact('prods'));
    }

    public function show($id){
        $prod=Product::findOrFail($id);
        return view('products.show',compact('prod'));
    }

    public function create(){
       
        $cat=Product::select('category')->distinct()->get();
         return view('products.create',compact('cat'));
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required | string | max:100',
            'description'=>'required | string',
            'price'=>'required | numeric',
            'category'=>'required | string |max:100',
        ]);

        Product::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'category'=>$request->category,
            'img'=>'1.jpg',
            'seller_id'=>101,
        ]);

        return  redirect (route('products_index'));

    }
}
