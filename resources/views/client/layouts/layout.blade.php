<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W32MMML');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Voyager::setting('site.title') }} - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="{{ Voyager::setting('site.description') }}">
    @stack('meta')
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/css/uikit.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/769286/jquery.waitforimages.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit-icons.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
    @yield('css_add')
    
    <!-- <link rel="stylesheet" href="dist/css/style-min.css" /> -->
    <link rel="stylesheet" href="{{ url('css/style.css') }} " />
    <link rel="stylesheet" href="{{ url('css/style360.css') }} " />
    <link rel="stylesheet" href="{{ url('css/style480.css') }} " />
    <link rel="stylesheet" href="{{ url('css/style720.css') }} " />
    <link rel="stylesheet" href="{{ url('css/style1024.css') }} " />
    <link rel="stylesheet" href="{{ url('css/style1980.css') }} " />
    <link rel="stylesheet" href="{{ url('css/style2560.css') }} " />
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W32MMML"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- header -->
    @include('client.components.header')
    <!-- end header -->

    @yield('content')
    
    
        <!-- This is the modal -->
    <div id="modal-newsletter" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title uk-text-center title-modal">Terima Kasih!</h2>
            <p class="uk-text-center">Dengan berlangganan newsletter kami, Anda telah bergabung dengan komunitas yang memiliki semangat besar untuk membantu orang lain memiliki kualitas hidup yang lebih layak.</p>
            <p class="uk-text-center">
                <button class="uk-button uk-button-default uk-modal-close closeBtn uk-text-capitalize" type="button">Tutup</button>
            </p>
        </div>
    </div>

    

    
    <!-- <script defer src="dist/js/script-min.js"></script> -->
    
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script defer src="{{ url('js/autocomplete.js') }}"></script>
    <script defer src="{{ url('js/script.js') }}"></script>
        @yield('pagespecificscripts')
        @stack('scripts')
</body>
</html>