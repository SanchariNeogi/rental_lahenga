@section('title') {{ 'Rental Lahenga | Insta Shop' }} @endsection     
<x-app-layout> 
<div class="container-fluid px-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>  
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('app-assets/images/Banner.png') }}" class="d-block w-100" alt="..."> 
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('app-assets/images/Banner.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('app-assets/images/Banner.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="total_div_insta">
            <h3 style="margin-bottom: 30px;">Lorem Ispum</h3>
                <div class="total_prdct_part_two">
                    <div class="prdct_div">
                        <a href="./product_details.html">
                            <div class="card relative">
                                <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">LAHENGA</h5>
                                    <img src="{{ asset('app-assets/images/star_img.png') }}" alt="" class="img_star_img">
                                    <p class="card-text">LOREM ISPUM</p>
                                    <p class="card-text">₹ 500</p>    
                                    <ul class="image-small-list block"></ul>    
                                    <a href="#" class="btn add_cart_btn">
                                        <img src="{{ asset('app-assets/images/add_to_cart.png') }}" alt="">
                                        <span>ADD TO CART</span>
                                    </a>
                                </div>    
                                <div class="time_sec_insta">
                                    <div class="time_part_insta">
                                        <span>0</span>
                                        <p>Day</p>
                                    </div>
                                    <div class="time_part_insta">
                                        <span>0</span>    
                                        <p>Hrs</p>
                                    </div>
                                    <div class="time_part_insta">
                                        <span>0</span>    
                                        <p>Min</p>
                                    </div>
                                    <div class="time_part_insta">
                                        <span>0</span>    
                                        <p>Sec</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="prdct_div">
                        <a href="./product_details.html">
                            <div class="card relative">
                                <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">LAHENGA</h5>
                                    <img src="{{ asset('app-assets/images/star_img.png') }}" alt="" class="img_star_img">
                                    <p class="card-text">LOREM ISPUM</p>
                                    <p class="card-text">₹ 500</p>    
                                    <ul class="image-small-list block"></ul>    
                                    <a href="#" class="btn add_cart_btn">
                                        <img src="{{ asset('app-assets/images/add_to_cart.png') }}" alt="">
                                        <span>ADD TO CART</span>
                                    </a>
                                </div>    
                                <div class="time_sec_insta">
                                    <div class="time_part_insta">
                                        <span>0</span>
                                        <p>Day</p>
                                    </div>
                                    <div class="time_part_insta">
                                        <span>0</span>    
                                        <p>Hrs</p>
                                    </div>
                                    <div class="time_part_insta">
                                        <span>0</span>    
                                        <p>Min</p>
                                    </div>
                                    <div class="time_part_insta">
                                        <span>0</span>    
                                        <p>Sec</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="prdct_div">
                        <div class="card relative">
                            <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LAHENGA</h5>
                                <img src="{{ asset('app-assets/images/star_img.png') }}" alt="" class="img_star_img">
                                <p class="card-text">LOREM ISPUM</p>
                                <p class="card-text">₹ 500</p>
                                <ul class="image-small-list block"></ul>
                                <a href="#" class="btn add_cart_btn">
                                    <img src="{{ asset('app-assets/images/add_to_cart.png') }}" alt="">
                                    <span>ADD TO CART</span>
                                </a>
                            </div>
                            <div class="time_sec_insta">
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Day</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Hrs</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Min</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prdct_div">
                        <div class="card relative">
                            <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LAHENGA</h5>
                                <img src="{{ asset('app-assets/images/star_img.png') }}" alt="" class="img_star_img">
                                <p class="card-text">LOREM ISPUM</p>
                                <p class="card-text">₹ 500</p>
                                <ul class="image-small-list block"></ul>
                                <a href="#" class="btn add_cart_btn">
                                    <img src="{{ asset('app-assets/images/add_to_cart.png') }}" alt="">
                                    <span>ADD TO CART</span>
                                </a>
                            </div>
                            <div class="time_sec_insta">
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Day</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Hrs</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Min</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prdct_div">
                        <div class="card relative">
                            <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LAHENGA</h5>
                                <img src="{{ asset('app-assets/images/star_img.png') }}" alt="" class="img_star_img">
                                <p class="card-text">LOREM ISPUM</p>
                                <p class="card-text">₹ 500</p>
                                <ul class="image-small-list block"></ul>
                                <a href="#" class="btn add_cart_btn">
                                    <img src="{{ asset('app-assets/images/add_to_cart.png') }}" alt="">
                                    <span>ADD TO CART</span>
                                </a>
                            </div>
                            <div class="time_sec_insta">
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Day</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Hrs</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Min</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prdct_div">
                        <div class="card relative">
                            <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LAHENGA</h5>
                                <img src="{{ asset('app-assets/images/star_img.png') }}" alt="" class="img_star_img">
                                <p class="card-text">LOREM ISPUM</p>
                                <p class="card-text">₹ 500</p>
                                <ul class="image-small-list block"></ul>
                                <a href="#" class="btn add_cart_btn">
                                    <img src="{{ asset('app-assets/images/add_to_cart.png') }}" alt="">
                                    <span>ADD TO CART</span>
                                </a>
                            </div>
                            <div class="time_sec_insta">
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Day</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Hrs</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Min</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prdct_div">
                        <div class="card relative">
                            <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LAHENGA</h5>
                                <img src="{{ asset('app-assets/images/star_img.png') }}" alt="" class="img_star_img">
                                <p class="card-text">LOREM ISPUM</p>
                                <p class="card-text">₹ 500</p>
                                <ul class="image-small-list block"></ul>
                                <a href="#" class="btn add_cart_btn">
                                    <img src="{{ asset('app-assets/images/add_to_cart.png') }}" alt="">
                                    <span>ADD TO CART</span>
                                </a>
                            </div>
                            <div class="time_sec_insta">
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Day</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Hrs</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Min</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prdct_div">
                        <div class="card relative">
                            <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LAHENGA</h5>
                                <img src="{{ asset('app-assets/images/star_img.png') }}" alt="" class="img_star_img">
                                <p class="card-text">LOREM ISPUM</p>
                                <p class="card-text">₹ 500</p>
                                <ul class="image-small-list block"></ul>
                                <a href="#" class="btn add_cart_btn">
                                    <img src="{{ asset('app-assets/images/add_to_cart.png') }}" alt="">
                                    <span>ADD TO CART</span>
                                </a>
                            </div>
                            <div class="time_sec_insta">
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Day</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Hrs</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Min</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prdct_div">
                        <div class="card relative">
                            <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LAHENGA</h5>
                                <img src="{{ asset('app-assets/images/star_img.png') }}" alt="" class="img_star_img">
                                <p class="card-text">LOREM ISPUM</p>
                                <p class="card-text">₹ 500</p>
                                <ul class="image-small-list block"></ul>
                                <a href="#" class="btn add_cart_btn">
                                    <img src="{{ asset('app-assets/images/add_to_cart.png') }}" alt="">
                                    <span>ADD TO CART</span>
                                </a>
                            </div>
                            <div class="time_sec_insta">
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Day</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Hrs</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Min</p>
                                </div>
                                <div class="time_part_insta">
                                    <span>0</span>
                                    <p>Sec</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lode_more">
                    <button type="button" class="btn lode_more_btn btn-outline-danger">Lode more</button>
                </div>            
            </div>
    </section> 
</x-app-layout>