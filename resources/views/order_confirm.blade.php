@section('title') {{ 'Rental Lahenga | Order Confirm' }} @endsection    
<x-app-layout>    
<section class="checkout-section mt-5 mb-5"> 
  <div class="container">
    <div class="row justify-content-between">  
      <div class="col-md-12">
        <div class="shopping-details" style="margin-top: 60px; margin-bottom: 60px;">
            <div id="mstick" class="gcpjl">
                <div class="circle-loader-wrap">
                    <div class="circle-loader-wrap-background"></div>
                    <div class="left-wrap">
                        <div class="semicircle semicircle--pre"></div>
                        <div class="semicircle semicircle--post"></div>
                    </div>
                    <div class="right-wrap">
                        <div class="semicircle semicircle--pre"></div>
                        <div class="semicircle semicircle--post"></div>
                    </div>
                </div>
                <div class="text-wrap">
                    <div class="text-mstick text-mstick--two">
                        <div class="check-mark"></div>
                    </div>
                </div>
                <div class="text-wrap">
                    <div class="text-mstick text-mstick--three">
                        <div class="confirmation">Order Placed Successfully</div> 
                    </div> 
                </div>
            </div>
            <div class="text-center h4 mb-4">Thank you for your order <span style="color: var(--primaryColor);">{{ $address->first_name }}</span> !</div>              
            <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
                <tbody>  
                    <tr>
                        <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <td align="center" style="padding-bottom:30px; background-color: #ffffff;" bgcolor="#ffffff">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                            <tr>
                                                <td align="left" style="padding-top: 20px;">
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td width="75%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">Order Confirmation #</td>
                                                                <td width="25%" align="right" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">{{ $order->order_id }}</td>
                                                            </tr>
                                                            @foreach($orderProduct as $orderProduct) 
                                                                <tr> 
                                                                    <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 8px 10px 5px 10px;">{{ $orderProduct->product_name }} × {{ $orderProduct->product_quantity }}</td>   
                                                                    <td width="25%" align="right" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 8px 10px 5px 10px;">₹{{ $orderProduct->product_price * $orderProduct->product_quantity }}</td>       
                                                                </tr> 
                                                            @endforeach
                                                        </tbody> 
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding-top: 20px;">
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <tbody><tr>
                                                            <td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">TOTAL</td>
                                                            <td width="25%" align="right" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">₹{{ $order->total_price }}</td>      
                                                        </tr>    
                                                    </tbody></table>  
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" height="100%" valign="top" width="100%" style="background-color: #ffffff;" bgcolor="#ffffff">
                                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody><tr>
                                                <td align="center" valign="top" style="font-size:0;">
                                                    <div style="display:inline-block; max-width:100%; min-width:240px; vertical-align:top; width:100%;">
                                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                                            <tbody><tr>
                                                                <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                                    <p style="font-weight: 800;">Delivery Address</p>
                                                                    <p style="font-weight: 500;">{{ $address->first_name }} {{ $address->last_name }}</p>
                                                                    <p>{{ $address->street_address }}<br>
                                                                        {{ $address->city }}, {{ $address->postcode }} 
                                                                    </p>    
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </div>
                                                    <div style="display:inline-block; max-width:100%; min-width:240px; vertical-align:top; width:100%;">
                                                        <table align="right" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                                            <tbody><tr>
                                                                <td align="right" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                                    <p style="font-weight: 800;">Payment Method</p>
                                                                    <p>
                                                                        {{ $order->pay_way }}
                                                                    </p> 
                                                                </td> 
                                                            </tr>
                                                            <tr>
                                                                <td align="right" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                                    <p style="font-weight: 800; margin-top: 10px;">Invoice</p> 
                                                                    <p>
                                                                        <a href="{{ url('invoice') }}/{{ $order->id }}" class="btn btn-success" style="margin-top: 8px;">Download</a>  
                                                                    </p>  
                                                                </td>  
                                                            </tr> 
                                                        </tbody></table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr> 
                </tbody>
            </table>
            <div class="checkout-action" style="background-color: #df1d79; font-size: 20px; padding: 12px 25px; display: inline; border-radius: 10px;">  
                <a href="{{ url('/') }}" class="cart-action" style="color: white;">Back to Home Page</a>    
            </div>   
          </div>
        </div>
      </div>      
    </div>
  </div>
</section>
 
</x-app-layout> 

