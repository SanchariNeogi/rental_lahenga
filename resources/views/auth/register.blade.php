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
    <title>Rental Lahenga | Sign Up</title> 
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
                        <h3>Sign Up</h3>  
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
                        <form method="POST" action="{{ route('register') }}"> 
                        @csrf          
                            <div class="mail_input_signin">     
                                <div class="input_group2 flex-nowrap">
                                    <div class="top_level2">
                                        <p>NAME</p>  
                                    </div>   
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>                                          
                                </div>      
                                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger text-center" />  
                            </div> 
                            <div class="mail_input_signin">   
                                <div class="input_group2 flex-nowrap">
                                    <div class="top_level2">
                                        <p>EMAIL</p>
                                    </div>   
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>                                       
                                </div>    
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger text-center" />   
                            </div>      
                            <div class="mail_input_signin">     
                                <div class="input_group2 flex-nowrap">
                                    <div class="top_level2">
                                        <p>PASSWORD</p> 
                                    </div>    
                                    <input type="password" class="form-control" name="password" required>                                    
                                </div>  
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger text-center" />
                            </div>
                            <div class="mail_input_signin">   
                                <div class="input_group2 flex-nowrap">
                                    <div class="top_level2">
                                        <p>RE-PASSWORD</p>  
                                    </div>      
                                    <input type="password" class="form-control" name="password_confirmation" required>                                     
                                </div>      
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger text-center" />  
                            </div>        
                            <div class="sign_btn"> 
                                <button type="submit" class="btn btn-dark"> 
                                    Sign Up   
                                </button>    
                            </div>
                        </form>
                        <div class="option_signup">
                            <div class="qustion">
                                <h4>Already have an account?</h4>
                            </div>
                            <div class="forgot">
                                <a href="{{ url('login') }}">Sign In</a>  
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


      