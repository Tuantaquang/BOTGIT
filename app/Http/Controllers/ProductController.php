<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function add_product(){
        return view('admin.add_product');
    }

    public function save_product(Request $request){
        $user = Auth::user();
        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_content = $request->input('product_content');
         $product->product_img = $request->input('product_img');
        $product->user_id = $user->id;

        // $get_image = $request->file('product_img');
        // if ($get_image) {
        //     $get_name_img = $get_image->getClientOriginalName();
        //     $name_img = current(explode('.', $get_name_img));
        //     $image = $name_img . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        //     $path = public_path('upload/product');
        //     $get_image->move($path, $image);
        //     $data['product_img'] = $image;
        //     Product::insert($data);
        //     return redirect()->route('infomation');
        // }
        // $data['product_img'] = '';

        $product->save();

        return redirect()->route('infomation');
    }

    
}