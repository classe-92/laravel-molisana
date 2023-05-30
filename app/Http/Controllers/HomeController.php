<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Post;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::inRandomOrder()->limit(3)->get();
        $post = Post::first();

        $data = [
            'products' => $products,
            'post' => $post
        ];
        return view('home', $data);
    }
}