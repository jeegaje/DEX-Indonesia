<div class="text-center text-white">
    <nav style="background-image: url('{{ asset('images/navbar-webapps.png') }}'); background-size: cover; background-position: center;">
        <div class="max-w-screen-xl flex flex-wrap justify-between mx-auto p-7 pb-0">
            <div class="text-left">
                <h1 class="text-2xl font-bold mb-2">Selamat Bekerja</h1>
                <h2 class="text-xl">Pak Harianto</h2>
            </div>
            <button type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg focus:outline-none dark:text-gray-400" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-7">
            <label for="pumps" class="block mb-2 text-sm font-medium dark:text-white">Daftar Pompa</label>
            <select id="pumps" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih Pompa</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
        </div>
    </nav>
</div>
