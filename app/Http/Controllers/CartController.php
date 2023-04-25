<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use DB;  
use Session;

class CartController extends Controller
{
    public function index()
    {    
        $items = 0;
        $total_price = 0; 
        $carts = DB::select("SELECT crt.*, pro.product_slug, pro.product_thumbnail, pro.product_name, pro.product_price FROM carts as crt left join products as pro on crt.product_id = pro.id WHERE crt.user_id = '".Session::get('RLuserID')."' ORDER BY crt.created_at DESC");          
        foreach($carts as $cart)    
        { 
            $items = $items + 1; 
            $total_price = $total_price + ($cart->product_price * $cart->product_quantity);  
        }  
        return view('cart', compact('carts', 'items', 'total_price'));           
    }  
    public function addToCart(Request $request)  
    {   
        $cart = new Cart;       
        $cart->product_id = $request->input('product_id');             
        $cart->user_id = Session::get('RLuserID');                
        $cart->product_quantity = $request->input('product_quantity');            
        $cart->save();   
        return back()->with('success');                       
    }  
    public function deleteCartProduct($id) {  
        $cart = Cart::find($id);      
        $cart->delete();        
        return back()->with('success');       
    }    
    public function updateCart(Request $request) 
    { 
        $cart = Cart::find($request->input('id'));          
        $cart->product_quantity = $request->input('qty');      
        $cart->save();     
        return back()->with('success');   
    }    
}
