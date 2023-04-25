<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Address;  
use App\Models\Order; 
use App\Models\OrderProduct;  
use DB;  
use Session;
use Auth; 
use PDF;
 
class CheckoutController extends Controller
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
        $address = Address::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();   
        return view('checkout', compact('carts', 'items', 'total_price', 'address'));           
    }  
    public function addAddress(Request $request)
    {
        $address = new Address;    
        $address->user_id = Auth::user()->id;      
        $address->first_name = $request->input('first_name');      
        $address->last_name = $request->input('last_name');     
        $address->phone = $request->input('phone');     
        $address->email = $request->input('email');     
        $address->address_type = $request->input('address_type');     
        $address->street_address = $request->input('street_address');     
        $address->postcode = $request->input('postcode');     
        $address->city = $request->input('city');  
        $address->save(); 
        return back()->with('success', 'Address added successfully.'); 
    } 
    public function processToCheckout(Request $request)   
    {         
        $items = 0;
        $total_price = 0; 
        $carts = DB::select("SELECT crt.*, pro.product_slug, pro.product_thumbnail, pro.product_name, pro.product_price FROM carts as crt left join products as pro on crt.product_id = pro.id WHERE crt.user_id = '".Session::get('RLuserID')."' ORDER BY crt.created_at DESC");          
        for($i = 0; $i < count($carts); $i++)     
        { 
            $items = $items + 1; 
            $total_price = $total_price + ($carts[$i]->product_price * $carts[$i]->product_quantity);   
        }    
        $order = new Order;  
        $order->user_id = Auth::user()->id;     
        $order->address_id = $request->input('address_id');   
        $order->order_id = 'ORDRL'.rand(11111111, 99999999);        
        $order->total_price = $total_price;     
        $order->pay_way = 'Cash on Delivery';    
        $order->total_item = $items;   
        date_default_timezone_set('Asia/Kolkata');    
        $order->created_at = date('Y-m-d H:i:s');       
        $order->save();   
        for($i = 0; $i < count($carts); $i++)    
        {         
            $order_product = OrderProduct::create(['order_id' => $order->id, 'product_id' => $carts[$i]->product_id, 'product_quantity' => $carts[$i]->product_quantity]);      
            Cart::where('id', $carts[$i]->id)->delete();         
        }            
        Session::put('RLCurrentOrderId', $order->id);    
        return redirect('order-confirm');      
    } 
    public function orderConfirm()
    {
        $orderId = Session::get('RLCurrentOrderId');   
        $order = Order::find($orderId);   
        $address = Address::find($order->address_id);  
        $orderProduct = DB::select("SELECT op.*, pro.* FROM order_products as op left join products as pro on op.product_id = pro.id WHERE op.order_id = '".$orderId."'"); 
        return view('order_confirm', compact('order', 'address', 'orderProduct'));      
    }  
    public function invoice($id)  
    {
        $order = Order::find($id);   
        $address = Address::find($order->address_id);  
        $orderProduct = DB::select("SELECT op.*, pro.* FROM order_products as op left join products as pro on op.product_id = pro.id WHERE op.order_id = '".$id."'");  
        $data = compact('order', 'address', 'orderProduct');       
        $pdf = PDF::loadView('invoice', $data);     
        return $pdf->download('invoice.pdf');    
    }  
}