<style>
    .looding { margin-bottom: -60px !important; }  
    #mstick {width: 100%; height: 240px; margin: 0 auto; position: relative; overflow: hidden;}
    #mstick .circle-loader-wrap {margin: 0 auto; overflow: hidden; width: 170px; height: 170px; border-radius: 50%; transform: rotate(180deg); opacity: 0; background-color: blue;
    animation-name: fade-in; animation-duration: 0.75s; animation-fill-mode: forwards; animation-timing-function: ease-out;}
    #mstick .circle-loader-wrap:after {content:''; position: absolute; z-index: 4; left: 10px; top: 10px; width: 150px; height: 150px; border-radius: 50%;
    background-color: #f5f5f5; transform: translateZ(1000px); transform-style: preserve-3d;}
    #mstick .circle-loader-wrap .circle-loader-wrap-background {position: absolute; z-index: 0; top: 50%; left: 50%; width: 99%; height: 99%; border-radius: 50%; transform: translate(-50%, -50%); background: linear-gradient(45deg, var(--primaryColor), var(--primaryColor));}
    #mstick .circle-loader-wrap div {overflow: hidden; position: absolute; width: 50%; height: 100%;}
    #mstick .circle-loader-wrap .semicircle {position: absolute; z-index: 0; left: 100%; top: 0; width: 100%; height: 100%; border-radius: 1000px;  animation-duration: 2s; animation-timing-function: linear;  animation-delay: 0.75s; animation-fill-mode: forwards;}
    #mstick .circle-loader-wrap .semicircle--pre {z-index: 1; background-color: #ffffff;}
    #mstick .circle-loader-wrap .semicircle--post {z-index: 2; background-color: #f5f5f5;}
    #mstick .circle-loader-wrap .left-wrap {left: 0;}
    #mstick .circle-loader-wrap .left-wrap .semicircle {border-top-left-radius: 0; border-bottom-left-radius: 0; transform-origin: 0 50% 0;}
    #mstick .circle-loader-wrap .left-wrap .semicircle--pre {animation-name: loading-left--pre; animation-timing-function: cubic-bezier(0.8, 0.05, 1, 1);
    transform: rotate(-180deg);}
    #mstick .circle-loader-wrap .left-wrap .semicircle--post {animation-name: loading-left--post; animation-delay: 3.25s; animation-timing-function: cubic-bezier(0.8, 0.05, 1, 1); transform: rotate(0deg);}
    #mstick .circle-loader-wrap .right-wrap {left: 50%;}
    #mstick .circle-loader-wrap .right-wrap .semicircle {left: -100%; border-bottom-right-radius: 0; border-top-right-radius: 0; transform-origin: 100% 50% 0;}
    #mstick .circle-loader-wrap .right-wrap .semicircle--pre {animation-name: loading-right--pre; animation-timing-function: cubic-bezier(0, 0, 0.2, 1.01);
    transform: rotate(-180deg);}
    #mstick .circle-loader-wrap .right-wrap .semicircle--post {animation-name: loading-right--post; animation-delay: 3.25s; animation-timing-function: cubic-bezier(0, 0, 0.2, 1.01); transform: rotate(0deg);}
    #mstick .text-wrap {display: flex; align-items: center; justify-content: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 100; font-family: MetaOT, sans-serif; font-weight: normal; text-align: center;}
    #mstick .text-wrap .text-mstick {opacity: 0; position: relative;}
    #mstick .text-wrap .text-mstick--one {top: 30px; animation-name: fade-up-in, fade-up-out; animation-duration: 0.75s, 0.5s; animation-delay: 0s, 2.75s;
    animation-fill-mode: forwards; animation-timing-function: ease-out;}
    #mstick .text-wrap .text-mstick--two {top: 10px; animation-name: fade-up-in--check, move-up--check; animation-duration: 0.5s, 0.6s; animation-delay: 2.75s, 5.25s;  animation-fill-mode: forwards; animation-timing-function: ease, ease-out;}
    #mstick .text-wrap .text-mstick--three {top: 30px; animation-name: fade-in, move-up--confirmation; animation-duration: 0.6s; animation-delay: 5.25s;
    animation-fill-mode: forwards; animation-timing-function: cubic-bezier(0.9, 0, 1, 1), ease-out;}
    #mstick .text-wrap .optimizing {font-weight: 500; font-size: 14px; color: var(--primaryColor);} 
    #mstick .text-wrap .name {font-size: 23px; font-weight: 500;} 
    #mstick .text-wrap .confirmation {font-size: 24px; font-weight: 500; line-height: 1; padding-bottom: 15px; color: var(--primaryColor);}
    #mstick .text-wrap .confirmation-subtitle {color: var(--primaryColor); font-size: 17px; font-weight: 500; line-height: 1;}
    #mstick .check-mark {position: relative; transform: rotate(-45deg); display: inline-block; left: -18px; top: -26px;}
    #mstick .check-mark:before, body #mstick .check-mark:after {content: '';  background-color: blue;  display: block;  border-radius: 2px;}
    #mstick .check-mark:before {  width: 10px;  height: 30px;}
    #mstick .check-mark:after {position: absolute; width: 58px; height: 10px; bottom: 0;}

    @keyframes loading-left--pre {
    0% {transform: rotate(-180deg);}
    50%, 100% {transform: rotate(0deg); }
    }

    @keyframes loading-right--pre {
    0%, 50% {transform: rotate(-180deg); }
    100% {transform: rotate(0deg);}
    }

    @keyframes loading-left--post {
    0% {transform: rotate(0deg); }
    50%, 100% { transform: rotate(180deg); }
    }

    @keyframes loading-right--post {
    0%, 50% {transform: rotate(0deg); }
    100% {transform: rotate(180deg); }
    }

    @keyframes fade-in {
    from {opacity: 0;}
    to {opacity: 1;}
    }

    @keyframes fade-up-in {
    from {opacity: 0; top: 30px;}
    to {opacity: 1; top: 0px;}
    }

    @keyframes fade-up-in--check {
    from {opacity: 0; top: 10px; }
    to {opacity: 1; top: 0px;}
    }

    @keyframes fade-up-out {
    from {opacity: 1; top: 0px;}
    to {opacity: 0; top: -10px;}
    }

    @keyframes move-up--confirmation {
    from {top: 60px;}
    to {top: 10px;}
    }

    @keyframes move-up--check {
    from {top: 0px;}
    to {top: -12px;}
    }
</style>
   