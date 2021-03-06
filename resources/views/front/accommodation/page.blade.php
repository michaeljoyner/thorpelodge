@extends('front.base')

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/facebook_og.jpg'),
        'ogTitle' => 'Accommodation at Thorpe Lodge',
        'ogDescription' => 'Thorpe Lodge offers four beautiful en-suite rooms with excellent service.'
    ])
@endsection

@section('content')
    <section class="hero accommodation-hero"></section>
    <section class="page-section">
        <h1 class="section-title">Accommodation</h1>
        <p class="subsection-heading">Beautiful rooms with excellent service.</p>
        <p class="centered-text">Thorpe Lodge offers four well-appointed en-suite rooms. Indulge yourself with the deep cast-iron baths and crisp percale linen. Each room is equipped with a DSTV bouquet, tea and coffee making facilities, and free WIFI. Thorpe Lodge has become well-known for our gorgeous full English breakfasts.</p>
        <p class="centered-text">Our team ensures that your stay is perfect every time with personal attention and added extras.</p>
        <p class="centered-text">On those beautiful summer evenings, enjoy relaxing on our deep thatched verandah to unwind. Chilly winter evenings can be spent in the cozy rondavel lounge with a roaring fire and a hearty dinner. Thorpe Lodge is the perfect getaway for any occasion in any season.</p>
        <a href="/contact" class="action-button centered">Enquire Now</a>
    </section>
@endsection