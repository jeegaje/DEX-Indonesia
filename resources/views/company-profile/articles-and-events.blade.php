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
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="flex justify-between border-b border-gray-200 dark:border-gray-700 mb-10">
                    <h1 class="text-2xl font-bold mb-5">Artikel Dex</h1>
                    <button type="button" class="text-[#0756FF] border-1 border-[#0756FF]">Lihat Semua</button>
                </div>
                <div class="grid grid-cols-2 gap-5">
                    <div class="grid grid-cols-2 gap-5">
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
                    <div>
                        <div class="rounded-lg bg-blue-950 py-16 px-10 text-center">
                            <h3 class="text-white text-xl font-bold">Dex Activity</h3>
                            <p class="text-white mb-5">Lihat kegiatan yang kami lakukan melalui kanal media kami lainnya</p>
                            <div class="flex flex-col items-center gap-5">
                                <button class="px-5 py-2 w-32 rounded-md bg-white">Youtube</button>
                                <button class="px-5 py-2 w-32 rounded-md bg-[#0756FF] text-white">Instagram</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <livewire:company-profile.footer />
    </body>
    @livewireScripts
</html>