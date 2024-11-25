<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('meta')

        <title>DEX Pump - Bersama Membangun Indonesia</title>

        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/dex-logo.png') }}">
        
        <style>
        .swiper {
            width: 100%;
            height: 300px;
          }
      
          .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
          }
      
          .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
          }
        </style>
    </head>
    <body>
        <livewire:company-profile.navbar />
	<main style="margin-top: 60px;">
		@yield('content')
	</main>
	<livewire:company-profile.footer :company_profile="$company_profile" />
    </body>
    @livewireScripts
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            direction: "vertical",
            navigation: {
                nextEl: ".swiper-button-next-ya",
                prevEl: ".swiper-button-prev-ya",
            },
            loop: true
        });
    </script>
</html>
