@extends('front.base')

@section('content')
    <section class="page-section">
        <h1 class="section-title">Gallery</h1>
        <p class="centered-text">Take a look at our pictures, they are visually enticing.</p>
        <div class="gallery">
            <light-box :open="false"
                       title="Weddings"
                       page-url="{{ url(request()->path()) }}"
                       base-url="{{ url('/') }}"
                       main-src="/galleries/wedding/gall_w0.jpg"
                       :gallery-images='[
                           {src: "/galleries/wedding/gall_w1.jpg"},
                           {src: "/galleries/wedding/gall_w2.jpg"},
                           {src: "/galleries/wedding/gall_w3.jpg"},
                           {src: "/galleries/wedding/gall_w4.jpg"},
                           {src: "/galleries/wedding/gall_w5.jpg"},
                           {src: "/galleries/wedding/gall_w6.jpg"},
                           {src: "/galleries/wedding/gall_w7.jpg"},
                           {src: "/galleries/wedding/gall_w8.jpg"},
                           {src: "/galleries/wedding/gall_w9.jpg"},
                           {src: "/galleries/wedding/gall_w10.jpg"},
                           {src: "/galleries/wedding/gall_w11.jpg"},
                           {src: "/galleries/wedding/gall_w12.jpg"},
                           {src: "/galleries/wedding/gall_w13.jpg"}
                       ]'
            ></light-box>
            {{--<light-box :open="false"--}}
                       {{--title="Functions"--}}
                       {{--main-src="/images/gallery/img5.jpg"--}}
                       {{--:gallery-images='[{src: "/images/gallery/img6.jpg"}, {src: "/images/gallery/img3.jpg"}, {src: "/images/gallery/img4.jpg"}]'--}}
            {{--></light-box>--}}
        </div>
    </section>
@endsection

@section('bodyscripts')
    <script>
    </script>
@endsection