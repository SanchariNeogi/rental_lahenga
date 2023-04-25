@section('title')
    {{ 'Rental Lahenga | Home' }}
@endsection
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
    <section class="haldi_photo">
        <div class="haldi_pic_total">
            <a href="#" data-lightbox="homePortfolio">
                <img src="{{ asset('app-assets/images/home/img_12.png') }}" />
                <div class="text_div">
                    <h5>{{ $haldi->categoryName }}</h5>
                </div>
            </a>
            <a href="#" data-lightbox="homePortfolio" class="vertical">
                <img src="{{ asset('app-assets/images/home/img_11.png') }}" />
                <div class="text_div">
                    <h5>{{ $sangeet->categoryName }}</h5>
                </div>
            </a>
            <a href="#" data-lightbox="homePortfolio" class="horizontal">
                <img src="{{ asset('app-assets/images/home/img_14.png') }}" />
            </a>
            <a href="#" data-lightbox="homePortfolio" class="vertical">
                <img src="{{ asset('app-assets/images/home/img_11.png') }}" />
                <div class="text_div">
                    <h5>{{ $mehendi->categoryName }}</h5>
                </div>
            </a>
            <a href="#" data-lightbox="homePortfolio">
                <img src="{{ asset('app-assets/images/home/img_13.png') }}" />
                <div class="text_div">
                    <h5>{{ $wedding->categoryName }}</h5>
                </div>
            </a>
            <a href="#" data-lightbox="homePortfolio">
                <img src="{{ asset('app-assets/images/home/img_12.png') }}" />
                <div class="text_div">
                    <h5>{{ $bridesmaid->categoryName }}</h5>
                </div>
            </a>
            <a href="#" data-lightbox="homePortfolio">
                <img src="{{ asset('app-assets/images/home/img_13.png') }}" />
                <div class="text_div">
                    <h5>{{ $reception->categoryName }}</h5>
                </div>
            </a>
        </div>
    </section>
    <section>
        <div class="total_div_two">
            <div class="total_prdct_part_two">
                <div class="prdct_div_two">
                    <a href="./product_details.html">
                        <div class="card">
                            <ul class="image-big-list">
                                <li class="image-big-list-item4 active">
                                    <img src="{{ asset('app-assets/images/img_1.png') }}">
                                </li>
                                <li class="image-big-list-item4">
                                    <img src="{{ asset('app-assets/images/img_2.png') }}">
                                </li>
                                <li class="image-big-list-item4">
                                    <img src="{{ asset('app-assets/images/img_3.png') }}">
                                </li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">LAHENGA</h5>
                                <img src="{{ asset('app-assets/images/star_img.png') }}" alt=""
                                    class="img_star_img">
                                <p class="card-text">LOREM ISPUM</p>
                                <p class="card-text">₹ 500</p>
                                <ul class="image-small-list4">
                                    <li class="image-small-list-item4 active">
                                        <img src="{{ asset('app-assets/images/img_1.png') }}" alt="">
                                    </li>
                                    <li class="image-small-list-item4">
                                        <img src="{{ asset('app-assets/images/img_2.png') }}" alt="">
                                    </li>
                                    <li class="image-small-list-item4">
                                        <img src="{{ asset('app-assets/images/img_3.png') }}" alt="">
                                    </li>
                                </ul>
                                <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="prdct_div_two">
                    <a href="./product_details.html">
                        <div class="card">
                            <ul class="image-big-list">
                                <li class="image-big-list-item5 active">
                                    <img src="{{ asset('app-assets/images/img_1.png') }}">
                                </li>
                                <li class="image-big-list-item5">
                                    <img src="{{ asset('app-assets/images/img_2.png') }}">
                                </li>
                                <li class="image-big-list-item5">
                                    <img src="{{ asset('app-assets/images/img_3.png') }}">
                                </li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">LAHENGA</h5>
                                <img src="{{ asset('app-assets/images/star_img.png') }}" alt=""
                                    class="img_star_img">
                                <p class="card-text">LOREM ISPUM</p>
                                <p class="card-text">₹ 500</p>
                                <ul class="image-small-list5">
                                    <li class="image-small-list-item5 active">
                                        <img src="{{ asset('app-assets/images/img_1.png') }}" alt="">
                                    </li>
                                    <li class="image-small-list-item5">
                                        <img src="{{ asset('app-assets/images/img_2.png') }}" alt="">
                                    </li>
                                    <li class="image-small-list-item5">
                                        <img src="{{ asset('app-assets/images/img_3.png') }}" alt="">
                                    </li>
                                </ul>
                                <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="prdct_div_two">
                    <div class="card">
                        <ul class="image-big-list">
                            <li class="image-big-list-item6 active">
                                <img src="{{ asset('app-assets/images/img_1.png') }}">
                            </li>
                            <li class="image-big-list-item6">
                                <img src="{{ asset('app-assets/images/img_2.png') }}">
                            </li>

                            <li class="image-big-list-item6">
                                <img src="{{ asset('app-assets/images/img_3.png') }}">
                            </li>
                        </ul>
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <img src="{{ asset('app-assets/images/star_img.png') }}" alt=""
                                class="img_star_img">
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list4">
                                <li class="image-small-list-item6 active">
                                    <img src="{{ asset('app-assets/images/img_1.png') }}" alt="">
                                </li>
                                <li class="image-small-list-item6">
                                    <img src="{{ asset('app-assets/images/img_2.png') }}" alt="">
                                </li>
                                <li class="image-small-list-item6">
                                    <img src="{{ asset('app-assets/images/img_3.png') }}" alt="">
                                </li>
                            </ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card">
                        <ul class="image-big-list">
                            <li class="image-big-list-item7 active">
                                <img src="{{ asset('app-assets/images/img_1.png') }}">
                            </li>
                            <li class="image-big-list-item7">
                                <img src="{{ asset('app-assets/images/img_2.png') }}">
                            </li>
                            <li class="image-big-list-item7">
                                <img src="{{ asset('app-assets/images/img_3.png') }}">
                            </li>
                        </ul>
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <img src="{{ asset('app-assets/images/star_img.png') }}" alt=""
                                class="img_star_img">
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list4">
                                <li class="image-small-list-item7 active">
                                    <img src="{{ asset('app-assets/images/img_1.png') }}" alt="">
                                </li>
                                <li class="image-small-list-item7">
                                    <img src="{{ asset('app-assets/images/img_2.png') }}" alt="">
                                </li>
                                <li class="image-small-list-item7">
                                    <img src="{{ asset('app-assets/images/img_3.png') }}" alt="">
                                </li>
                            </ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card">
                        <img src="{{ asset('app-assets/images/img_2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list block"></ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card">
                        <img src="{{ asset('app-assets/images/img_1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list block"></ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card relative">
                        <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list block"></ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                        <div class="time_sec">
                            <div class="time_part">
                                <span>0</span>
                                <p>Day</p>
                            </div>
                            <div class="time_part">
                                <span>0</span>
                                <p>Hrs</p>
                            </div>
                            <div class="time_part">
                                <span>0</span>
                                <p>Min</p>
                            </div>
                            <div class="time_part">
                                <span>0</span>
                                <p>Sec</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card">
                        <img src="{{ asset('app-assets/images/img_1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list block"></ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mid_apart">
        <div class="total_div">
            <div class="same_div">
                <div class="top_bar_img">
                    <img src="{{ asset('app-assets/images/home/img_6.png') }}" alt="">
                </div>
                <div class="mid_letter_div">
                    <p>FALL-WINTER CLEARANCE SALES</p>
                    <h5>GET UPTO <span>50% OFF</span></h5>
                </div>
            </div>
            <div class="same_div">
                <div class="top_bar_img">
                    <img src="{{ asset('app-assets/images/home/img_7.png') }}" alt="">
                </div>
                <div class="mid_letter_div">
                    <p>WINTER <span>2023</span></p>
                    <h5>NEW ARRIVALS</h5>
                </div>
            </div>
            <div class="same_div">
                <div class="top_bar_img">
                    <img src="{{ asset('app-assets/images/home/img_8.png') }}" alt="">
                </div>
                <div class="mid_letter_div">
                    <p>NEW COLLECTION</p>
                    <h5><span>TOP BRANDS</span></h5>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="total_div_two">
            <div class="total_prdct_part_two">
                <div class="prdct_div_two">
                    <div class="card">
                        <ul class="image-big-list">
                            <li class="image-big-list-item active">
                                <img src="{{ asset('app-assets/images/img_1.png') }}">
                            </li>
                            <li class="image-big-list-item">
                                <img src="{{ asset('app-assets/images/img_2.png') }}">
                            </li>
                            <li class="image-big-list-item">
                                <img src="{{ asset('app-assets/images/img_3.png') }}">
                            </li>
                        </ul>
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list">
                                <li class="image-small-list-item active">
                                    <svg xmlns="http://www.w3.org/2000/svg"width="15"height="15"
                                        fill="pink" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg>
                                </li>
                                <li class="image-small-list-item">
                                    <svg xmlns="http://www.w3.org/2000/svg"width="15"height="15"
                                        fill="cream" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg>
                                </li>
                                <li class="image-small-list-item">
                                    <svg xmlns="http://www.w3.org/2000/svg"width="15"height="15"
                                        fill="green" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg>
                                </li>
                            </ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card">
                        <img src="{{ asset('app-assets/images/img_2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list block"></ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card">
                        <ul class="image-big-list">
                            <li class="image-big-list-item2 active">
                                <img src="{{ asset('app-assets/images/img_1.png') }}">
                            </li>
                            <li class="image-big-list-item2">
                                <img src="{{ asset('app-assets/images/img_2.png') }}">
                            </li>
                        </ul>
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list">
                                <li class="image-small-list-item2 active">
                                    <svg xmlns="http://www.w3.org/2000/svg"width="15"height="15"
                                        fill="pink" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg>
                                </li>
                                <li class="image-small-list-item2">
                                    <svg xmlns="http://www.w3.org/2000/svg"width="15"height="15"
                                        fill="green" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg>
                                </li>
                            </ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card">
                        <img src="{{ asset('app-assets/images/img_1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list block"></ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card relative">
                        <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <img src="{{ asset('app-assets/images/star_img.png') }}" alt=""
                                class="img_star_img">
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list block"></ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                        <div class="time_sec">
                            <div class="time_part">
                                <span>0</span>
                                <p>Day</p>
                            </div>
                            <div class="time_part">
                                <span>0</span>
                                <p>Hrs</p>
                            </div>
                            <div class="time_part">
                                <span>0</span>
                                <p>Min</p>
                            </div>
                            <div class="time_part">
                                <span>0</span>
                                <p>Sec</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card">
                        <ul class="image-big-list">
                            <li class="image-big-list-item3 active">
                                <img src="{{ asset('app-assets/images/img_1.png') }}">
                            </li>
                            <li class="image-big-list-item3">
                                <img src="{{ asset('app-assets/images/img_2.png') }}">
                            </li>
                            <li class="image-big-list-item3">
                                <img src="{{ asset('app-assets/images/img_3.png') }}">
                            </li>
                        </ul>
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <img src="{{ asset('app-assets/images/star_img.png') }}" alt=""
                                class="img_star_img">
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list3">
                                <li class="image-small-list-item3 active">
                                    <svg xmlns="http://www.w3.org/2000/svg"width="15"height="15"
                                        fill="pink" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg>
                                </li>
                                <li class="image-small-list-item3">
                                    <svg xmlns="http://www.w3.org/2000/svg"width="15"height="15"
                                        fill="cream" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg>
                                </li>
                                <li class="image-small-list-item3">
                                    <svg xmlns="http://www.w3.org/2000/svg"width="15"height="15"
                                        fill="green" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg>
                                </li>
                            </ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card relative">
                        <img src="{{ asset('app-assets/images/img_3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <img src="{{ asset('app-assets/images/star_img.png') }}" alt=""
                                class="img_star_img">
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list block"></ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                        <div class="time_sec">
                            <div class="time_part">
                                <span>0</span>
                                <p>Day</p>
                            </div>
                            <div class="time_part">
                                <span>0</span>
                                <p>Hrs</p>
                            </div>
                            <div class="time_part">
                                <span>0</span>
                                <p>Min</p>
                            </div>
                            <div class="time_part">
                                <span>0</span>
                                <p>Sec</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prdct_div_two">
                    <div class="card">
                        <img src="{{ asset('app-assets/images/img_1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LAHENGA</h5>
                            <img src="{{ asset('app-assets/images/star_img.png') }}" alt=""
                                class="img_star_img">
                            <p class="card-text">LOREM ISPUM</p>
                            <p class="card-text">₹ 500</p>
                            <ul class="image-small-list block"></ul>
                            <a href="#" class="btn add_cart_btn">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="total_late_blog">
            <h3>LATEST FROM BLOG</h3>
            <p>THE FRESHEST AND MOST EXCITING NEWS</p>
            <div class="total_blog">
                @php
                    $i = 1;
                @endphp
                @foreach ($blogs as $key => $blogs)
                    <div class="same_div">
                        <div class="upper_img_div">
                            <img class="img-fluid" src="{{ asset('upload_images/blog_image/' . $blogs->image) }}"
                                alt="">
                        </div>
                        <div class="lower_text_div">
                            <span>
                                <p>{{ $blogs->blog_type }}</p>
                            </span>
                            <h4>{{ $blogs->blog_title }}</h4>
                            <P>{!! $blogs->blog_description !!}</P>
                            <h5>lorem ispum is simply <span><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                        width="20" fill="#000" viewBox="0 0 512 512">
                                        <path
                                            d="M256 32C114.6 32 .0272 125.1 .0272 240c0 47.63 19.91 91.25 52.91 126.2c-14.88 39.5-45.87 72.88-46.37 73.25c-6.625 7-8.375 17.25-4.625 26C5.818 474.2 14.38 480 24 480c61.5 0 109.1-25.75 139.1-46.25C191.1 442.8 223.3 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32zM256.1 400c-26.75 0-53.12-4.125-78.38-12.12l-22.75-7.125l-19.5 13.75c-14.25 10.12-33.88 21.38-57.5 29c7.375-12.12 14.37-25.75 19.88-40.25l10.62-28l-20.62-21.87C69.82 314.1 48.07 282.2 48.07 240c0-88.25 93.25-160 208-160s208 71.75 208 160S370.8 400 256.1 400z" />
                                    </svg></span>7</h5>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="same_div">
                    <div class="upper_img_div">
                        <img src="{{ asset('app-assets/images/home/image_1.png') }}" alt="">
                    </div>
                    <div class="lower_text_div">
                        <span>
                            <p>FASHION</p>
                        </span>
                        <h4>LOREM ISPUM IS SIMPLY DUMMY TEXT</h4>
                        <P>Lorem ispum is simply dummy text of of the printing and typesetting industry. Lorem has
                            been
                            the industry's</P>
                        <h5>lorem ispum is simply <span><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                    width="20" fill="#000" viewBox="0 0 512 512">
                                    <path
                                        d="M256 32C114.6 32 .0272 125.1 .0272 240c0 47.63 19.91 91.25 52.91 126.2c-14.88 39.5-45.87 72.88-46.37 73.25c-6.625 7-8.375 17.25-4.625 26C5.818 474.2 14.38 480 24 480c61.5 0 109.1-25.75 139.1-46.25C191.1 442.8 223.3 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32zM256.1 400c-26.75 0-53.12-4.125-78.38-12.12l-22.75-7.125l-19.5 13.75c-14.25 10.12-33.88 21.38-57.5 29c7.375-12.12 14.37-25.75 19.88-40.25l10.62-28l-20.62-21.87C69.82 314.1 48.07 282.2 48.07 240c0-88.25 93.25-160 208-160s208 71.75 208 160S370.8 400 256.1 400z" />
                                </svg></span>7</h5>
                    </div>
                </div>
                <div class="same_div">
                    <div class="upper_img_div">
                        <img src="{{ asset('app-assets/images/home/image_1.png') }}" alt="">
                    </div>
                    <div class="lower_text_div">
                        <span>
                            <p>FASHION</p>
                        </span>
                        <h4>LOREM ISPUM IS SIMPLY DUMMY TEXT</h4>
                        <P>Lorem ispum is simply dummy text of of the printing and typesetting industry. Lorem has
                            been
                            the industry's</P>
                        <h5>lorem ispum is simply <span><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                    width="20" fill="#000" viewBox="0 0 512 512">
                                    <path
                                        d="M256 32C114.6 32 .0272 125.1 .0272 240c0 47.63 19.91 91.25 52.91 126.2c-14.88 39.5-45.87 72.88-46.37 73.25c-6.625 7-8.375 17.25-4.625 26C5.818 474.2 14.38 480 24 480c61.5 0 109.1-25.75 139.1-46.25C191.1 442.8 223.3 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32zM256.1 400c-26.75 0-53.12-4.125-78.38-12.12l-22.75-7.125l-19.5 13.75c-14.25 10.12-33.88 21.38-57.5 29c7.375-12.12 14.37-25.75 19.88-40.25l10.62-28l-20.62-21.87C69.82 314.1 48.07 282.2 48.07 240c0-88.25 93.25-160 208-160s208 71.75 208 160S370.8 400 256.1 400z" />
                                </svg></span>7</h5>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <section>
        <div class="follow_all_div">
            <h3><span>@ FOLLOW</span> US ON</h3>
            <p>INSTAGRAM</p>
            <div class="total_follow_div">
                <div class="same_div">
                    <div class="left_div">
                        <img src="{{ asset('app-assets/images/home/free_shipping.png') }}" alt="">
                    </div>
                    <div class="right_div">
                        <h6>FREE SHIPPING</h6>
                        <p>Lorem Ispum is simply dummy text</p>
                    </div>
                </div>
                <div class="same_div">
                    <div class="left_div">
                        <img src="{{ asset('app-assets/images/home/support.png') }}" alt="">
                    </div>
                    <div class="right_div">
                        <h6>SUPPORT 24/7</h6>
                        <p>Lorem Ispum is simply dummy text</p>
                    </div>
                </div>
                <div class="same_div">
                    <div class="left_div">
                        <img src="{{ asset('app-assets/images/home/30_days_return.png') }}" alt="">
                    </div>
                    <div class="right_div">
                        <h6>30 DAYS RETURN</h6>
                        <p>Lorem Ispum is simply dummy text</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
