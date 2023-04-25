@section('title') {{ 'Rental Lahenga | Contact Us' }} @endsection    
<x-app-layout>  
    <div class="container-fluid px-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
    <section class="map_section">
        <div class="col-12">
            <div class="mb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d117223.77996815204!2d85.3213263!3d23.3432048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11b5a9b0042eef56!2sourcita.com!5e0!3m2!1sen!2sin!4v1589706571407!5m2!1sen!2sin"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                    aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="col-12">
            <div class="full_con_div">
                <div class="same_div">
                    <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" fill="#bc055c" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                    <h6>LET'S HAVE A CHAT!</h6>
                    <p>+00 0000 0000</p>
                    <p>+00 0000 0000</p>
                </div>
                <div class="same_div">
                    <svg xmlns="http://www.w3.org/2000/svg"  height="35" width="35" fill="#bc055c"  viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                    <h6>VISIT OUR LOCATION</h6>
                    <p>Lorem Ispum</p>
                    <p>Kolkata</p>
                </div>
                <div class="same_div">
                    <svg xmlns="http://www.w3.org/2000/svg"  height="35" width="35" fill="#bc055c" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                    <h6>WORK TIME</h6>
                    <p>7 Days a week</p>
                    <p>from 10 AM to 6 PM</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card border-primary rounded-0" style="border-color: #252425 !important;">
                <div class="card-body p-3">
                    <div class="contact_forn_div">
                        <div class="same_div">
                            <div class="form-group">
                                <div class="input-group">
                                    <input value="" type="text" name="data[name]" class="form-control"
                                        id="inlineFormInputGroupUsername" placeholder="Your name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="email" value="" name="data[email]" class="form-control"
                                        id="inlineFormInputGroupUsername" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="number" min="1" pattern="[1-9]{1}[0-9]{9}" name="data[phone]"
                                        class="form-control" id="inlineFormInputGroupUsername" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                        <div class="same_div">
                            <div class="form-group">
                                <div class="input-group mb-2 mb-sm-0">
                                    <textarea name="mesg" type="text" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="text-center">
                        <input type="submit" name="submit" value="SEND MESSAGE"
                            class="btn btn-primary btn-block rounded-0 py-2"
                            style="background-color: #bc055c !important; margin-top: 40px!important; border-color: #bc055c !important; border-radius: 5px!important;">
                    </div>
                </div>
            </div>
        </div>
    </section>  
</x-app-layout>     