@section('title') {{ 'Rental Lahenga | Orders Details' }} @endsection          
<x-app-layout>   
    <link rel="stylesheet" href="{{ asset('app-assets/css/profile.css') }}"> 
    <section class="order-sec">   
        <div class="container">
            <div class="row">
                <div class="col-lg-4"> 
                    <div class="side-bar-inner"> 
                        <div class="account-information">
                            <div class="profile-option">
                                <div class="profile-img">                                
                                    <img src="{{ asset('app-assets/images/user-default.png') }}" alt="">     
                                </div>  
                                <div class="profile-content">
                                    <div class="edit-inner">
                                        <div class="profile-title">{{ Auth::user()->name }}</div> 
                                        <div class="edit-action"> 
                                        <a href="{{ url('/profile') }}" class="edit-btn">Edit</a> 
                                        </div>  
                                    </div>
                                    <div class="profile-sub-title">{{ Auth::user()->email }}</div> 
                                    <div class="profile-date">Member Since: <span>{{ date("jS F Y", strtotime(Auth::user()->created_at)) }}</span></div>
                                </div>   
                            </div> 
                            <div class="account-inner">
                                <div class="account-icon"><i class="fas fa-user"></i></div>
                                <div class="account-item">
                                    <div class="account-title">ACCOUNT SETTINGS</div>
                                    <a href="{{ url('/profile') }}" class="account-text">Profile Information</a> 
                                    <a href="{{ url('/change-password') }}" class="account-text">Change Password</a> 
                                </div>   
                            </div>      
                            <div class="account-inner">
                                <div class="account-icon"><i class="fas fa-folder"></i></div>
                                <div class="account-item">
                                    <div class="account-title">MY STUFF</div> 
                                    <a href="#" class="account-text">Wishlist</a>  
                                    <a href="{{ url('/orders') }}" class="account-text">Orders</a>    
                                </div>     
                            </div>
                            <div class="account-inner">
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="logout-btn">
                                        <div class="account-icon"><i class="fas fa-sign-out"></i></div>
                                        <div class="account-item">
                                            <div class="account-title">Logout</div>
                                        </div>
                                    </a> 
                                </form>                        
                            </div> 
                        </div>  
                    </div> 
                </div> 
                <div class="col-lg-8"> 
                    <div class="order-list">   
                        <div class="order-item"> 
                            <table width="95%" border="0" cellspacing="0" cellpadding="0" style="margin: auto; margin-top: 25px;">    
                                <tr>    
                                    <td colspan="2" style="text-align: center; font-family: Verdana, Geneva, sans-serif; font-weight: 600; font-size: 20px;">Order Details</td> 
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
                                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;" width="30%" height="32" align="center">Product</td>
                                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333;" width="10%" align="center">Price</td>  
                                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333;" width="10%" align="center">Quantity</td>
                                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;" width="10%" align="center">Total</td> 
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
    </section>  
</x-app-layout>
      