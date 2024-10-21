<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laravel</title>

        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles

    </head>
    <body>
        <livewire:company-profile.navbar />
        <section class="bg-white dark:bg-gray-900">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="{{ asset('images/about/hero-section.png') }}" alt="mockup">
                </div>  
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white mb-10"><span class="text-[#0756FF]">Dex</span><hr> Visi & Misi</h1>
                    <div>
                        <h2 class="text-xl font-bold text-[#0756FF]">Visi</h2>
                        <ul class="text-gray-500 list-inside dark:text-gray-400">
                            <li class="flex">
                                <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                 </svg>
                                 Menjadi Perusahaan Nasional terdepan dalam pemberian Solusi bagi permasalahan banjir. Bersama arus inovasi yang terus mengalir, kami teguh sebagai penyedia Solusi Nasional yang komprehensif. Bertekad efektif mengatasi permasalahan banjir, kami menjadi Sungai utama dalam Solusi
                            </li>
                        </ul>
                        <h2 class="text-xl font-bold text-[#0756FF]">Misi</h2>
                        <ul class="text-gray-500 list-inside dark:text-gray-400">
                            <li class="flex">
                                <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                 </svg>
                                 Menciptakan dan mengembangkan produk berteknologi untuk penanganan banjir yang tepat guna
                            </li>
                            <li class="flex">
                                <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                 </svg>
                                 Menyediakan produk dan layanan yang prima di seluruh wilayah Indonesia
                            </li>
                            <li class="flex">
                                <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                 </svg>
                                 Membagikan pengetahuan dan pengalaman mengenai penanganan permasalahan banjir kepada stakeholder serta Masyarakat
                            </li>
                        </ul>
                    </div>
                </div>              
            </div>
        </section>
        <section class="bg-[#F4F7FA]">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="text-center mb-10">
                    <h2 class="text-xl font-bold text-[#0756FF]">Kenapa Harus Memilih Dex</h1>
                    <h1 class="text-2xl font-bold">Inovatif, Terpercaya, Profesional</h1>
                    <p class="text-xl "> kami menawarkan distribusi, Pendampingan, dan pemeliharaan pompa Anda, Berikut alasan mengapa solusi kami adalah pilihan terbaik untuk anda</p>
                </div>
                <div class="flex gap-4">
                    <div class="max-w-sm bg-white flex-1">
                        <div class="bg-cover rounded-lg mb-5" style="background-image: url('{{ asset('images/about/choose-1.jpeg') }}'); height: 250px" ></div>
                        <div class="">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengalaman</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">lebih dari 60 kota kabupaten di Indonesia sudah terbebas dari masalah dan kendala bencana banjir</p>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white flex-1">
                        <div class="bg-cover rounded-lg mb-5" style="background-image: url('{{ asset('images/about/choose-2.png') }}'); height: 250px" ></div>
                        <div class="">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kualitas</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">kami memastikan produk yang terkirim ke customer sudah melalui proses Quality Control dan Ketika sampai di customer akan dilakukan serangkaian pengujian kualitas mulai dari pengetesan kelengkapan, kelistrikan hingga kualitas bahas</p>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white flex-1">
                        <div class="bg-cover rounded-lg mb-5" style="background-image: url('{{ asset('images/about/choose-3.jpeg') }}'); height: 250px" ></div>
                        <div class="">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Purna Jual</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Semua produk kami yang terjual disertai garansi factory vault, garansi ketersediaan sparepart dan juga layanan maintenance setiap bulanannya selama masa garansi dengan 17 parameter pengecekan dan lebih dari 108 point penilaian yang akan memastikan kondisi pompa berada dalam kondisi primanya</p>
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
                <div class="flex justify-between">
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
                    <h1 class="text-2xl font-bold">Dex Pump Galery</h1>
                    <p class="text-xl ">Kumpulan dokumentasi visual dari berbagai proyek pemasangan, distribusi, dan pemeliharaan pompa kami.</p>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-1.png') }}'); height: 150px" ></div>
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-2.png') }}'); height: 150px"></div>
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-3.png') }}'); height: 150px"></div>
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-4.png') }}'); height: 150px"></div>
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-5.jpeg') }}'); height: 150px" ></div>
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-6.png') }}'); height: 150px"></div>
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-7.png') }}'); height: 150px"></div>
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-8.png') }}'); height: 150px"></div>
                </div>
            </div>
        </section>
        <livewire:company-profile.footer />
    </body>
    @livewireScripts
</html>