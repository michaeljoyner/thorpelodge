<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Thorpe Lodge')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600|Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('head')
    <script>
        var Laravel = {
            csrfToken: '{{ csrf_token() }}'
        }
    </script>
</head>
<body class="@yield('bodyclass', 'scripted')">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="main-container" id="app">
    @include('front.partials.header')
    @yield('content')
    @include('front.partials.footer')
</div>
{{--<script src="{{ elixir('js/front.js') }}"></script>--}}
@yield('bodyscripts')
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UX-XXXXXXXX-XX','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>

</body>
</html>