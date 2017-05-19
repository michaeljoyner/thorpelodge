@extends('front.base')

@section('content')
    <section class="hero home-hero"></section>
    <section class="page-section">
        <h1 class="section-title">Our Story</h1>
        <p class="subsection-heading">Charming Country Lodge and Wedding Venue</p>
        <p class="centered-text">Thorpe Lodge is an elegant country lodge and wedding venue in the heart of the KZN Midlands sugar lands. Thorpe Lodge boosts a beautifully restored 19th century stone, a breathtaking thatched lapa, original red brick farmhouse, rondavel dining room and lounge, and four well-appointed suites.</p>
        <p class="centered-text">Established in 2001, Thorpe Lodge is proudly owned and managed by the Koch family. Experience, excellent service, professionalism, outstanding food and the utmost care is what you can expect from the Thorpe Lodge team.</p>
        <p class="centered-text">It’s the perfect place to start the rest of your lives together, or for a quiet getaway from the hustle and bustle to rejuvenate.</p>
        <a href="/contact" class="action-button centered">Get in Touch</a>
    </section>
    <section class="page-section wedding-venue-section no-bottom">
        <div class="section-inner">
            <div class="picture-call-out">
                <img src="/images/wedding_couple.jpg" alt="couple saying their vows">
                <p>Find out how Thorpe Lodge can make your dream wedding a reality.</p>
                <a href="/weddings" class="action-button centered">Weddings</a>
            </div>
            <div class="picture-call-out">
                <img src="/images/catering.jpeg" alt="waiter serving tray of delicious food">
                <p>Let us take care of your big event, with the perfect venue, food and atmosphere.</p>
                <a href="/functions" class="action-button centered">Functions & Catering</a>
            </div>
        </div>
    </section>
    <section class="page-section location-section">
        <h1 class="section-title">Location</h1>
        <p class="centered-text">Thorpe Lodge is a well established venue nestled in the heart of KZN's sugar lands. Thorpe Lodge is just 2km outside the quaint little town of Wartburg.</p>
        <a href="https://www.google.com.tw/maps/place/Thorpe+Lodge+Farm/@-29.4260636,30.6046499,17z/data=!4m12!1m6!3m5!1s0x1ef6c8b9b9c94ec7:0x387d2453a21042c3!2sThorpe+Lodge+Farm!8m2!3d-29.4260636!4d30.6068386!3m4!1s0x1ef6c8b9b9c94ec7:0x387d2453a21042c3!8m2!3d-29.4260636!4d30.6068386?hl=en" class="action-button centered">Google Maps</a>
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
    <section class="page-section gallery-section">
        <a href="/gallery" class="action-button white">View Gallery</a>
    </section>
@endsection