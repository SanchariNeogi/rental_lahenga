<!DOCTYPE html>
<html lang="en"> 
<head>  
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700;800&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('app-assets/auth/style.css') }}">  
    <link rel="stylesheet" href="{{ asset('app-assets/auth/sign_media.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/icon.png') }}">  
    <title>Rental Lahenga | Sign In</title> 
</head>  
<body>
    <main>
        <section>
            <div class="total_div">
                <div class="img_part none">
                    <img src="{{ asset('app-assets/auth/img_1.png') }}" alt="" />
                </div>
                <div class="signin_part">
                    <div class="head_text">
                        <h3>Sign In</h3> 
                        <div class="icon_signin none">
                            <a href="{{ url('/') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 320 512">
                                    <path
                                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                                </svg>
                            </a> 
                        </div>  
                    </div>
                    <div class="logo_part">
                        <img src="{{ asset('app-assets/auth/logo.png') }}" alt="" />    
                    </div>   
                    <div class="signin_input">  
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <h5>Sign in to continue</h5>
                            <x-input-error :messages="$errors->get('email')" class="mb-4 text-danger text-center" />      
                            <div class="mail_input_signin">   
                                <div class="input_group2 flex-nowrap">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required aria-label="Username" aria-describedby="addon-wrapping" />
                                    <div class="top_level2"> 
                                        <p>EMAIL</p>
                                    </div>
                                    <div class="tick">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="black"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="mail_input_signin">
                                <div class="input_group2">
                                    <div class="top_level">
                                        <p>PASSWORD</p>
                                    </div>
                                    <input type="checkbox" id="show-password" class="show-password" checked />
                                    <label for="show-password" class="Control-label Control-label--showPassword">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25"
                                            height="25" class="svg-toggle-password" title="Toggle Password Security">
                                            <title>Hide/Show Password</title>
                                            <path
                                                d="M24,9A23.654,23.654,0,0,0,2,24a23.633,23.633,0,0,0,44,0A23.643,23.643,0,0,0,24,9Zm0,25A10,10,0,1,1,34,24,10,10,0,0,1,24,34Zm0-16a6,6,0,1,0,6,6A6,6,0,0,0,24,18Z" />
                                            <rect x="20.133" y="2.117" height="44"
                                                transform="translate(23.536 -8.587) rotate(45)" class="closed-eye" />
                                            <rect x="22" y="3.984" width="4" height="44"
                                                transform="translate(25.403 -9.36) rotate(45)" style="fill: #fff"
                                                class="closed-eye" />
                                        </svg>
                                    </label>
                                    <input type="text" id="password" autocomplete="off"
                                        autocapitalize="off" autocorrect="off" name="password" required 
                                        class="ControlInput ControlInput--password form-control" />  
                                </div>
                            </div>
                            <div class="option_signin">  
                                <div class="remember_me">
                                    <input class="form-check-input" id="remember_me" type="checkbox" name="remember">  
                                    <h4>Remerber me</h4>
                                </div>
                                <div class="forgot">
                                    <a href="{{ route('password.request') }}">Forgot password?</a> 
                                </div> 
                            </div>
                            <div class="sign_btn">
                                <button type="submit" class="btn btn-dark"> 
                                    Sign In  
                                </button>  
                            </div>
                        </form>
                        <div class="option_signup">
                            <div class="qustion">
                                <h4>Don't have an account?</h4>
                            </div>
                            <div class="forgot">
                                <a href="{{ url('register') }}">Sign Up</a> 
                            </div> 
                        </div>
                        <h6 class="text-center mt-2">Log in with :</h6>  
                        <p class="text-center">                              
                            <a href="#">
                                <img src="{{ asset('app-assets/auth/facebook.png') }}" alt="" width="35">  
                            </a>
                            &nbsp;&nbsp;&nbsp; 
                            <a href="#">
                                <img src="{{ asset('app-assets/auth/google.png') }}" alt="" width="35"> 
                            </a>  
                        </p>  
                    </div> 
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body> 
</html>  


  