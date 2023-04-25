<x-admin-layout>    
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="row g-gs">
                        <div class="col-sm-12 col-xl-12 col-xxl-12">
                            <div class="card h-100">
                                <div class="card-body">     
                                    <table width="90%" border="0" cellspacing="0" cellpadding="0" style="margin: auto; margin-top: 25px;">   
                                        <tr>   
                                            <td colspan="2" style="text-align: center; font-family: Verdana, Geneva, sans-serif; font-weight: 600; font-size: 20px;">@if($order->customized == 1) Customized @endif Order Details</td> 
                                        </tr>    
                                        <tr>  
                                            <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>  
                                            <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>  
                                            <td colspan="2">&nbsp;</td>
                                        </tr> 
                                        <tr> 
                                            <td width="49%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td style="font-family: Verdana, Geneva, sans-serif; font-weight: 600; font-size: 15px;">Order ID: {{ $order->order_id }}</td> 
                                                </tr>  
                                                <tr> 
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Delivery Address</td> 
                                                </tr> 
                                                <tr>
                                                    <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:14px;">{{ $address->first_name }} {{ $address->last_name }}</td> 
                                                </tr> 
                                                <tr>
                                                    <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;">
                                                    {{ $address->street_address }} <br>
                                                    {{ $address->city }}, {{ $address->postcode }}  
                                                    </td> 
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr> 
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                </table></td>
                                            </tr>
                                            </table></td>
                                            <td width="51%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" align="right"></td>
                                            </tr>
                                            <tr>
                                                <td align="right"><a class="btn btn-success" href="{{ url('invoice') }}/{{ $order->id }}">Invoice</a></td>   
                                            </tr>    
                                            <tr>
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"  align="right">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"  align="right">Order Date: {{ date('d M Y', strtotime($order->created_at)) }}</td>
                                            </tr> 
                                            <tr>
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"  align="right">Phone: {{ $address->phone }}</td> 
                                            </tr> 
                                            <tr>
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"  align="right">Email: {{ $address->email }}</td> 
                                            </tr>   
                                            </table></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;" width="26%" height="32" align="center">Product</td> 
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333;" width="9%" align="center">Price</td>   
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333;" width="9%" align="center">Quantity</td>
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;" width="9%" align="center">Total</td>   
                                            </tr>
                                            @foreach($orderProduct as $orderProduct) 
                                            <tr>
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;" height="32" align="center">{{ $orderProduct->product_name }}</td>   
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-right:1px solid #333;" align="center">₹{{ $orderProduct->product_price }}</td>         
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-right:1px solid #333;" align="center">{{ $orderProduct->product_quantity }}</td>  
                                                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;" align="center">₹{{ $orderProduct->product_price * $orderProduct->product_quantity }}</td>     
                                            </tr>  
                                            @endforeach  
                                            </table></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:14px;" align="right">Total Amount: ₹{{ $order->total_price }}</td>    
                                        </tr>
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:14px;" colspan="2">
                                            Payment Method: 
                                            {{ $order->pay_way }} 
                                            </td> 
                                        </tr> 
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                        </tr>   
                                        <tr> 
                                            <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">&nbsp;</td>
                                        </tr>
                                    </table>       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div>  
</x-admin-layout>   