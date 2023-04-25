<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="utf-8"> 
    <title>Login | Rental Lahenga - Admin</title>   
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/icon.png') }}">      
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style926d.css?v1.1.1') }}"> 
</head>  
<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
        <div class="nk-main">
            <div class="nk-wrap align-items-center justify-content-center">
                <div class="container p-2 p-sm-4">
                    <div class="wide-xs mx-auto">
                        <div class="text-center mb-5">
                            <div class="brand-logo mb-1">
                                <a href="{{ url('admin/login') }}" class="logo-link">
                                    <div class="logo-wrap">
                                        <img src="{{ asset('admin-assets/images/logo.png') }}" alt="" height="100">  
                                    </div>  
                                </a>
                            </div> 
                        </div>
                        <div class="card card-gutter-lg rounded-4 card-auth">
                            <div class="card-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title mb-1">Login to Account</h3>
                                        <p class="small">Please sign-in to your account and start the adventure.</p>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('admin.adminlogin') }}" id="loginForm">    
                                @csrf     
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="username" class="form-label">Email ID</label>
                                                <div class="form-control-wrap">
                                                    <input type="email" name="email" class="form-control" placeholder="Enter email id" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" name="password" class="form-control" placeholder="Enter password" required> 
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex flex-wrap justify-content-between">
                                                <div class="form-check form-check-sm">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
                                                    <label class="form-check-label" for="rememberMe">Remember Me</label>   
                                                </div> 
                                            </div> 
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid"><button class="btn btn-primary" type="submit">Login to account</button></div> 
                                        </div>
                                    </div>
                                </form> 
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="failLogin" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true"> 
        <div class="modal-dialog modal-dialog-centered"> 
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <div class="avatar-md mx-auto mb-4">
                            <div class="text-danger" style="font-size: 80px; line-height: 0;">   
                                <em class="icon ni ni-cross-circle-fill"></em>   
                            </div>
                        </div> 
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <h4 class="text-danger">Error !</h4> 
                                <p class="text-muted font-size-14 mb-4">These credentials do not match our records.</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
</body>
<script src="{{ asset('admin-assets/js/bundle.js') }}"></script>
<script src="{{ asset('admin-assets/js/scripts.js') }}"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> 
</html>    
<script type="text/javascript">     
    var frm = $('#loginForm');     
    frm.submit(function (e) {   
        e.preventDefault(); 
        $.ajax({ 
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),  
            success: function (data) {  
                window.location.href = 'dashboard';  
            },          
            error: function (data) { 
                $('#failLogin').modal('show'); 
            },   
        });  
    });  
</script>   

