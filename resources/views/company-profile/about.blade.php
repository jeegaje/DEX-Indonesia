@extends('company-profile.template')

@section('content')
        <section class="bg-white dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex w-[520px]">
                    <img src="{{ asset('images/about/hero-section.png') }}" alt="mockup" class="w-full">
                </div>  
                <div class="mr-auto place-self-center lg:col-span-7 lg:ml-16 ml-0">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white mb-10"><span class="text-[#0756FF]">DEX</span><hr> Visi & Misi</h1>
                    <div>
                        <div class="flex items-end gap-5 mb-2 justify-start">
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
                        <div class="flex items-end gap-5 mb-2 justify-start">
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
        <section class="bg-[#F4F7FA]">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="text-center mb-10">
                    <h2 class="text-xl font-bold text-[#0756FF]">Kenapa Harus Memilih DEX</h1>
                    <h1 class="text-2xl font-bold">Inovatif, Terpercaya, Profesional</h1>
                    <p class="text-xl "> kami menawarkan distribusi, Pendampingan, dan pemeliharaan pompa Anda, Berikut alasan mengapa solusi kami adalah pilihan terbaik untuk anda</p>
                </div>
                <div class="flex md:flex-row flex-col gap-4 justify-center">
                    <div class="md:max-w-sm bg-white flex-1">
                        <div class="bg-cover rounded-lg mb-5" style="background-image: url('{{ asset('images/about/choose-1.jpeg') }}'); height: 250px" ></div>
                        <div class="px-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengalaman</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">lebih dari 60 kota kabupaten di Indonesia sudah terbebas dari masalah dan kendala bencana banjir</p>
                        </div>
                    </div>
                    <div class="md:max-w-sm bg-white flex-1">
                        <div class="bg-cover rounded-lg mb-5" style="background-image: url('{{ asset('images/about/choose-2.png') }}'); height: 250px" ></div>
                        <div class="px-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kualitas</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">kami memastikan produk yang terkirim ke customer sudah melalui proses Quality Control dan Ketika sampai di customer akan dilakukan serangkaian pengujian kualitas mulai dari pengetesan kelengkapan, kelistrikan hingga kualitas bahas</p>
                        </div>
                    </div>
                    <div class="md:max-w-sm bg-white flex-1">
                        <div class="bg-cover rounded-lg mb-5" style="background-image: url('{{ asset('images/about/choose-3.jpeg') }}'); height: 250px" ></div>
                        <div class="px-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Purna Jual</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">Semua produk kami yang terjual disertai garansi factory vault, garansi ketersediaan sparepart dan juga layanan maintenance setiap bulanannya selama masa garansi dengan 17 parameter pengecekan dan lebih dari 108 point penilaian yang akan memastikan kondisi pompa berada dalam kondisi primanya</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="text-center mb-10">
                    <h1 class="text-2xl font-bold text-[#0756FF]">Our Certification</h1>
                    <p class="text-xl "> Sertifikasi kami adalah wujud komitmen terhadap standar profesional dan kualitas terbaik</p>
                </div>
                <div class="flex md:flex-row flex-col justify-between items-center">
                    <div class="bg-white" style="width: 226px">
                        <div class="">
                            <img src="{{ asset('images/about/certificate-1.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ISO 9001 : 2015</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sistem Manajemen Mutu</p>
                        </div>
                    </div>
                    <div class="bg-white" style="width: 226px">
                        <img src="{{ asset('images/about/certificate-2.png') }}" alt="">
                        <div class="text-center">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ISO 45001 : 2018</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sistem Manajemen Kesehatan dan Keselamatan Kerja (K3)</p>
                        </div>
                    </div>
                    <div class="bg-white" style="width: 226px">
                        <img src="{{ asset('images/about/certificate-3.jpeg') }}" alt="">
                        <div class="text-center">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ISO 14001 : 2015</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sistem Manajemen lingkungan</p>
                        </div>
                    </div>
                    <div class="bg-white" style="width: 226px">
                        <img src="{{ asset('images/about/certificate-4.png') }}" alt="">
                        <div class="text-center">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">TKDN</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tingkat Kandungan Dalam Negeri</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
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