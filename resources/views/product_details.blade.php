@section('title')
    {{ 'Rental Lahenga | Product Details' }}
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
    <main>
        <!----product details part start here------>
        <div class="card-wrapper">
            <div class="main_card">
                <!-- card left -->
                <div class="product-imgs">

                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="{{ asset('app-assets/images/img_1.png') }}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="{{ asset('app-assets/images/img_2.png') }}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="{{ asset('app-assets/images/img_3.png') }}" alt="shoe image">

                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="{{ asset('app-assets/images/img_1.png') }}" alt="shoe image">
                            </a>
                        </div>

                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="{{ asset('app-assets/images/img_1.png') }}" alt="shoe image">
                            </a>
                        </div>
                    </div>

                    <div class="img-display">
                        <div class="img-showcase">
                            <img src="{{ asset('app-assets/images/img_1.png') }}" alt="shoe image">
                            <img src="{{ asset('app-assets/images/img_2.png') }}" alt="shoe image">
                            <img src="{{ asset('app-assets/images/img_3.png') }}" alt="shoe image">
                            <img src="{{ asset('app-assets/images/img_1.png') }}" alt="shoe image">

                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="product-content">
                    <h3>{{ $product->categoryName }}</h3>
                    <h2 class="product-title">{{ $product->product_name }}</h2>
                    <h5>₹ {{ $product->product_price }}</h5>
                    {{-- <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(Customers review)</span>
                    </div> --}}

                    {{-- <div class="product-price">
                        <p class="last-price">Old Price: <span>$257.00</span></p>
                        <p class="new-price">New Price: <span>$249.00 (5%)</span></p>
                    </div> --}}

                    {{-- <div class="product-detail">
                        <p></p>
                    </div> --}}
                    {{-- <div class="time_sec_div">
                        <div class="time_part_div">
                            <span>0</span>
                            <p>Day</p>
                        </div>
                        <div class="time_part_div">
                            <span>0</span>
                            <p>Hrs</p>
                        </div>
                        <div class="time_part_div">
                            <span>0</span>
                            <p>Min</p>
                        </div>
                        <div class="time_part_div">
                            <span>0</span>
                            <p>Sec</p>
                        </div>
                    </div> --}}

                    <!-- tab_pan_sec_middle start here -->
                    <section class="tab_panel_sec">
                        <div class="card p-3 shadow">
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">3 Day Rental</button>
                                    <button class="nav-link" id="nav-five-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-five" type="button" role="tab"
                                        aria-controls="nav-five" aria-selected="false">5 Day Rental</button>
                                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">7 Day Rental</button>
                                </div>
                            </nav>
                            <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="size_tag">
                                        <p>Size:</p>
                                        <fieldset class="variant-input-wrap" name="Size" data-index="option2"
                                            id="ProductSelect-6670879621305-option-1">
                                            @if ($product->size_s == 1)
                                                <div class="variant-input" data-index="option2" data-value="S">
                                                    <input type="radio" checked="checked" value="S"
                                                        data-index="option2" name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-S"><label
                                                        for="ProductSelect-6670879621305-option-size-S"
                                                        class="variant__button-label">S</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xs == 1)
                                                <div class="variant-input" data-index="option2" data-value="XS">
                                                    <input type="radio" value="XS" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XS"><label
                                                        for="ProductSelect-6670879621305-option-size-XS"
                                                        class="variant__button-label">XS</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xxs == 1)
                                                <div class="variant-input" data-index="option2" data-value="XXS">
                                                    <input type="radio" value="XXS" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XXS"><label
                                                        for="ProductSelect-6670879621305-option-size-XXS"
                                                        class="variant__button-label">XXS</label>
                                                </div>
                                            @endif
                                            @if ($product->size_m == 1)
                                                <div class="variant-input" data-index="option2" data-value="M">
                                                    <input type="radio" value="M" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-M"><label
                                                        for="ProductSelect-6670879621305-option-size-M"
                                                        class="variant__button-label">M</label>
                                                </div>
                                            @endif
                                            @if ($product->size_l == 1)
                                                <div class="variant-input" data-index="option2" data-value="L">
                                                    <input type="radio" value="L" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-L"><label
                                                        for="ProductSelect-6670879621305-option-size-L"
                                                        class="variant__button-label">L</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xl == 1)
                                                <div class="variant-input" data-index="option2" data-value="XL">
                                                    <input type="radio" value="XL" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XL"><label
                                                        for="ProductSelect-6670879621305-option-size-XL"
                                                        class="variant__button-label">XL</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xxl == 1)
                                                <div class="variant-input" data-index="option2" data-value="XXL">
                                                    <input type="radio" value="XXL" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XXL"><label
                                                        for="ProductSelect-6670879621305-option-size-XXL"
                                                        class="variant__button-label">XXL</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xxxl == 1)
                                                <div class="variant-input" data-index="option2" data-value="XXXL">
                                                    <input type="radio" value="XXXL" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XXXL"><label
                                                        for="ProductSelect-6670879621305-option-size-XXXL"
                                                        class="variant__button-label">XXXL</label>
                                                </div>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="date_picker">
                                        <form action="">
                                            <div class="date_select">
                                                <div class="select_date">
                                                    <label for="">SELECT DATE</label>
                                                    <input type="date" id="Date11">
                                                </div>
                                                <div class="select_date">
                                                    <label for="">SELECT END DATE</label>
                                                    <input type="date" id="Date22">
                                                </div>
                                            </div>
                                            <button>BOOK NOW</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-five" role="tabpanel2"
                                    aria-labelledby="nav-five-tab">
                                    <div class="size_tag">
                                        <p>Size:</p>
                                        <fieldset class="variant-input-wrap" name="Size" data-index="option2"
                                            id="ProductSelect-6670879621305-option-1">
                                            @if ($product->size_s == 1)
                                                <div class="variant-input" data-index="option2" data-value="S">
                                                    <input type="radio" checked="checked" value="S"
                                                        data-index="option2" name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-S1"><label
                                                        for="ProductSelect-6670879621305-option-size-S1"
                                                        class="variant__button-label">S</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xs == 1)
                                                <div class="variant-input" data-index="option2" data-value="XS">
                                                    <input type="radio" value="XS" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XS1"><label
                                                        for="ProductSelect-6670879621305-option-size-XS1"
                                                        class="variant__button-label">XS</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xxs == 1)
                                                <div class="variant-input" data-index="option2" data-value="XXS">
                                                    <input type="radio" value="XXS" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XXS1"><label
                                                        for="ProductSelect-6670879621305-option-size-XXS1"
                                                        class="variant__button-label">XXS</label>
                                                </div>
                                            @endif
                                            @if ($product->size_m == 1)
                                                <div class="variant-input" data-index="option2" data-value="M">
                                                    <input type="radio" value="M" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-M1"><label
                                                        for="ProductSelect-6670879621305-option-size-M1"
                                                        class="variant__button-label">M</label>
                                                </div>
                                            @endif
                                            @if ($product->size_l == 1)
                                                <div class="variant-input" data-index="option2" data-value="L">
                                                    <input type="radio" value="L" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-L1"><label
                                                        for="ProductSelect-6670879621305-option-size-L1"
                                                        class="variant__button-label">L</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xl == 1)
                                                <div class="variant-input" data-index="option2" data-value="XL">
                                                    <input type="radio" value="XL" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XL1"><label
                                                        for="ProductSelect-6670879621305-option-size-XL1"
                                                        class="variant__button-label">XL</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xxl == 1)
                                                <div class="variant-input" data-index="option2" data-value="XXL">
                                                    <input type="radio" value="XXL" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XXL1"><label
                                                        for="ProductSelect-6670879621305-option-size-XXL1"
                                                        class="variant__button-label">XXL</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xxxl == 1)
                                                <div class="variant-input" data-index="option2" data-value="XXXL">
                                                    <input type="radio" value="XXXL" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XXXL1"><label
                                                        for="ProductSelect-6670879621305-option-size-XXXL1"
                                                        class="variant__button-label">XXXL</label>
                                                </div>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="date_picker">
                                        <form action="">
                                            <div class="date_select">
                                                <div class="select_date">
                                                    <label for="">SELECT DATE</label>
                                                    <input type="date" id="Date3">
                                                </div>
                                                <div class="select_date">
                                                    <label for="">SELECT END DATE</label>
                                                    <input type="date" id="Date4">
                                                </div>
                                            </div>
                                            <button>BOOK NOW</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade active show" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <div class="size_tag">
                                        <p>Size:</p>
                                        <fieldset class="variant-input-wrap" name="Size" data-index="option2"
                                            id="ProductSelect-6670879621305-option-1">
                                            @if ($product->size_s == 1)
                                                <div class="variant-input" data-index="option2" data-value="S">
                                                    <input type="radio" checked="checked" value="S"
                                                        data-index="option2" name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-S2"><label
                                                        for="ProductSelect-6670879621305-option-size-S2"
                                                        class="variant__button-label">S</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xs == 1)
                                                <div class="variant-input" data-index="option2" data-value="XS">
                                                    <input type="radio" value="XS" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XS2"><label
                                                        for="ProductSelect-6670879621305-option-size-XS2"
                                                        class="variant__button-label">XS</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xxs == 1)
                                                <div class="variant-input" data-index="option2" data-value="XXS">
                                                    <input type="radio" value="XXS" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XXS2"><label
                                                        for="ProductSelect-6670879621305-option-size-XXS2"
                                                        class="variant__button-label">XXS</label>
                                                </div>
                                            @endif
                                            @if ($product->size_m == 1)
                                                <div class="variant-input" data-index="option2" data-value="M">
                                                    <input type="radio" value="M" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-M2"><label
                                                        for="ProductSelect-6670879621305-option-size-M2"
                                                        class="variant__button-label">M</label>
                                                </div>
                                            @endif
                                            @if ($product->size_l == 1)
                                                <div class="variant-input" data-index="option2" data-value="L">
                                                    <input type="radio" value="L" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-L2"><label
                                                        for="ProductSelect-6670879621305-option-size-L2"
                                                        class="variant__button-label">L</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xl == 1)
                                                <div class="variant-input" data-index="option2" data-value="XL">
                                                    <input type="radio" value="XL" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XL2"><label
                                                        for="ProductSelect-6670879621305-option-size-XL2"
                                                        class="variant__button-label">XL</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xxl == 1)
                                                <div class="variant-input" data-index="option2" data-value="XXL">
                                                    <input type="radio" value="XXL" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XXL2"><label
                                                        for="ProductSelect-6670879621305-option-size-XXL2"
                                                        class="variant__button-label">XXL</label>
                                                </div>
                                            @endif
                                            @if ($product->size_xxxl == 1)
                                                <div class="variant-input" data-index="option2" data-value="XXXL">
                                                    <input type="radio" value="XXXL" data-index="option2"
                                                        name="Size"
                                                        class="wk_variant_chooser variant__input-6670879621305"
                                                        id="ProductSelect-6670879621305-option-size-XXXL2"><label
                                                        for="ProductSelect-6670879621305-option-size-XXXL2"
                                                        class="variant__button-label">XXXL</label>
                                                </div>
                                            @endif
                                        </fieldset>
                                    </div>
                                    <div class="date_picker">
                                        <form action="">
                                            <div class="date_select">
                                                <div class="select_date">
                                                    <label for="">SELECT DATE</label>
                                                    <input type="date" id="Date1">
                                                </div>
                                                <div class="select_date">
                                                    <label for="">SELECT END DATE</label>
                                                    <input type="date" id="Date2">
                                                </div>
                                            </div>
                                            <button>BOOK NOW</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- tab_pan_sec_middle end here -->

                    <div class="ex2">
                        <label for="item-2">SIZE CHART</label>
                        <input type="checkbox" name="rwo" id="item-2">
                        <div class="inner">
                            <div class="hide2">
                                <img src="{{ asset('app-assets/images/size_chart.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="add_cart_line">

                        <div class="product-count">
                            <button class="button-count no-active" disabled>-</button>
                            <input type="text" readonly class="number-product" value="1">
                            <button class="button-count">+</button>
                        </div>


                        <a href="#" class="btn add_cart_btn2">
                            <img src="{{ asset('app-assets/images/add_to_cart.png') }}" alt="">
                            <span>ADD TO CART</span>
                        </a>
                    </div>

                    <div class="add_to_div">
                        <div class="wish_list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#df1d79"
                                viewBox="0 0 512 512">
                                <path
                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z" />
                            </svg>

                            <span>ADD TO WISHLIST</span>
                        </div>
                        <div class="compare">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="#df1d79"
                                viewBox="0 0 640 512">
                                <path
                                    d="M384 32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H398.4c-5.2 25.8-22.9 47.1-46.4 57.3V448H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 128c-17.7 0-32-14.3-32-32s14.3-32 32-32H288V153.3c-23.5-10.3-41.2-31.6-46.4-57.3H128c-17.7 0-32-14.3-32-32s14.3-32 32-32H256c14.6-19.4 37.8-32 64-32s49.4 12.6 64 32zm55.6 288H584.4L512 195.8 439.6 320zM512 416c-62.9 0-115.2-34-126-78.9c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1C627.2 382 574.9 416 512 416zM126.8 195.8L54.4 320H199.3L126.8 195.8zM.9 337.1c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1C242 382 189.7 416 126.8 416S11.7 382 .9 337.1z" />
                            </svg>

                            <span>ADD TO COMPARE</span>
                        </div>
                    </div>

                    <div class="pin_check">
                        <h3>DELIVERY OPTIONS:</h3>
                        <div class="check_box">
                            <div class="input-group_check flex-nowrap">
                                <input type="text" class="form-control_check" placeholder="Enter pincode"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <h5>Check</h5>
                        </div>
                    </div>

                    <div class="highlights_text">
                        <h3>PRODUCT HIGHLIGHTS</h3>
                        <ul>
                            <li>
                                <span> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                        fill="#6a6868" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg></span>
                                a beige golden lahenga choli made of jacquard silk is displayed here with a beautifully
                                embodaried dupatta
                            </li>
                            <li>
                                <span> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                        fill="#6a6868" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg></span>
                                The silk weave designs are heavily embodaried on the flared lahenga choli
                            </li>
                            <li>
                                <span> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                        fill="#6a6868" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z" />
                                    </svg></span>
                                a beige golden lahenga choli made of jacquard silk is displayed here with a beautifully
                                embodaried dupatta
                            </li>
                        </ul>
                    </div>


                    <div class="additional_text">
                        <h3>ADDITONAL INFORMATON</h3>
                        <div class="total_ul_div">
                            <ul class="bold_class">
                                <li>
                                    <p>code:</p>
                                </li>

                                <li>
                                    <p>Marketed by:</p>
                                </li>

                                <li>
                                    <p>Color:</p>
                                </li>

                                <li>
                                    <p>Fabric:</p>
                                </li>

                                <li>
                                    <p>Shape:</p>
                                </li>

                                <li>
                                    <p>Neckline Type:</p>
                                </li>

                                <li>
                                    <p>Sleeve Type:</p>
                                </li>

                                <li>
                                    <p>Lining Fabric:</p>
                                </li>

                                <li>
                                    <p>Can Can:</p>
                                </li>
                            </ul>

                            <ul>
                                <li>
                                    <p>UG1229</p>
                                </li>

                                <li>
                                    Kreeve style
                                </li>

                                <li>
                                    Beige Style
                                </li>
                                <li>
                                    Silk
                                </li>
                                <li>
                                    Flared Lahenga
                                </li>
                                <li>
                                    Boat Neck
                                </li>

                                <li>
                                    Half Sleeve
                                </li>

                                <li>
                                    Shantton
                                </li>

                                <li>
                                    No
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- <div class = "purchase-info">
                  <input type = "number" min = "0" value = "1">
                  <button type = "button" class = "btn">
                    Add to Cart <i class = "fas fa-shopping-cart"></i>
                  </button>
                  <button type = "button" class = "btn">Compare</button>
                </div> -->
                </div>
            </div>
        </div>
        <!----product details part end here------>


        <!---------related products slider part start------------->
        <div class="related_prdct_sec">
            <h3>RELATED PRODUCTS</h3>

            <!-----slider start here---------->
            <div id="myCarousel" class="carousel slide container-fluid" data-bs-ride="carousel">
                <div class="carousel-inner w-100">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card card-body card-body-2">
                                {{-- <div class="col-md-3"> --}}
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($related_products as $key => $related_products)
                                    <a href="{{ url('product') }}/{{ $related_products->product_slug }}">
                                        <img class="img-fluid"
                                            src="{{ asset('upload_images/product_thumbnail/' . $related_products->product_thumbnail) }}">
                                        <p>{{ $related_products->product_name }}</p>
                                        <p>₹{{ $related_products->product_price }}</p>
                                    </a>
                                @endforeach
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body card-body-2">
                                <img class="img-fluid" src="{{ asset('app-assets/images/img_1.png') }}">
                                <p>Elegant white seques Embodaireed<br> Gorgettee Lahnega Choli</p>
                                <p>₹ 4,334</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body card-body-2">
                                <img class="img-fluid" src="{{ asset('app-assets/images/img_1.png') }}">
                                <p>Elegant white seques Embodaireed<br> Gorgettee Lahnega Choli</p>
                                <p>₹ 4,334</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body card-body-2">
                                <img class="img-fluid" src="{{ asset('app-assets/images/img_1.png') }}">
                                <p>Elegant white seques Embodaireed<br> Gorgettee Lahnega Choli</p>
                                <p>₹ 4,334</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body card-body-2">
                                <img class="img-fluid" src="{{ asset('app-assets/images/img_1.png') }}">
                                <p>Elegant white seques Embodaireed<br> Gorgettee Lahnega Choli</p>
                                <p>₹ 4,334</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body card-body-2">
                                <img class="img-fluid" src="{{ asset('app-assets/images/img_1.png') }}">
                                <p>Elegant white seques Embodaireed<br> Gorgettee Lahnega Choli</p>
                                <p>₹ 4,334</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body card-body-2">
                                <img class="img-fluid" src="{{ asset('app-assets/images/img_1.png') }}">
                                <p>Elegant white seques Embodaireed<br> Gorgettee Lahnega Choli</p>
                                <p>₹ 4,334</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body card-body-2">
                                <img class="img-fluid" src="{{ asset('app-assets/images/img_1.png') }}">
                                <p>Elegant white seques Embodaireed<br> Gorgettee Lahnega Choli</p>
                                <p>₹ 4,334</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                    data-bs-slide="prev">
                    <span aria-hidden="true" class="prev_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff"
                            viewBox="0 0 384 512">
                            <path
                                d="M380.6 81.7c7.9 15.8 1.5 35-14.3 42.9L103.6 256 366.3 387.4c15.8 7.9 22.2 27.1 14.3 42.9s-27.1 22.2-42.9 14.3l-320-160C6.8 279.2 0 268.1 0 256s6.8-23.2 17.7-28.6l320-160c15.8-7.9 35-1.5 42.9 14.3z" />
                        </svg>
                    </span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                    data-bs-slide="next">
                    <span aria-hidden="true" class="next_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff"
                            viewBox="0 0 384 512">
                            <path
                                d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z" />
                        </svg>
                    </span>

                </button>
            </div>
            <!-----slider end here---------->

        </div>
        <!---------related products slider part end------------->


        <!-- in_touch start here -->
        {{-- <section>
            <div class="total_in_touch">
                <div class="same_div">
                    <p>BE IN TOUCH WITH US :</p>
                </div>
                <div class="group_div">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter your e-mail"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-info" type="button" id="button-addon2"
                                style="padding: 10px 20px; background-color: #000; color: #fff;">JOIN US</button>
                        </div>
                    </div>
                </div>
                <div class="svg_icon">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#fff"
                            viewBox="0 0 320 512">
                            <path
                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                        </svg>
                    </a>

                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#fff"
                            viewBox="0 0 512 512">
                            <path
                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                        </svg>
                    </a>

                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#fff"
                            viewBox="0 0 488 512">
                            <path
                                d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                        </svg>
                    </a>

                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#fff"
                            viewBox="0 0 448 512">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>

                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#fff"
                            viewBox="0 0 496 512">
                            <path
                                d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z" />
                        </svg>
                    </a>
                </div>
            </div>
        </section> --}}
        <!-- in_touch end here -->
    </main>
</x-app-layout>
