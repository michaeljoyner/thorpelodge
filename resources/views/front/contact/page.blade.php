@extends('front.base')

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/facebook_og.jpg'),
        'ogTitle' => 'Contact Thorpe Lodge',
        'ogDescription' => 'This is how you can get in touch with us at Thorpe Lodge.'
    ])
@endsection

@section('content')
    <section class="page-section">
        <h1 class="section-title">Contact Us</h1>
        <p class="centered-text">We would love to discuss your wedding, function or catering needs with you. Please get in touch with us.</p>
        <div class="contact-form">
            @include('front.contact.form')
        </div>
        <p class="centered-text">Alternatively, feel free to get in touch via telephone or email:</p>
        <div class="contact-details">
            <p class="centered-text">Tel: 033 503 1501</p>
            <p class="centered-text">Cell: 072 418 2733</p>
            <p class="centered-text">Email: bookings@thorpelodge.co.za</p>
        </div>
    </section>
    <section class="page-section location-section" id="location">
        <h1 class="section-title">Location</h1>
        <p class="centered-text">Thorpe Lodge is a well established venue nestled in the heart of KZN's sugar lands. Thorpe Lodge is just 2km outside the quaint little town of Wartburg.</p>
        <a href="https://www.google.com.tw/maps/place/Thorpe+Lodge+Farm/@-29.4260636,30.6046499,17z/data=!4m12!1m6!3m5!1s0x1ef6c8b9b9c94ec7:0x387d2453a21042c3!2sThorpe+Lodge+Farm!8m2!3d-29.4260636!4d30.6068386!3m4!1s0x1ef6c8b9b9c94ec7:0x387d2453a21042c3!8m2!3d-29.4260636!4d30.6068386?hl=en" class="action-button centered google" target="_blank">Google Maps</a>
        <img src="/images/map.jpg" alt="Map to Thorpe Lodge" class="map-image">
        <div class="directions-outer">
            <div class="direction-column">
                <p><strong>From Durban</strong></p>
                <p>Take exit 81 from the N3 northbound to get onto the R33/M70. Use the right two lanes to turn right onto Dr Chota Motala Road. Proceed through four sets of traffic lights, at the fifth set of traffic lights (Northway Mall will be on your left), turn right onto Bhambatha Road/R33. Continue on the R33 for approximately 12km. Turn right onto the R614 to Wartburg and travel for approximately 19km and turn left into Thorpe Lodge.</p>
            </div>
            <div class="direction-column">
                <p><strong>From Johannesburg</strong></p>
                <p>Take exit 81 from the N3 southbound to get onto the R33/M70. Use the left 3 lanes to turn left onto Dr Chota Motala Road. Proceed through two sets of traffic lights, at the third set of traffic lights (Northway Mall will be on your left), turn right onto Bhambatha Road/R33. Continue on the R33 for approximately 12km. Turn right onto the R614 to Wartburg and travel for approximately 19km and turn left into Thorpe Lodge.</p>
            </div>
        </div>
    </section>
@endsection