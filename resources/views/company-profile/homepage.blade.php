@extends('company-profile.template')

@section('content')
        <section class="bg-white dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white mb-10">Bersama Dex <hr> Membangun <hr> Indonesia</h1>
                    <img src="{{ asset('images/company-profile/line-hero.png') }}" alt="mockup" class="mb-10">
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Selama bertahun-tahun DEX telah berkontribusi dalam memberikan solusi pendistribusian pompa dengan memberikan inovasi & fasilitas terbaik pada produk & layanan</p>
                    <a href="/about" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border border-gray-300 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 bg-[#0756FF]">
                        Tentang
                    </a>
                    <a href="/product" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 bg-[]">
                        Produk
                    </a> 
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="{{ asset('storage/' . $hero_image->path) }}" alt="mockup">
                </div>                
            </div>
        </section>
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="text-center mb-10">
                    <h1 class="text-2xl font-bold">Visi dan Misi <span class="text-[#0756FF]">Dex</span></h1>
                    <p class="text-xl ">Setiap langkah yang kami ambil selalu didorong oleh visi yang jelas dan misi yang kuat.</p>
                </div>
                <div class="flex md:flex-row flex-col gap-10 align-bottom">
                    <div class="basis-1/2">
                        <div class="flex items-end gap-5 mb-2 md:justify-end justify-center">
                            <h2 class="text-2xl text-[#0756FF] text-center font-bold">Visi</h2>
                            <div class="pb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                    <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAKBJREFUOE+lk9ENgyAQhv97MNQtXKU7aNIx3MRV3MBRZIwmtr3miBol4J3KI/B9cNwPITFcwyOAKrUWzXm6KUBSkDv58eKKvxi2tzMLItgvEpMghmnCkwvIO+klpOB3T941zKogBwuoCo5gVaDBhwILnBVY4Vmw78IZeBu0kIOrcGjjHTgIyprbH6ED4CVhEhLDL1y3hBJczS190J+Fhf0DoJGEr32l35gAAAAASUVORK5CYII=" x="0" y="0" width="16" height="16"/>
                                </svg>
                            </div>
                        </div>
                        <ul>
                            <li class="grid grid-cols-12 items-start min-h-[130px]">
                                <svg class="col-span-2 sm:col-span-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="29" height="29" viewBox="0 0 29 29">
                                    <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAYAAABWk2cPAAAAAXNSR0IArs4c6QAAASpJREFUSEvt1r9Kw1AUx/Hv8W9HF2fdBfEJJC4+QeImzeKiryAk2R3t1EFdS2dXg0+gDoJb38AuglT0p7dpQYcaI0kczB0SCIfzuTn3XDjGZC348uaNSLBlsDL9XtI7fTPOX3p24fKZe7T2FEnEJQEz08iIRz1LbDFQOAdnVYPT/K9ix5YDXQFeXeiHlTpUNYKOGv4FSoPmHvNxAGurcDuA08vc8C8Bhcu7vQEnbdhcz/Jc38NuwRteCHV/9tCB4RPcDcBtoBa0ewQHnQzsHtaAfj6Yfa9B8zu5UCM15a30nv7P8ub36OyIX3dvg/6kArYU6LGCOfdbu/5pUKTW8uXJcGNoLcuMMJvwfcUyoqpViWTUt3iMjuFAoUQbK3fwlptzxY1B8ty31Fnvukea9jLNnqkAAAAASUVORK5CYII=" x="0" y="0" width="29" height="29"/>
                                  </svg>
                                  <div class="col-span-10 sm:col-span-11">
                                    Menjadi Perusahaan Nasional terdepan dalam pemberian Solusi bagi permasalahan banjir. Bersama arus inovasi yang terus mengalir, kami teguh sebagai penyedia Solusi Nasional yang komprehensif. Bertekad efektif mengatasi permasalahan banjir, kami menjadi Sungai utama dalam Solusi
                                  </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:block hidden">
                        <img src="{{ asset('images/company-profile/stepper.png') }}" alt="" height="100px">
                    </div>
                    <div class="basis-1/2">
                        <div class="flex items-end gap-5 mb-2 md:justify-start justify-center">
                            <h2 class="text-2xl text-[#0756FF] text-center font-bold">Misi</h2>
                            <div class="pb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                    <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAKBJREFUOE+lk9ENgyAQhv97MNQtXKU7aNIx3MRV3MBRZIwmtr3miBol4J3KI/B9cNwPITFcwyOAKrUWzXm6KUBSkDv58eKKvxi2tzMLItgvEpMghmnCkwvIO+klpOB3T941zKogBwuoCo5gVaDBhwILnBVY4Vmw78IZeBu0kIOrcGjjHTgIyprbH6ED4CVhEhLDL1y3hBJczS190J+Fhf0DoJGEr32l35gAAAAASUVORK5CYII=" x="0" y="0" width="16" height="16"/>
                                </svg>
                            </div>
                        </div>
                        <ul>
                            <div class="mb-10">
                                <li class="grid grid-cols-12 items-start min-h-[130px]">
                                    <svg class="col-span-2 sm:col-span-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="29" height="29" viewBox="0 0 29 29">
                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAYAAABWk2cPAAAAAXNSR0IArs4c6QAAASpJREFUSEvt1r9Kw1AUx/Hv8W9HF2fdBfEJJC4+QeImzeKiryAk2R3t1EFdS2dXg0+gDoJb38AuglT0p7dpQYcaI0kczB0SCIfzuTn3XDjGZC348uaNSLBlsDL9XtI7fTPOX3p24fKZe7T2FEnEJQEz08iIRz1LbDFQOAdnVYPT/K9ix5YDXQFeXeiHlTpUNYKOGv4FSoPmHvNxAGurcDuA08vc8C8Bhcu7vQEnbdhcz/Jc38NuwRteCHV/9tCB4RPcDcBtoBa0ewQHnQzsHtaAfj6Yfa9B8zu5UCM15a30nv7P8ub36OyIX3dvg/6kArYU6LGCOfdbu/5pUKTW8uXJcGNoLcuMMJvwfcUyoqpViWTUt3iMjuFAoUQbK3fwlptzxY1B8ty31Fnvukea9jLNnqkAAAAASUVORK5CYII=" x="0" y="0" width="29" height="29"/>
                                      </svg>
                                      <div class="col-span-10 sm:col-span-11">
                                          Menciptakan dan mengembangkan produk berteknologi untuk penanganan banjir yang tepat guna
                                      </div>
                                </li>
                                <li class="grid grid-cols-12 items-start min-h-[130px]">
                                    <svg class="col-span-2 sm:col-span-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="29" height="29" viewBox="0 0 29 29">
                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAYAAABWk2cPAAAAAXNSR0IArs4c6QAAAY1JREFUSEvt1i9IA1EcB/Dvz78Dy4p5awZh2mxylgWtuzXxikVZNN8dmDSKFoOKba5aVjzWbCpMMF42uCKMif70t+dwoNve2+7OoD/YHhyP74f357Yf4bMmCmyNE1wGFglId55HNAZvhNOXMp1JHslXqsguM7yIgJ4xTPBaZfJp0mZnDDiJG+zkvzJWaNrmKwBWUuiHFQjKCYJCNX4DxT/a85gzs0BpDchl1JS7EDi4BMJH/ZthtL25LFB1gfQM0HhWo5SAeU8fNkKv94CFLLB7oT5S+w5QWgXOA2DzSG+1RujDoQqd2/4KX55Xq5fVdj/vxxuhPwWtW8DxFlC7V1usUyOhcqmqHiDj0g5wG+qQGP497Qa7z1iHHWqlo4DtvzbT395RQWM0CtAYlVdGYKla/fvp5X2dEzXc3ma5f2iqGAOqFzl4lvFFGhw5eMYfQqdsfoqhz+27x8l3g4yAUgW2mCBtaCJFBEd1+AX2mODGrTLDb1XIa6Nt2GaHGRugaBtvlj6XcUOA36xQINY7Jo2e9nTavoQAAAAASUVORK5CYII=" x="0" y="0" width="29" height="29"/>
                                      </svg>
                                      <div class="col-span-10 sm:col-span-11">
                                          Menyediakan produk dan layanan yang prima di seluruh wilayah Indonesia

                                      </div>
                                </li>
                                <li class="grid grid-cols-12 items-start min-h-[130px]">
                                    <svg class="col-span-2 sm:col-span-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="29" height="29" viewBox="0 0 29 29">
                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAYAAABWk2cPAAAAAXNSR0IArs4c6QAAAd9JREFUSEvtlj9MFFEQh7/xHwQKr5HQHZ0FCbGh1bOxIXS3doSjwEKwozS5vcSOUs6GAozdSUXCFTRc6IQGSCCh4zqDhVBACEZH5x6bnBFxuNythf6S3bd5eZnvzbx5syNc6FZeczeFosIDgUwy36ax9k1Y/FKRt2ZP7NX9VIuqxG0C/NaMCvF5RUpyO9LCDVjoNDCx/1V5LF2RrgG5tKA/WDWDaopAQx39DSj/oZcec6YHpkdgKAuZXqh/grkV2K5fLyvc4c3eg9UYbGxkw0kAm2YWYa7qB7uh889hLAfLm/CsDEen8GIEZsfDBvonOgA1oHn5rhbCmuisEr76C2EjHrk9vczY2COYn4L6Idyf9uDCmpagq8VwnkMDsL4Hk+Wfvf8TviXofhnu9gTwzgG8roawe9USNDH+cBAqMwH+pATruz6sG5rtCwbt/JqVZPWr92CPR27ox4VfPbJi8WE2ZPXkG3+I3dDkTponyxtwfAqjwxeV6TCEt/kqXeWxG2pGXkZg1yQJtc2llr1JKTw+8ReEZs+v5aknSTxr/iHonUg/d6DPvTLK6XeDSk2685pTwdrQVCRCIXT4eY1VKHaaqkrpfEniBrQBjrSgyjjS3sZbrc9VtgRKZ0vS+Bd9B5yBuPbnuw8lAAAAAElFTkSuQmCC" x="0" y="0" width="29" height="29"/>
                                      </svg>
                                      <div class="col-span-10 sm:col-span-11">
                                          Membagikan pengetahuan dan pengalaman mengenai penanganan permasalahan banjir kepada stakeholder serta Masyarakat

                                      </div>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="text-center mb-10">
                    <h1 class="text-2xl font-bold">Dex Pump Galery</h1>
                    <p class="text-xl ">Kumpulan dokumentasi visual dari berbagai proyek pemasangan, distribusi, dan pemeliharaan pompa kami.</p>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    @forEach($galery_dex as $galery)
                        <div data-modal-target="{{$galery->path}}" data-modal-toggle="{{$galery->path}}" class="bg-cover cursor-pointer" style="background-image: url('{{ asset('storage/' . $galery->path) }}'); height: 150px" ></div>
                        <div id="{{$galery->path}}" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-4xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Galery Dex
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
                                      <img src="{{ asset('storage/' . $galery->path) }}" alt="" class="w-full">
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
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="text-center mb-10">
                    <h1 class="text-2xl font-bold text-[#0756FF]">Peta Sebaran Project</h1>
                    <p class="text-xl ">Berikut Merupakan Wilayah Yang Sudah Mempercayakan Solusi Permasalahan Banjir Ke Pompa Dex</p>
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
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="text-center mb-10">
                    <h1 class="text-2xl font-bold text-[#0756FF]">Dex Pump Product</h1>
                </div>
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Submersible Axial Flow Pump</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Submersible Sewage Centrifugal Pump</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content">
                    <div class="hidden p-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="flex md:gap-20 gap-0 md:flex-row flex-col">
                            <div class="basis-1/2">
                                <ul class="text-gray-500 list-inside dark:text-gray-400">
                                    <div class="mb-10">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                             </svg>
                                            Aplikasi
                                        </li>
                                        <p>DAF Series axial flow pump application range: Water  supply in cities, industrial uses, sewage drainage  systems, sewage disposal projects, etc</p>
                                    </div>
                                    <div class="mb-10">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                             </svg>
                                            Material
                                        </li>
                                        <p>
                                            <span class="font-bold text-black">Impeller Material</span> : Stainless Steel 304 - 316 - Duplex <br>
                                            <span class="font-bold text-black">Shaft Material</span> : Stainless Steel 420 <br>
                                            <span class="font-bold text-black">Pump Case Material</span> : Gray Iron Casting 250 <br>
                                            <span class="font-bold text-black">Wearing Ring</span>   : Stainless Steel 304 <br>
                                            <span class="font-bold text-black">Impeller Material</span> : Stainless Steel 304 - 316 - Duplex <br>
                                            <span class="font-bold text-black">Cables</span> : Stainless Steel 420<br>
                                            <span class="font-bold text-black">Impeller Material</span> : Stainless Steel 304 - 316 - Duplex<br>
                                            <span class="font-bold text-black">Insulation Class</span> : Stainless Steel 420<br>
                                    </div>
                                </ul>
                            </div>
                            <div class="md:order-none order-first grid justify-center">
                                <img src="{{ asset('images/company-profile/product-2.png') }}" alt="">
                            </div>
                            <div class="basis-1/2">
                                <ul class="text-gray-500 list-inside dark:text-gray-400">
                                    <div class="mb-10">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                             </svg>
                                            Kapasitas Pompa (l/s)
                                        </li>
                                        <p>
                                            <span class="font-bold text-black">DAF/F500H6/45/850</span> : 500 l/s<br>
                                            <span class="font-bold text-black">DAF/F1000H6/90/1000</span> : 1000 l/s<br>
                                            <span class="font-bold text-black">DAF/F1500H6/132/1000</span> : 1500 l/s<br>
                                            <span class="font-bold text-black">DAF/F2000H6/200/1100</span> : 2000 l/s<br>
                                            <span class="font-bold text-black">DAF/F3000H6/250/1200</span> : 3000 l/s<br>
                                            <span class="font-bold text-black">DAF/F5000H6/400/1500</span> : 5000 l/s<br>

                                        </p>
                                    </div>
                                    <div class="mb-10">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                             </svg>
                                            Advantage
                                        </li>
                                        <p>DAF series pump with adjustable impellers has the  advantages of large capacity, broad head, high  efficiency, wide application and so on</p>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <div class="flex md:gap-20 gap-0 md:flex-row flex-col">
                            <div class="basis-1/2">
                                <ul class="text-gray-500 list-inside dark:text-gray-400">
                                    <div class="mb-10">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                             </svg>
                                            Aplikasi
                                        </li>
                                        <p>DCS series submersible sewage pump is mainly used for  the municipal works, buildings, industrial sewage and  sewage treatment to discharge the sewage, waste water  and rainwater containing solids and long fibers.</p>
                                    </div>
                                    <div class="mb-10">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                             </svg>
                                            Material
                                        </li>
                                        <p>
                                            <span class="font-bold text-black">Impeller Material</span> : Stainless Steel 304 - 316 - Duplex <br>
                                            <span class="font-bold text-black">Shaft Material</span> : Stainless Steel 420 <br>
                                            <span class="font-bold text-black">Pump Case Material</span> : Gray Iron Casting 250 <br>
                                            <span class="font-bold text-black">Wearing Ring</span>   : Stainless Steel 304 <br>
                                            <span class="font-bold text-black">Cables</span> : 10 m <br>
                                            <span class="font-bold text-black">Insulation Class</span> : IP68, Class F</p>
                                    </div>
                                </ul>
                            </div>
                            <div class="md:order-none order-first grid justify-center">
                                <img src="{{ asset('images/company-profile/product-1.png') }}" alt="">
                            </div>
                            <div class="basis-1/2">
                                <ul class="text-gray-500 list-inside dark:text-gray-400">
                                    <div class="mb-10">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                             </svg>
                                            Kapasitas Pompa (l/s)
                                        </li>
                                        <p>
                                            <span class="font-bold text-black">DCS/F150H10/30/250</span> : 150 l/s <br>
                                            <span class="font-bold text-black">DCS/F200H10/37/300</span> : 200 l/s <br>
                                            <span class="font-bold text-black">DCS/F250H10/45/300</span> : 250 l/s <br>
                                            <span class="font-bold text-black">DCS/F300H10/45/350</span> : 300 l/s <br>
                                            <span class="font-bold text-black">DCS/F500H10/75/400</span> : 500 l/s <br>
                                            <span class="font-bold text-black">DCS/F570H10/132/500</span> : 750 l/s <br>
                                            <span class="font-bold text-black">DCS/F1000H10/160/500</span> : 1000 l/s <br>
                                        </p>
                                    </div>
                                    <div class="mb-10">
                                        <li class="flex items-center">
                                            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                             </svg>
                                            Advantage
                                        </li>
                                        <p>DCS series submersible sewage pump developed with  the advantages holds a comprehensive optimized  design on its hydraulic model, mechanical structure,  sealing, cooling, protection, control etc. points,  features a good performance in discharging solids and  in the prevention of fiber wrapping, high efficiency and  energy-saving, and strong reliability</p>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="flex justify-between border-b border-gray-200 dark:border-gray-700 mb-10">
                    <h1 class="text-2xl font-bold mb-5">Artikel Dex</h1>
                    <button type="button" class="text-[#0756FF] border-1 border-[#0756FF]">Lihat Semua</button>
                </div>
                <div class="flex md:flex-row flex-col gap-5">
                    @forEach ($newest_blogs as $index => $newest_blog)
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="h-40 flex items-center p-2 " style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{ asset('storage/' . $newest_blog->banner) }}')">
                            </div>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $newest_blog->title }}</h5>
                                </a>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                      </svg>
                                    <span>{{ date('j F Y', strtotime($newest_blog->published_at)) }}</span>
                                    </div>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Memilih pompa air yang tepat bergantung pada beberapa faktor seperti kapasitas, daya tahan, dan kebutuhan spesifik.... <span class="font-bold text-[#0756FF]">Baca Selengkapnya</span></p>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </section>
@endsection
