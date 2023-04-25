@section('title') {{ 'Rental Lahenga | Cart' }} @endsection    
<x-app-layout>  
    <link rel="stylesheet" href="{{ asset('app-assets/css/addtocart.css') }}">  
    <section>  
        @if($carts)
            <div class="total_addtocart" style="margin-top: 100px; margin-bottom: 100px;"> 
                @foreach($carts as $cart)
                    <div class="firsts_div">
                        <div class="same_divs">
                            <img src="{{ asset($cart->product_thumbnail) }}" alt="">
                        </div>
                        <div class="same_div">  
                            <h6>{{ $cart->product_name }}</h6> 
                            <form method="POST" action="{{ route('update.cart') }}" id="update_cart">     
                            @csrf    
                                <input type="hidden" name="id" value="{{ $cart->id }}">
                                <div class="count_div"> 
                                    <div class="number">
                                        <span class="minus">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                                </svg>
                                        </span>
                                        <input type="number" value="{{ $cart->product_quantity }}" name="qty" id="qty" step="1" min="1">
                                        <span class="plus"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="anchor_div">
                                    <button type="submit">Update Cart</button> 
                                    <a href="{{ url('delete-cart-product') }}/{{ $cart->id }}" style="color: #df1d79;"> Delete</a>
                                </div>  
                            </form> 
                        </div> 
                        <div class="price_div">
                            <h4>₹{{ $cart->product_price }}</h4>
                        </div>
                    </div>
                @endforeach
                <div class="third_part">
                    <h4>Order Summary</h4>
                    <div class="same_div">
                        <h5>No. of products</h5>
                        <h5>{{ $items }} @if($items > 1) Items @else Item @endif</h5> 
                    </div> 
                    <div class="same_div"
                        style=" padding-bottom: 10px;  margin-bottom: 10px;border-bottom: 1px solid #a8a8a8 ; padding-top: 10px;">
                        <h5>Amount</h5>
                        <h5>₹{{ $total_price }}</h5>
                    </div>
                    <div class="same_div_2">
                        <h3>Total Amount</h3>
                        <h3>₹{{ $total_price }}</h3> 
                    </div>   
                    <a href="{{ url('checkout') }}">Proceed To Checkout</a>  
                </div>  
            </div>
        @else
            <div class="cart-empty col-md-12 text-center" style="margin-top: 120px; margin-bottom: 120px;">        
                <img src="{{ asset('app-assets/images/empty-cart.png') }}" style="height: 120px;">      
                <p style="color: #DC423E; margin-top: 2rem; font-weight: 600; font-size: 20px;">Your cart is empty !</p>        
                <div class="checkout-action" style="background-color: #df1d79; font-size: 20px; padding: 12px 25px; display: inline; border-radius: 10px; margin-top: 45px !important; display: table; margin: 0 auto;">     
                    <a href="{{ url('shop') }}" class="cart-action" style="color: white;">Shop Now</a>     
                </div>   
            </div>       
        @endif 
    </section> 
</x-app-layout>  
<script>
    $(document).ready(function() {
        $('.minus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });
</script> 