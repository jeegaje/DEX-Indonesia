<header class="fixed top-0 z-10 w-full">
    <nav class="bg-black border-gray-200 px-4 md:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between md:justify-center items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center md:hidden ">
                <img src="{{ asset('images/logo-white.png') }}" class="mr-3 h-6 md:h-9" alt="Flowbite Logo" />
            </a>
            <div class="flex items-center md:order-2 md:hidden">
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0 items-center">
                    <li>
                        <a href="/" class="block py-2 pr-4 pl-3 text-white {{ Route::currentRouteName() == "" ? "" : "font-thin" }} rounded bg-primary-700 md:bg-transparent md:text-primary-700 md:p-0 dark:text-white" aria-current="page">Beranda</a>
                    </li>
                    
                    <li>
                        <a href="/about" class="block py-2 pr-4 pl-3 text-white {{ Route::currentRouteName() == "about" ? "" : "font-thin" }} border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang</a>
                    </li>
                    <li>
                        <a href="/product" class="block py-2 pr-4 pl-3 text-white {{ Route::currentRouteName() == "product" ? "" : "font-thin" }} border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Produk</a>
                    </li>
                    <li class="md:block hidden">
                        <a href="/" class="flex items-center">
                            <img src="{{ asset('images/logo-white.png') }}" class="h-6 md:h-9" alt="Flowbite Logo" />
                        </a>
                    </li>
                    <li>
                        <a href="/project" class="block py-2 pr-4 pl-3 text-white {{ Route::currentRouteName() == "project" ? "" : "font-thin" }} border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Project</a>
                    </li>
                    <li>
                        <a href="/articles-and-events" class="block py-2 pr-4 pl-3 text-white {{ Route::currentRouteName() == "articles-and-events" ? "" : "font-thin" }} border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Artikel & Event</a>
                    </li>
                    <li>
                        <a href="/contact" class="block py-2 pr-4 pl-3 text-white {{ Route::currentRouteName() == "contact" ? "" : "font-thin" }} border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
