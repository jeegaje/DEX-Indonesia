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
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-black">Dex Pump Product</h1>
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
                                            <span class="font-bold text-black">Impeller Material</span> : Stainless Steel 304 - 316 - Duplex <br>
                                            <span class="font-bold text-black">Shaft Material</span> : Stainless Steel 420<br>
                                            <span class="font-bold text-black">Pump Case Material</span> : Gray Iron Casting 250<br>
                                            <span class="font-bold text-black">Wearing Ring</span>   : Stainless Steel 304<br>
                                            <span class="font-bold text-black">Impeller Material</span> : Stainless Steel 304 - 316 - Duplex<br>
                                            <span class="font-bold text-black">Cables</span> : Stainless Steel 420<br>
                                            <span class="font-bold text-black">Impeller Material</span> : Stainless Steel 304 - 316 - Duplex<br>
                                            <span class="font-bold text-black">Insulation Class</span> : Stainless Steel 420<br>
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
                                            <span class="font-bold text-black">DCS/F150H10/30/250</span> : 150 l/s<br>
                                            <span class="font-bold text-black">DCS/F200H10/37/300</span> : 200 l/s<br>
                                            <span class="font-bold text-black">DCS/F250H10/45/300</span> : 250 l/s<br>
                                            <span class="font-bold text-black">DCS/F300H10/45/350</span> : 300 l/s<br>
                                            <span class="font-bold text-black">DCS/F500H10/75/400</span> : 500 l/s<br>
                                            <span class="font-bold text-black">DCS/F570H10/132/500</span> : 750 l/s<br>
                                            <span class="font-bold text-black">DCS/F1000H10/160/500</span> : 1000 l/s<br>
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
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
                <div class="mb-10">
                    <h1 class="text-2xl font-bold">Rekomendasi Produk</h1>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-1.png') }}'); height: 150px" ></div>
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-2.png') }}'); height: 150px"></div>
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-3.png') }}'); height: 150px"></div>
                    <div class="bg-cover" style="background-image: url('{{ asset('images/company-profile/galery-4.png') }}'); height: 150px"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-8 lg:grid-cols-12">
                <div class="flex items-center justify-between bg-[#0756FF] rounded-lg p-5">
                    <div>
                        <h3 class="font-bold text-xl text-white mb-5">
                            Flyer Produk Submersible <br>
                            Axial Flow Pump  
                        </h3>
                        <button class="bg-[#F4F7FA47] text-white py-2 px-10 rounded-md">Download</button>
                    </div>
                        <img class="max-h-[150px]" src="{{ asset('images/product/flyer.png') }}" alt="">
                </div>
            </div>
        </section>
        <livewire:company-profile.footer />
    </body>
    @livewireScripts
</html>