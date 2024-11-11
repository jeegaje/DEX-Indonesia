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
                <div class="flex justify-between border-b border-gray-200 dark:border-gray-700 my-5">
                    <h1 class="text-2xl font-bold mb-5">Artikel Dex</h1>
                </div>
                <div class="grid grid-cols-3 gap-5 items-start">
                    <div class="grid grid-cols-2 gap-5 col-span-2">
                        <form class="flex items-center gap-2 col-span-2">
                            <div class="w-full">
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2" placeholder="Search" required="">
                            </div>
                            <button type="submit" class="text-white end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </form>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('images/company-profile/article-1.png') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
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
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
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
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
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
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
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
                    <div class="">
                        <div class="rounded-lg bg-blue-950 py-16 px-10 text-center">
                            <h3 class="text-white text-xl font-bold">Dex Activity</h3>
                            <p class="text-white mb-5">Lihat kegiatan yang kami lakukan melalui kanal media kami lainnya</p>
                            <div class="flex flex-col items-center gap-5">
                                <button class="px-5 py-2 w-32 rounded-md bg-white">Youtube</button>
                                <button class="px-5 py-2 w-32 rounded-md bg-[#0756FF] text-white">Instagram</button>
                            </div>
                        </div>
                        <div class="my-5">
                            <h1 class="text-2xl font-bold mb-5">Artikel Dex</h1>
                            <div class="flex flex-col text-gray-900">
                                <div class="grid grid-cols-4 gap-5 border-b-2 border-gray-200 py-5">
                                    <div class="col-span-3">
                                        <a href="#">
                                            <h5 class="mb-2 text-md font-bold tracking-tight dark:text-gray-900">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
                                        </a>
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                            <span>27 August, 2024</span>
                                        </div>
                                    </div>
                                    <div class="w-20 h-20 p-2 rounded-full" style="background-image: url('{{ asset('images/company-profile/galery-1.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col text-gray-900">
                                <div class="grid grid-cols-4 gap-5 border-b-2 border-gray-200 py-5">
                                    <div class="col-span-3">
                                        <a href="#">
                                            <h5 class="mb-2 text-md font-bold tracking-tight dark:text-gray-900">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
                                        </a>
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                            <span>27 August, 2024</span>
                                        </div>
                                    </div>
                                    <div class="w-20 h-20 p-2 rounded-full" style="background-image: url('{{ asset('images/company-profile/galery-1.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col text-gray-900">
                                <div class="grid grid-cols-4 gap-5 border-b-2 border-gray-200 py-5">
                                    <div class="col-span-3">
                                        <a href="#">
                                            <h5 class="mb-2 text-md font-bold tracking-tight dark:text-gray-900">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
                                        </a>
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                            <span>27 August, 2024</span>
                                        </div>
                                    </div>
                                    <div class="w-20 h-20 p-2 rounded-full" style="background-image: url('{{ asset('images/company-profile/galery-1.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col text-gray-900">
                                <div class="grid grid-cols-4 gap-5 border-b-2 border-gray-200 py-5">
                                    <div class="col-span-3">
                                        <a href="#">
                                            <h5 class="mb-2 text-md font-bold tracking-tight dark:text-gray-900">Memilih Pompa air yang tepat : Tips dan praktik yang terbaik</h5>
                                        </a>
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                            <span>27 August, 2024</span>
                                        </div>
                                    </div>
                                    <div class="w-20 h-20 p-2 rounded-full" style="background-image: url('{{ asset('images/company-profile/galery-1.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-5">
                            <h1 class="text-2xl font-bold mb-5">Artikel Dex</h1>
                            <div class="h-20 rounded-lg flex items-center p-2 my-4" style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image:
    linear-gradient(to left, rgba(155, 155, 155, 0.52), rgba(0, 0, 0, 0.73)),
    url('{{ asset('images/company-profile/galery-1.png') }}');">
                                <div class="px-2 py-1 rounded-lg" style="background: rgba(255, 255, 255, 0.493);">
                                    <p class="font-bold text-white">Category 1</p>
                                </div>
                            </div>
                            <div class="h-20 rounded-lg flex items-center p-2 my-4" style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image:
    linear-gradient(to left, rgba(155, 155, 155, 0.52), rgba(0, 0, 0, 0.73)),
    url('{{ asset('images/company-profile/galery-1.png') }}');">
                                <div class="px-2 py-1 rounded-lg" style="background: rgba(255, 255, 255, 0.493);">
                                    <p class="font-bold text-white">Category 1</p>
                                </div>
                            </div>
                            <div class="h-20 rounded-lg flex items-center p-2 my-4" style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image:
    linear-gradient(to left, rgba(155, 155, 155, 0.52), rgba(0, 0, 0, 0.73)),
    url('{{ asset('images/company-profile/galery-1.png') }}');">
                                <div class="px-2 py-1 rounded-lg" style="background: rgba(255, 255, 255, 0.493);">
                                    <p class="font-bold text-white">Category 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <livewire:company-profile.footer :company_profile="$company_profile" />
    </body>
    @livewireScripts
</html>