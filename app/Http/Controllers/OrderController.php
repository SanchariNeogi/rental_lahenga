<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; 
use App\Models\Address;  
use Auth;
use DB; 
 
class OrderController extends Controller
{
    public function index()   
    {  
        $user = Auth::user(); 
        $order = DB::table('orders')->leftJoin('addresses', 'orders.address_id', '=', 'addresses.id')->where('orders.user_id', $user->id)->orderBy('orders.created_at', 'DESC')->get();           
        return view('profile.order', compact('user', 'order'));            
    }  
    public function orderDetails($code)  
    {  
        $user = Auth::user();  
        $order = Order::where('order_id', $code)->first();   
        $address = Address::find($order->address_id);    
        $orderProduct = DB::select("SELECT op.*, pro.* FROM order_products as op left join products as pro on op.product_id = pro.id WHERE op.order_id = '".$order->id."'");   
        return view('profile.order_details', compact('user', 'order', 'address', 'orderProduct'));    
    }     
}
