@extends('front.base')

@section('content')
    <section class="page-section">
        <h1 class="section-title">Contact Us</h1>
        <p class="centered-text">Let us know what sort of event you are looking for, whether it be a big or small
            wedding, a corporate function; family reunion or what have you</p>
        <div class="contact-form">
            @include('front.contact.form')
        </div>
        <p class="centered-text">Alternatively, feel free to get in touch via telephone or email:</p>
        <div class="contact-details">
            <p class="centered-text">Tel: 033 359 5101</p>
            <p class="centered-text">Email: bookings@thorpelodge.co.za</p>
        </div>
        <div class="find-on-map">
            <p class="centered-text">Find Us:</p>
            <a href="https://www.google.com.tw/maps/place/Thorpe+Lodge+Farm/@-29.4260636,30.6046499,17z/data=!4m12!1m6!3m5!1s0x1ef6c8b9b9c94ec7:0x387d2453a21042c3!2sThorpe+Lodge+Farm!8m2!3d-29.4260636!4d30.6068386!3m4!1s0x1ef6c8b9b9c94ec7:0x387d2453a21042c3!8m2!3d-29.4260636!4d30.6068386?hl=en" class="action-button centered">Google Maps</a>
        </div>
    </section>
@endsection