<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;  
use App\Models\Order;  
use DB;  
     
class OrderController extends Controller
{
    public function index()    
    {   
        $orders = DB::select("SELECT ord.order_id, ord.total_item, ord.total_price, ord.created_at, adr.first_name, adr.last_name, adr.phone, adr.email FROM orders as ord left join addresses as adr on ord.address_id = adr.id ORDER BY ord.created_at DESC");          
        return view('admin.order.view', compact('orders'));                       
    }              
    public function orderDetails($code) 
    {  
        $order = Order::where('order_id', $code)->first();    
        $address = Address::find($order->address_id);    
        $orderProduct = DB::select("SELECT op.*, pro.* FROM order_products as op left join products as pro on op.product_id = pro.id WHERE op.order_id = '".$order->id."'");   
        return view('admin.order.details', compact('order', 'address', 'orderProduct'));     
    }   
}
