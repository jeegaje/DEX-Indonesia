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
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white mb-10">Bersama Dex <hr> Membangun <hr> Indonesia</h1>
                    <img src="{{ asset('images/company-profile/line-hero.png') }}" alt="mockup" class="mb-10">
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Selama bertahun-tahun DEX telah berkontribusi dalam memberikan solusi pendistribusian pompa dengan memberikan inovasi & fasilitas terbaik pada produk & layanan</p>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border border-gray-300 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 bg-[#0756FF]">
                        Tentang
                    </a>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 bg-[]">
                        Produk
                    </a> 
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="{{ asset('images/company-profile/homepage-hero.png') }}" alt="mockup">
                </div>                
            </div>
        </section>
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="text-center mb-10">
                    <h1 class="text-2xl font-bold">Visi dan Misi <span class="text-[#0756FF]">Dex</span></h1>
                    <p class="text-xl ">Setiap langkah yang kami ambil selalu didorong oleh visi yang jelas dan misi yang kuat.</p>
                </div>
                <div class="flex gap-10 align-bottom">
                    <div class="basis-1/2">
                        <h2 class="text-2xl text-[#0756FF] text-right font-bold">Visi</h2>
                        <ul>
                            <li>Menjadi Perusahaan Nasional terdepan dalam pemberian Solusi bagi permasalahan banjir. Bersama arus inovasi yang terus mengalir, kami teguh sebagai penyedia Solusi Nasional yang komprehensif. Bertekad efektif mengatasi permasalahan banjir, kami menjadi Sungai utama dalam Solusi</li>
                        </ul>
                    </div>
                    <div class="mt-10">
                        <img src="{{ asset('images/company-profile/stepper.png') }}" alt="" height="100px">
                    </div>
                    <div class="basis-1/2">
                        <h2 class="text-2xl text-[#0756FF] text-left font-bold">Misi</h2>
                        <ul>
                            <li>Menciptakan dan mengembangkan produk berteknologi untuk penanganan banjir yang tepat guna</li>
                            <li>Menyediakan produk dan layanan yang prima di seluruh wilayah Indonesia</li>
                            <li>Membagikan pengetahuan dan pengalaman mengenai penanganan permasalahan banjir kepada stakeholder serta Masyarakat</li>
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
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="text-center mb-10">
                    <h1 class="text-2xl font-bold text-[#0756FF]">Peta Sebaran Project</h1>
                    <p class="text-xl ">Berikut Merupakan Wilayah Yang Sudah Mempercayakan Solusi Permasalahan Banjir Ke Pompa Dex</p>
                </div>
                <div class="flex gap-20">
                    <div class="basis-1/2">
                        <img src="{{ asset('images/company-profile/map-1.png') }}" alt="">
                    </div>
                    <div class="basis-1/2">
                        <p class="mt-20">Kota anda belum ada? Tidak perlu khawatir,
                            Kami siap menjangkau kota anda, hubungi kami
                            di Menu Kontak</p>
                        <a href="#" class="text-[#0756FF] underline font-bold">Kontak Kami di Sini</a>
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
                        <div class="flex gap-20">
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
                                            <span class="font-bold text-black">Impeller Material</span> : Stainless Steel 304 - 316 - Duplex
                                            <span class="font-bold text-black">Shaft Material</span> : Stainless Steel 420
                                            <span class="font-bold text-black">Pump Case Material</span> : Gray Iron Casting 250
                                            <span class="font-bold text-black">Wearing Ring</span>   : Stainless Steel 304
                                            <span class="font-bold text-black">Impeller Material</span> : Stainless Steel 304 - 316 - Duplex
                                            <span class="font-bold text-black">Cables</span> : Stainless Steel 420
                                            <span class="font-bold text-black">Impeller Material</span> : Stainless Steel 304 - 316 - Duplex
                                            <span class="font-bold text-black">Insulation Class</span> : Stainless Steel 420
                                    </div>
                                </ul>
                            </div>
                            <div>
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
                                            <span class="font-bold text-black">DCS/F150H10/30/250</span> : 150 l/s
                                            <span class="font-bold text-black">DCS/F200H10/37/300</span> : 200 l/s
                                            <span class="font-bold text-black">DCS/F250H10/45/300</span> : 250 l/s
                                            <span class="font-bold text-black">DCS/F300H10/45/350</span> : 300 l/s
                                            <span class="font-bold text-black">DCS/F500H10/75/400</span> : 500 l/s
                                            <span class="font-bold text-black">DCS/F570H10/132/500</span> : 750 l/s
                                            <span class="font-bold text-black">DCS/F1000H10/160/500</span> : 1000 l/s
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
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <div class="flex gap-20">
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
                            <div>
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
                <div class="flex gap-5">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('images/company-profile/article-1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
                            </a>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                  </svg>
                                <span>27 August, 2024</span>
                                </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Memilih pompa air yang tepat bergantung pada beberapa faktor seperti kapasitas, daya tahan, dan kebutuhan spesifik.... <span class="font-bold text-[#0756FF]">Baca Selengkapnya</span></p>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('images/company-profile/article-1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
                            </a>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                  </svg>
                                <span>27 August, 2024</span>
                                </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Memilih pompa air yang tepat bergantung pada beberapa faktor seperti kapasitas, daya tahan, dan kebutuhan spesifik.... <span class="font-bold text-[#0756FF]">Baca Selengkapnya</span></p>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('images/company-profile/article-1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
                            </a>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                  </svg>
                                <span>27 August, 2024</span>
                                </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Memilih pompa air yang tepat bergantung pada beberapa faktor seperti kapasitas, daya tahan, dan kebutuhan spesifik.... <span class="font-bold text-[#0756FF]">Baca Selengkapnya</span></p>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('images/company-profile/article-1.png') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
                            </a>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                  </svg>
                                <span>27 August, 2024</span>
                                </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Memilih pompa air yang tepat bergantung pada beberapa faktor seperti kapasitas, daya tahan, dan kebutuhan spesifik.... <span class="font-bold text-[#0756FF]">Baca Selengkapnya</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <livewire:company-profile.footer />
    </body>
    @livewireScripts
</html>