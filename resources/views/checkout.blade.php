@section('title') {{ 'Rental Lahenga | Checkout' }} @endsection     
<x-app-layout>  
    <link rel="stylesheet" href="{{ asset('app-assets/css/checkout.css') }}">  
    <section class="checkout_full_part">
        @if($carts)
            <div class="total_checkout_part" style="margin-top: 120px; margin-bottom: 120px;"> 
                <div class="first_part">  
                    @if(count($address) > 0)    
                        <h3>Shipping Address</h3>
                        <form method="POST" action="{{ route('process.to.checkout') }}">   
                        @csrf  
                            @foreach($address as $address)   
                                <input type="radio" value="{{ $address->id }}" name="address_id" checked>   
                                <div class="address_prof"> 
                                    <h5>{{ $address->first_name }} {{ $address->last_name }}</h5>
                                    <h6>
                                        {{ $address->street_address }} <br>
                                        {{ $address->city }}, {{ $address->postcode }} 
                                    </h6>
                                    <h6>{{ $address->phone }}</h6>
                                    <h6 style="margin: 0;">Address Type: {{ $address->address_type }}</h6> 
                                </div> 
                            @endforeach  
                            <button type="submit" class="confirm_button">
                                Proceed To Confirm
                            </button> 
                        </form> 
                    @else 
                        <p style="color: #DC423E; margin-top: 5rem; font-weight: 600; font-size: 16px;">Address is not available! Please add a new address.</p>        
                    @endif 
                </div>
                <div class="second_part">            
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#df1d79" class="bi bi-house-add" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                        Add A New Address 
                    </button>   
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">    
                            <div class="modal-content"> 
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <form method="POST" action="{{ route('add.address') }}">          
                                                @csrf      
                                                    <div class="title h6 mb-3">Personal Informations</div> 
                                                    <div class="row"> 
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-1">First Name</div>
                                                                <input type="text" class="form-control" name="first_name" required> 
                                                            </div>  
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-1">Last Name</div>
                                                                <input type="text" class="form-control" name="last_name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-1">Phone Number</div>
                                                                <input type="number" class="form-control" name="phone" required> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-1">E-mail Address</div>
                                                                <input type="email" class="form-control" name="email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text">Address Type :</div>
                                                        <p>
                                                            <input type="radio" value="Home (All Day Delivery)" id="test1" name="address_type" checked>
                                                            <label for="test1">Home (All Day Delivery)</label>
                                                        </p>
                                                        <p>
                                                            <input type="radio" value="Office (Delivery 10am - 05pm)" id="test2" name="address_type"> 
                                                            <label for="test2">Office (Delivery 10am - 05pm)</label>
                                                        </p> 
                                                    </div>    
                                                    <div class="form-group">
                                                        <div class="mb-1">Street Address</div>   
                                                        <textarea class="form-control" name="street_address" required></textarea> 
                                                    </div>   
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-1">Postcode / ZIP</div> 
                                                                <input type="number" class="form-control" name="postcode" required> 
                                                            </div>  
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-1">Town / City</div>
                                                                <input type="text" class="form-control" name="city" required>  
                                                            </div>   
                                                        </div>
                                                    </div>   
                                                    <div class="mt-2 mb-2">
                                                        <button type="submit" class="btn btn-primary text-white">Submit</button> 
                                                    </div> 
                                                </form>  
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="ckeck_box">
                        <label class="containers">Cash on Delivery
                            <input type="checkbox" checked>  
                            <span class="checkmark"></span>
                        </label>
                        <!-- <label class="containers">Online Payment
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label> -->
                    </div>      
                    <a href="{{ url('cart') }}">Back To Cart</a> 
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