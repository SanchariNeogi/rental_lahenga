@section('title') {{ 'Rental Lahenga | Change Password' }} @endsection       
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
                                    <a href="{{ url('/profile') }}" class="account-text">Profile Information</a> 
                                    <a href="{{ url('/change-password') }}" class="account-text active">Change Password</a> 
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
                            <form method="post" action="{{ route('password.update') }}"> 
                            @csrf 
                            @method('put')
                                <div class="profile-inner">                            
                                    <div class="information-item">
                                        <div class="title">Update Password
                                            <br>
                                            <small class="pt-2">Ensure your account is using a long, random password to stay secure.</small>  
                                        </div>                                               
                                        <div class="form-row">    
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="control-label mb-1 required">Current Password</div>
                                                    <input type="password" class="form-control" name="current_password" required>
                                                    <x-input-error class="mt-2 text-danger" :messages="$errors->updatePassword->get('current_password')" />    
                                                </div>                                                
                                            </div> 
                                        </div>
                                        <div class="form-row">    
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="control-label mb-1 required">New Password</div>
                                                    <input type="password" class="form-control" name="password" required> 
                                                    <x-input-error class="mt-2 text-danger" :messages="$errors->updatePassword->get('password')" />  
                                                </div>                                                  
                                            </div>
                                        </div>
                                        <div class="form-row">    
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="control-label mb-1 required">Confirm Password</div> 
                                                    <input type="password" class="form-control" name="password_confirmation" required>
                                                    <x-input-error class="mt-2 text-danger" :messages="$errors->updatePassword->get('password_confirmation')" />  
                                                </div>                                                   
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="save-action"> 
                                        <button type="submit" class="save-btn">Save</button>  
                                    </div>  
                                </div>   
                                @if (session('status') === 'password-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 text-success fw-bold mt-3"  
                                    >{{ __('Password Saved.') }}</p>    
                                @endif  
                            </form>                                                     
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </section>  
</x-app-layout>
  