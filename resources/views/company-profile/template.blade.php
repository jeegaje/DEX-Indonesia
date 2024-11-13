<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Dex Pump - Bersama Membangun Indonesia</title>

        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
        @yield('content')
        <livewire:company-profile.footer :company_profile="$company_profile" />
    </body>
    @livewireScripts
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