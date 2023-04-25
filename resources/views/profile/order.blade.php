@section('title') {{ 'Rental Lahenga | Orders' }} @endsection
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
                                    <div class="profile-date">Member Since:
                                        <span>{{ date("jS F Y", strtotime(Auth::user()->created_at)) }}</span></div>
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
                                    <a href="{{ url('/orders') }}" class="account-text active">Orders</a>
                                </div>
                            </div>
                            <div class="account-inner">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                        class="logout-btn">
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
                        @if(count($order) > 0)
                        @foreach($order as $order)
                        <div class="order-item">
                            <div class="order-inner">
                                <div class="order-option">
                                    <div class="item-content">
                                        <div class="item-id">#{{ $order->order_id }}</div>
                                        <div class="payment-item">
                                            <div class="payment-title">Payment Information</div>
                                            <div class="payment-inner">
                                                <div class="payment-mode">{{ $order->pay_way }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-price">
                                        <div class="item-status"><a
                                                href="{{ url('order-details/') }}/{{ $order->order_id }}"
                                                style="font-weight: 500; color: #f44336;">Details</a></div>
                                        <div class="item-price">₹{{ $order->total_price }}</div>
                                    </div>
                                </div>
                                <div class="address-inner">
                                    <div class="order-content">
                                        <div class="date-inner">
                                            <div class="date-name">Order Date</div>
                                            <div class="item-date">{{ date('d M Y', strtotime($order->created_at)) }}
                                            </div>
                                        </div>
                                        <div class="number-inner">
                                            <div class="number-name">Number of Item</div>
                                            <div class="number-qun">{{ $order->total_item }} @if($order->total_item > 1)
                                                Items @else Item @endif</div>
                                        </div>
                                    </div>
                                    <div class="address-option">
                                        <div class="item-name">{{ $order->first_name }} {{ $order->last_name }}</div>
                                        <div class="item-address">{{ $order->street_address }},<span>{{ $order->city }},
                                                {{ $order->postcode }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="order-item">
                            <div class="order-inner">
                                <div class="order-option">
                                    <div style="display: block; margin: 0 auto;"> 
                                        <div class="cart-empty col-md-12 text-center mt-5">  
                                            <img src="{{ asset('app-assets/images/bag.png') }}" style="height: 80px;">
                                            <p style="margin-top: 2rem; margin-bottom: 5rem; font-size: 20px;">Order is
                                                not available !</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>