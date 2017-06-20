@extends('front.base')

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/facebook_og.jpg'),
        'ogTitle' => 'Gallery | Thorpe Lodge',
        'ogDescription' => 'A collection of images from some of our previous weddings and functions..'
    ])
@endsection

@section('content')
    <section class="page-section gallery-page-section">
        <h1 class="section-title">Gallery</h1>
        <p class="centered-text">A collection of images from some of our previous weddings and functions.</p>
        <div class="gallery">
            <light-box :open="false"
                       title="Weddings & Functions"
                       page-url="{{ url(request()->path()) }}"
                       base-url="{{ url('/') }}"
                       main-src="/galleries/wedding/gall_w0.jpg"
                       :gallery-images='[
                           {{--{src: "/galleries/wedding/gall_w1.jpg"},--}}
                           {src: "/galleries/wedding/gall_w2.jpg"},
                           {src: "/galleries/wedding/gall_w3.jpg"},
                           {src: "/galleries/wedding/gall_w4.jpg"},
                           {{--{src: "/galleries/wedding/gall_w5.jpg"},--}}
                           {src: "/galleries/wedding/gall_w6.jpg"},
                           {{--{src: "/galleries/wedding/gall_w7.jpg"},--}}
                           {src: "/galleries/wedding/gall_w8.jpg"},
                           {src: "/galleries/wedding/gall_w10.jpg"},
                           {src: "/galleries/wedding/gall_w11.jpg"},
                           {{--{src: "/galleries/wedding/gall_w12.jpg"},--}}
                           {src: "/galleries/wedding/gall_w13.jpg"},
                           {{--{src: "/galleries/wedding/gall_w14.jpg"},--}}
                           {src: "/galleries/wedding/gall_w15.jpg"},
                           {src: "/galleries/wedding/gall_w16.jpg"},
                           {src: "/galleries/wedding/gall_w17.jpg"},
                           {src: "/galleries/wedding/gall_w18.jpg"},
                           {{--{src: "/galleries/wedding/gall_w19.jpg"},--}}
                           {src: "/galleries/wedding/gall_w20.jpg"},
                           {src: "/galleries/wedding/gall_w21.jpg"},
                           {src: "/galleries/wedding/gall_w22.jpg"},
                           {{--{src: "/galleries/wedding/gall_w23.jpg"},--}}
                           {{--{src: "/galleries/wedding/gall_w24.jpg"},--}}
                           {{--{src: "/galleries/wedding/gall_w25.jpg"},--}}
                           {src: "/galleries/wedding/gall_w26.jpg"},
                           {src: "/galleries/wedding/gall_w27.jpg"},
                           {src: "/galleries/wedding/gall_w28.jpg"},
                           {src: "/galleries/wedding/gall_w29.jpg"},
                           {src: "/galleries/wedding/gall_w30.jpg"},
                           {{--{src: "/galleries/wedding/gall_w31.jpg"},--}}
                           {src: "/galleries/wedding/gall_w32.jpg"},
                           {src: "/galleries/wedding/gall_w33.jpg"},
                           {{--{src: "/galleries/wedding/gall_w34.jpg"},--}}
                           {src: "/galleries/wedding/gall_w35.jpg"},
                           {{--{src: "/galleries/wedding/gall_w36.jpg"},--}}
                           {{--{src: "/galleries/wedding/gall_w37.jpg"},--}}
                           {{--{src: "/galleries/wedding/gall_w38.jpg"},--}}
                           {src: "/galleries/wedding/gall_w39.jpg"},
                           {src: "/galleries/wedding/gall_w40.jpg"}
                       ]'
            ></light-box>
            {{--<light-box :open="false"--}}
                       {{--title="Functions"--}}
                       {{--page-url="{{ url(request()->path()) }}"--}}
                       {{--base-url="{{ url('/') }}"--}}
                       {{--main-src="/galleries/functions/gall_f4.jpg"--}}
                       {{--:gallery-images='[--}}
                           {{--{src: "/galleries/functions/gall_f1.jpg"},--}}
                           {{--{src: "/galleries/functions/gall_f2.jpg"},--}}
                           {{--{src: "/galleries/functions/gall_f3.jpg"},--}}
                           {{--{src: "/galleries/functions/gall_f5.jpg"},--}}
                           {{--{src: "/galleries/functions/gall_f6.jpg"},--}}
                           {{--{src: "/galleries/functions/gall_f7.jpg"},--}}
                           {{--{src: "/galleries/functions/gall_f8.jpg"},--}}
                           {{--{src: "/galleries/functions/gall_f9.jpg"},--}}
                           {{--{src: "/galleries/functions/gall_f10.jpg"}--}}
                       {{--]'--}}
            {{--></light-box>--}}
        </div>
    </section>
@endsection