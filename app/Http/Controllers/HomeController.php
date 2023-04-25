<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        if (!(Session::get('RLuserID'))) {
            Session::put('RLuserID', time() . rand(1111, 9999));
        }
        $haldi = Category::where('slug', 'haldi')->where('status', 1)->first();
        $sangeet = Category::where('slug', 'sangeet')->where('status', 1)->first();
        $mehendi = Category::where('slug', 'mehendi')->where('status', 1)->first();
        $wedding = Category::where('slug', 'wedding')->where('status', 1)->first();
        $bridesmaid = Category::where('slug', 'bridesmaid')->where('status', 1)->first();
        $reception = Category::where('slug', 'reception')->where('status', 1)->first();
        $blogs =
            DB::table('blogs')
            ->select('blogs.*')
            ->where('status', 1)
            ->where('top_blog', 1)
            ->orderBy('created_at')
            ->limit(4)
            ->get();
        return view('home', compact('haldi', 'sangeet', 'mehendi', 'wedding', 'bridesmaid', 'reception', 'blogs'));
    }
    public function contactUs()
    {
        return view('contact_us');
    }
    public function aboutUs()
    {
        return view('about_us');
    }
    public function instaShop()
    {
        return view('insta_shop');
    }
    public function shop()
    {
        $carts = Cart::where('user_id', Session::get('RLuserID'))->orderBy('created_at', 'DESC')->get();
        $products = Product::where('status', 1)->orderBy('created_at', 'DESC')->get();
        for ($i = 0; $i < count($products); $i++) {
            for ($j = 0; $j < count($carts); $j++) {
                if ($products[$i]->id == $carts[$j]->product_id) {
                    $products[$i]->inCart = true;
                }
            }
        }
        return view('shop', compact('products'));
    }
}
