@extends('front.base')

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/facebook_og.jpg'),
        'ogTitle' => 'Weddings at Thorpe Lodge',
        'ogDescription' => 'Thorpe Lodge provides the perfect setting for your dream wedding..'
    ])
@endsection

@section('content')
    <section class="hero weddings-hero"></section>
    <section class="page-section">
        <h1 class="section-title">Weddings</h1>
        <p class="subsection-heading">The perfect place to start your <em>happily ever after</em>.</p>
        <p class="centered-text">Overlooking the rolling KZN sugar lands, along with its beautiful gardens, historical buildings, and all its nooks and crannies, Thorpe Lodge provides the perfect setting for your dream wedding.</p>
        <p class="centered-text">Catering for up to 150 guests, our experience, professionalism and attention to detail will ensure that you have the perfect wedding. We take the utmost care in maintaining excellent service from the moment you reserve your wedding date to the end of your special day. Our experienced team will guide you every step of the way in preparing and planning for your very special wedding day.</p>
        <p class="centered-text">A beautiful thatched lapa compliments the Thorpe Lodge venue and is fitted with a bar and large fireplace. Our lapa is perfect for your wedding ceremony or reception drinks and canapés.</p>
        <a href="/contact" class="action-button centered">Enquire Now</a>
    </section>
@endsection