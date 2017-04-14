@extends('front.base')

@section('content')
    <section class="page-section">
        <h1 class="section-title">Gallery</h1>
        <p class="centered-text">Take a look at our pictures, they are visually enticing.</p>
        <div class="gallery">
            <light-box :open="false"
                       title="Weddings"
                       main-src="/images/gallery/img1.jpg"
                       :gallery-images='[{src: "/images/gallery/img2.jpg"}, {src: "/images/gallery/img3.jpg"}, {src: "/images/gallery/img4.jpg"}]'
            ></light-box>
            <light-box :open="false"
                       title="Functions"
                       main-src="/images/gallery/img5.jpg"
                       :gallery-images='[{src: "/images/gallery/img6.jpg"}, {src: "/images/gallery/img3.jpg"}, {src: "/images/gallery/img4.jpg"}]'
            ></light-box>
        </div>
    </section>
@endsection

@section('bodyscripts')
    <script>
    </script>
@endsection