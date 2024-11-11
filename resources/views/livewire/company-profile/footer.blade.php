<footer class="p-4 bg-black sm:p-6 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between gap-10">
            <div class="mb-6 md:mb-0 flex-1">
                <a href="#" class="flex items-center py-10">
                    <img src="{{ asset('images/logo-white.png') }}" class="mr-3 h-8" alt="FlowBite Logo" />
                </a>
                <p class="text-white text-sm">
                    Selama bertahun-tahun DEX telah berkontribusi dalam memberikan solusi pendistribusian air dengan memberikan inovasi & fasilitas terbaik pada produk & layanan
                    <br><br>
                    Misi DEX adalah menjadi perusahaan Nasional terdepan dalam memberikan solusi pembangunan dan pengelolaan lingkungan melalui teknologi
                </p>
            </div>
            <div class="flex flex-col flex-1">
                <div class="text-white py-10 flex items-center gap-5">
                    <p class="text-center">Download Company Profile PT Pompa Dex Indoguna </p>
                    <a href="{{ route('file.download', ['path' => $company_profile->path]) }}"  class="py-2 px-3 bg-blue-600 rounded-md text-white">Download</a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Explore</h2>
                        <ul class="text-white dark:text-gray-400">
                            <li class="mb-4">
                                <a href="/" class="hover:underline text-sm">Beranda</a>
                            </li>
                            <li class="mb-4">
                                <a href="/about" class="hover:underline text-sm">Tentang</a>
                            </li>
                            <li class="mb-4">
                                <a href="/product" class="hover:underline text-sm">Produk</a>
                            </li>
                            <li class="mb-4">
                                <a href="/project" class="hover:underline text-sm">Project</a>
                            </li>
                            <li class="mb-4">
                                <a href="/articles-and-events" class="hover:underline text-sm">Article & Event</a>
                            </li>
                            <li class="mb-4">
                                <a href="/contact" class="hover:underline text-sm">Kontak</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Company</h2>
                        <ul class="text-white dark:text-gray-400">
                            <li class="mb-4">
                                <a href="/about" class="hover:underline text-sm">Company Profile</a>
                            </li>
                            <li>
                                <a href="/project" class="hover:underline text-sm">Portofolio</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Address</h2>
                        <ul class="text-white dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline text-sm">Ruko Section One, Jl. Rungkut Industri Raya No.1 Blok A-10, Kendangsari, Tenggilis Mejoyo, Surabaya, East Java 60292</a>
                            </li>
                        </ul>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase">Nomor Telepom</h2>
                        <ul class="text-white dark:text-gray-400">
                            <li>
                                <a href="#" class="hover:underline text-sm">(031)5953529</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">Copyright © 2024 <a href="{{ url('/') }}" class="hover:underline">Dex Pump</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="https://www.youtube.com/@dexpumpindonesia6971" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="#e5e7e7" fill-opacity="0" d="M12 11L12 12L12 13z"><animate fill="freeze" attributeName="d" begin="0.6s" dur="0.2s" values="M12 11L12 12L12 13z;M10 8.5L16 12L10 15.5z"/><set fill="freeze" attributeName="fill-opacity" begin="0.6s" to="1"/></path><path fill="none" stroke="#e5e7e7" stroke-dasharray="64" stroke-dashoffset="64" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5c9 0 9 0 9 7c0 7 0 7 -9 7c-9 0 -9 0 -9 -7c0 -7 0 -7 9 -7Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path></svg>                </a>
                <a href="https://www.instagram.com/dexpumpid/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><g fill="none"><path stroke="#e5e7e7" stroke-width="2" d="M3 11c0-3.771 0-5.657 1.172-6.828S7.229 3 11 3h2c3.771 0 5.657 0 6.828 1.172S21 7.229 21 11v2c0 3.771 0 5.657-1.172 6.828S16.771 21 13 21h-2c-3.771 0-5.657 0-6.828-1.172S3 16.771 3 13z"/><circle cx="16.5" cy="7.5" r="1.5" fill="#e5e7e7"/><circle cx="12" cy="12" r="3" stroke="#e5e7e7" stroke-width="2"/></g></svg>                </a>
            </div>
        </div>
    </div>
</footer>