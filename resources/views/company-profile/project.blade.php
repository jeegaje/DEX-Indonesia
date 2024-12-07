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
                <div>
                    <div ID="ngy2p" data-nanogallery2='{
                        "itemsBaseURL": "{{ asset('storage') . '/' }}",
                        "thumbnailWidth": "300",
                        "thumbnailBorderVertical": 0,
                        "thumbnailBorderHorizontal": 0,
                        "thumbnailLabel": {
                            "position": "overImageOnBottom",
                            "displayDescription": true,
                            "descriptionMultiLine": true
                        },
                        "thumbnailHoverEffect2": "toolsAppear|labelSlideUp|imageScale150",
                        "thumbnailAlignment": "center",
                        "thumbnailGutterWidth": 10,
                        "thumbnailGutterHeight": 10,
                        "thumbnailOpenImage": true
                      }'>
                      @forEach($galery_dex as $galery)
                        <a href="{{$galery->path}}" data-ngthumb="{{ $galery->thumbnail_path ?? $galery->path }}" data-ngdesc="{{ $galery->caption }}">{{ $galery->caption ? '________' : '' }}</a>
                      @endforeach
                    </div>
                </div>
            </div>
        </section>        
@endsection