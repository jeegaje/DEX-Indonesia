@extends('company-profile.template')

@section('content')
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
                <div class="text-center">
                    <h1 class="text-2xl font-bold mb-5 text-[#0756FF]">Peta Sebaran Project</h1>
                    <p class="text-md">Berikut Merupakan Wilayah Yang Sudah Mempercayakan Solusi Permasalahan Banjir Ke Pompa DEX</p>
                </div>
                <div class="flex md:flex-row flex-col gap-5 justify-center items-center my-10">
                    <div class="flex gap-1 items-end flex-1">
                        <div class="flex">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide"><img src="{{ asset('images/project/map-1.png') }}" alt=""></div>
                                  <div class="swiper-slide"><img src="{{ asset('images/project/map-2.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-5">
                            <div class="swiper-button-next-ya">
                                <img src="{{ asset('images/project/next-button.png') }}" alt="">
                            </div>
                            <div class="swiper-button-prev-ya"> 
                                <img src="{{ asset('images/project/next-button.png') }}" alt="" style="transform: rotate(180deg);">
                            </div>
                        </div>
                    </div>
                    <div class="p-5 flex-1">
                        <p class="mt-20">Kota anda belum ada? Tidak perlu khawatir,
                            Kami siap menjangkau kota anda, hubungi kami
                            di Menu Kontak</p>
                        <a href="/contact" class="text-[#0756FF] underline font-bold">Kontak Kami di Sini</a>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
                <div class="text-center mb-10">
                    <h1 class="text-2xl font-bold">DEX Pump Galery</h1>
                    <p class="text-xl ">Kumpulan dokumentasi visual dari berbagai proyek pemasangan, distribusi, dan pemeliharaan pompa kami.</p>
                </div>
                <div class="grid grid-cols-4 gap-4 items-stretch">
                    @forEach($galery_dex as $galery)
                        @if ($galery->media_type == 'image')
                        <div data-modal-target="{{$galery->path}}" data-modal-toggle="{{$galery->path}}" class="bg-cover cursor-pointer rounded-md border-2 drop-shadow-lg" style="background-image: url('{{ asset('storage/' . $galery->path) }}'); min-height: 180px" ></div>
                        @elseif ($galery->media_type == 'video')
                        <div data-modal-target="{{$galery->path}}" data-modal-toggle="{{$galery->path}}" class="cursor-pointer flex items-center rounded-md border-2 drop-shadow-lg" >
                            <video height="100%" preload="metadata">
                                <source src="{{ asset('storage/' . $galery->path) }}" type="video/mp4">
                                <source src="{{ asset('storage/' . $galery->path) }}" type="video/webm">
                                <source src="{{ asset('storage/' . $galery->path) }}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        @endif
                        <div id="{{$galery->path}}" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-4xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Galery DEX
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5 space-y-4">
                                        @if ($galery->media_type == 'image')
                                            <img src="{{ asset('storage/' . $galery->path) }}" alt="" class="w-full">
                                        @elseif ($galery->media_type == 'video')
                                            <video width="100%" controls>
                                                <source src="{{ asset('storage/' . $galery->path) }}" type="video/mp4">
                                                <source src="{{ asset('storage/' . $galery->path) }}" type="video/webm">
                                                <source src="{{ asset('storage/' . $galery->path) }}" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                      <p class="text-sm italic text-slate-900 text-center">{{ $galery->caption }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    @endforeach
                </div>
            </div>
        </section>        
@endsection