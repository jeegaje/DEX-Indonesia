<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>DEX Pump - Bersama Membangun Indonesia</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
	    <link rel="icon" type="image/x-icon" href="{{ asset('images/dex-logo.png') }}">

        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles

        @php
        use Carbon\Carbon;
        @endphp

    </head>
    <body>
        <div style="background-color: rgb(207, 207, 207);">
            <div class="bg-[#F4F7FA]" style="max-width: 980px; margin: auto; height: 100vh">
                {{-- <livewire:navbar :pumps="$pumps" :data_technician="$data_technician" />
                <livewire:sidebar :maintenance_type="$maintenance_type" /> --}}

                <nav style="background-image: url('{{ asset('images/navbar-webapps.png') }}'); background-size: cover; background-position: center;">
                    <div class="max-w-screen-xl flex flex-col flex-wrap gap-10 justify-between mx-auto p-7 text-white">
                        <div class="text-left">
                            <h1 class="text-2xl font-bold mb-2">Terima Kasih!</h1>
                            <h2 class="text-xl">Forulir anda telah terkirim</h2>
                        </div>
                        <div>
                            @if(count($pumps) > 0)
                                <a href="{{ url('') . '/maintenance/create?token=' . $pumps[0]->token . '&pump=' . Hash::make( $pumps[0]->pump_id) }}" class="text-decoration-none underline">Kirim Formulir Lain</a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        @livewireScripts
        <script>
        </script>
    </body>
</html>