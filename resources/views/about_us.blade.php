@section('title') {{ 'Rental Lahenga | About Us' }} @endsection     
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
        <div class="total_banner_div">
            <h3>WHY PEOPLE L <span><img src="{{ asset('app-assets/images/Rental_Ecommerce_About_Us_page_img/img_3.png') }}" alt=""></span> VE US</h3>
            <div class="slider_div">
                <div id="carouselExampleIndicatorsa" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicatorsa" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicatorsa" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicatorsa" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('app-assets/images/Rental_Ecommerce_About_Us_page_img/img_1.png') }}" class="d-block w-100"
                                alt="...">
                            <div class="slider_text_part">
                                <h3>LOREM ISPUM IS SIMPLY DUMMY TEXT</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever <br> since the
                                    1500s, when an unknown printer took a galley of type and scrambled <br>it to
                                    make a type specimen book. It has survived not only five centuries,<br> but also
                                    the leap into electronic typesetting,<br>
                                </p>
                                <div class="qoute_part">
                                    <img src="{{ asset('app-assets/images/Rental_Ecommerce_About_Us_page_img/img_2.png') }}" alt="">
                                    <p>Lorem Ipsum is simply dummy text of the printing<br> and typesetting
                                        industry.</p>
                                </div>
                                <div class="name">
                                    <p>-LOREM ISPUM</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('app-assets/images/Rental_Ecommerce_About_Us_page_img/img_1.png') }}" class="d-block w-100"
                                alt="...">
                            <div class="slider_text_part">
                                <h3>LOREM ISPUM IS SIMPLY DUMMY TEXT</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever <br> since the
                                    1500s, when an unknown printer took a galley of type and scrambled <br>it to
                                    make a type specimen book. It has survived not only five centuries,<br> but also
                                    the leap into electronic typesetting,<br>
                                </p>
                                <div class="qoute_part">
                                    <img src="{{ asset('app-assets/images/Rental_Ecommerce_About_Us_page_img/img_2.png') }}" alt="">
                                    <p>Lorem Ipsum is simply dummy text of the printing<br> and typesetting
                                        industry.</p>
                                </div>
                                <div class="name">
                                    <p>-LOREM ISPUM</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('app-assets/images/Rental_Ecommerce_About_Us_page_img/img_1.png') }}" class="d-block w-100"
                                alt="...">
                            <div class="slider_text_part">
                                <h3>LOREM ISPUM IS SIMPLY DUMMY TEXT</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting<br> industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever <br> since the
                                    1500s, when an unknown printer took a galley of type and scrambled <br>it to
                                    make a type specimen book. It has survived not only five centuries,<br> but also
                                    the leap into electronic typesetting,<br>
                                </p>
                                <div class="qoute_part">
                                    <img src="{{ asset('app-assets/images/Rental_Ecommerce_About_Us_page_img/img_2.png') }}" alt="">
                                    <p>Lorem Ipsum is simply dummy text of the printing<br> and typesetting
                                        industry.</p>
                                </div>
                                <div class="name">
                                    <p>-LOREM ISPUM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mx-auto">
            <div class="total_div_sec">
                <div class="stories_part">
                    <h3>OUR STORIES</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown printer took a galley of type and scrambled
                        it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting
                    </p>
                </div>    
                <div class="contacts_part">
                    <h3>CONTACTS</h3>
                    <ul>
                        <li><span>Address:</span>  Lorem Ispum</li>
                        <li><span>Phone:</span> +00 0000 0000</li>
                        <li><span>Hours:</span> 7 Days a week from 10am to 6pm</li>
                        <li><span>Email:</span> <span style="color: #e716a7;"> loremispum@gmail.com</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>   
</x-app-layout>