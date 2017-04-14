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
            <a href="" class="action-button centered">Google Maps</a>
        </div>
    </section>
@endsection