<header class="main-header">
    <div class="header-logo">
        <h1 class="site-title">Thorpe Lodge</h1>
        <p class="site-title"><span class="established"><small>EST.</small> 2001</span></p>
    </div>
    <div class="header-nav">
        <label for="nav-trigger" class="open-trigger">@include('front.svgicons.menu')</label>
        <input type="checkbox" id="nav-trigger">
        <nav class="main-navbar">
        <span class="nav-item for-mobile logo-line-item">
            <img src="/images/logos/logo_white.png" alt="Thorpe Lodge logo" width="250px">
        </span>
            <span class="nav-item" onclick="">
                <a class="nav-link @if(request()->path() === '/') current @endif" href="/">Home</a>
            </span>
            <span class="nav-item" onclick="">
                <a class="nav-link @if(starts_with(request()->path(), 'weddings')) current @endif" href="/weddings">Weddings</a>
            </span>
            <span class="nav-item" onclick="">
                <a class="nav-link @if(starts_with(request()->path(), 'functions')) current @endif" href="/functions">Functions &amp; Catering</a>
            </span>
            <span class="nav-item" onclick="">
                <a class="nav-link @if(starts_with(request()->path(), 'accommodation')) current @endif" href="/accommodation">Accommodation</a>
            </span>
            <span class="nav-item" onclick="">
                <a class="nav-link @if(starts_with(request()->path(), 'gallery')) current @endif" href="/gallery">Gallery</a>
            </span>
            <span class="nav-item" onclick="">
                <a class="nav-link @if(starts_with(request()->path(), 'contact')) current @endif" href="/contact">Contact</a>
            </span>
            <span class="nav-item for-mobile close-trigger"><label for="nav-trigger">@include('front.svgicons.close')</label></span>
        </nav>
    </div>
</header>