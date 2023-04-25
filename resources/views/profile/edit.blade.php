@section('title') {{ 'Rental Lahenga | Profile' }} @endsection      
<x-app-layout> 
    <link rel="stylesheet" href="{{ asset('app-assets/css/profile.css') }}"> 
    <section class="sec-profile">   
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
                                    <a href="{{ url('/profile') }}" class="account-text active">Profile Information</a> 
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
                    <div class="information-inner">
                        <div class="information-content">
                            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                @csrf
                            </form>  
                            <form method="post" action="{{ route('profile.update') }}"> 
                            @csrf 
                            @method('patch')
                                <div class="profile-inner">                            
                                    <div class="information-item">
                                        <div class="title">Personal Informations
                                            <br>
                                            <small class="pt-2">Update your account's profile information and email address.</small> 
                                        </div>                                              
                                        <div class="form-row">    
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="control-label mb-1 required">Full Name</div>
                                                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
                                                </div>
                                                <x-input-error class="mt-2 text-danger" :messages="$errors->get('name')" />    
                                            </div>
                                        </div>
                                        <div class="form-row">  
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="control-label mb-1 required">E-mail Address</div>  
                                                    <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required>
                                                </div>  
                                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                    <div>
                                                        <p class="text-sm mt-2 text-gray-800">
                                                            {{ __('Your email address is unverified.') }}

                                                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                {{ __('Click here to re-send the verification email.') }}
                                                            </button>
                                                        </p>

                                                        @if (session('status') === 'verification-link-sent')
                                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                                {{ __('A new verification link has been sent to your email address.') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>  
                                        </div>
                                    </div> 
                                    <div class="save-action"> 
                                        <button type="submit" class="save-btn">Save</button>  
                                    </div>  
                                </div>   
                                @if (session('status') === 'profile-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 text-success fw-bold mt-3"  
                                    >{{ __('Profile Saved.') }}</p>   
                                @endif 
                            </form>                                                     
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </section>  
</x-app-layout>
