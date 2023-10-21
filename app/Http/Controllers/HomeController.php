<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function infomation()
    {
        $user_id = Auth::user()->id;
        $all_product = Product::where('user_id', $user_id)->get();
        return view('infomation', compact( 'user_id','all_product'));
    }
}