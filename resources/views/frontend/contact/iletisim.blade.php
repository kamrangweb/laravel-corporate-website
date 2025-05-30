@extends('frontend.main_master')     

@section('main')
    
<!-- breadcrumb-area -->
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">Contact us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__wrap__icon">
        <ul>
            <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
            <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
        </ul>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-map -->
<div id="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd"
        allowfullscreen loading="lazy"></iframe>
</div>
<!-- contact-map-end -->

<!-- contact-area -->
<div class="contact-area">
    <div class="container">
        <form method="post" action="{{ route('offer.form') }}" class="contact__form" id="myForm">
            @csrf

            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="adi" placeholder="Full Name*">
                    @error('adi')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <input type="email" name="email" placeholder="Email Address*">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="telefon" placeholder="Phone Number*">
                    @error('telefon')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="konu" placeholder="Subject">
                    @error('konu')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <textarea type="text" name="mesaj" id="message" placeholder="Your Message*"></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
</div>
<!-- contact-area-end -->

<!-- contact-info-area -->
<section class="contact-info-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img src="assets/img/icons/contact_icon01.png" alt="">
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Address</h4>
                        <span>Bowery St, New York, <br> NY 10013,USA</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img src="assets/img/icons/contact_icon02.png" alt="">
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Phone Number</h4>
                        <span>+1255 - 568 - 6523</span>
                        <span>+1255 - 568 - 6523</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img src="assets/img/icons/contact_icon03.png" alt="">
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Email Address</h4>
                        <span>email@example.com</span>
                        <span>info@yourdomain.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-area-end -->

<!-- contact-area -->
<section class="homeContact homeContact__style__two">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">
                        <span class="sub-title">07 - Say hello</span>
                        <h2 class="title">Any questions? Feel free <br> to contact</h2>
                    </div>
                    <div class="homeContact__content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form action="#">
                            <input type="text" placeholder="Enter name*">
                            <input type="email" placeholder="Enter mail*">
                            <input type="number" placeholder="Enter number*">
                            <textarea name="message" placeholder="Enter Message*"></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->
@endsection