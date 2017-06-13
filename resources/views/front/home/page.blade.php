@extends('front.base')

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/facebook_og.jpg'),
        'ogTitle' => 'Thorpe Lodge Wedding Venue',
        'ogDescription' => 'Thorpe Lodge is an elegant country lodge and wedding venue in the heart of the KZN Midlands sugar lands.'
    ])
@endsection

@section('content')
    <section class="hero home-hero"></section>
    <section class="page-section">
        <h1 class="section-title">Our Story</h1>
        <p class="subsection-heading">Charming Country Lodge and Wedding Venue</p>
        <p class="centered-text">Thorpe Lodge is an elegant country lodge and wedding venue located in Wartburg, the heart of the KZN Midland's sugar lands. Thorpe Lodge boasts a beautifully restored 19th century stone barn, a breathtaking thatched lapa, original red brick farmhouse, rondavel dining room and lounge, and four well-appointed suites.</p>
        <p class="centered-text">Established in 2001, Thorpe Lodge is proudly owned and managed by the Koch family. Experience, excellent service, professionalism, outstanding food and the utmost care is what you can expect from the Thorpe Lodge team.</p>
        <p class="centered-text">It’s the perfect place to start the rest of your lives together, or for a quiet getaway from the hustle and bustle to rejuvenate.</p>
        <a href="/contact" class="action-button centered">Get in Touch</a>
    </section>
    <section class="page-section wedding-venue-section no-bottom non-padded">
        <div class="section-inner">
            <div class="picture-call-out">
                <img src="/images/wedding_couple.jpg" alt="couple saying their vows">
                <p>Find out how Thorpe Lodge can make your dream wedding a reality.</p>
                <a href="/weddings" class="coloured action-button centered">Weddings</a>
            </div>
            <div class="picture-call-out">
                <img src="/images/catering.jpeg" alt="waiter serving tray of delicious food">
                <p>Let us take care of your big event, with the perfect venue, food and atmosphere.</p>
                <a href="/functions" class="coloured action-button centered">Functions & Catering</a>
            </div>
        </div>
    </section>
    <section class="page-section wedding-venue-section no-bottom non-padded">
        <div class="section-inner">
            <div class="picture-call-out">
                <img src="/images/accomodation.jpg" alt="rusty wheel">
                <p>Thorpe lodge provides beautiful rooms with great service.</p>
                <a href="/accommodation" class="coloured action-button centered">Accommodation</a>
            </div>
            <div class="picture-call-out">
                <img src="/images/location.jpg" alt="stone barn">
                <p>We are just 2km outside the quaint little town of Wartburg.</p>
                <a href="/contact#location" class="coloured action-button centered">Location</a>
            </div>
        </div>
    </section>

    <section class="page-section gallery-section">
        <a href="/gallery" class="action-button white">Gallery</a>
    </section>
@endsection