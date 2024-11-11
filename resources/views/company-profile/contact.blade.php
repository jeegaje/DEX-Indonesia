<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body>
    <livewire:company-profile.navbar />
    <section style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image:
    linear-gradient(to left, rgba(155, 155, 155, 0.52), rgba(0, 0, 0, 0.73)),
    url('{{ asset('images/company-profile/galery-1.png') }}');">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 text-white">
            <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-center dark:text-white">Contact our team 
            </h2>
            <p class="mb-8 lg:mb-16 font-light text-center dark:text-gray-400 sm:text-xl px-24">Butuh bantuan atau informasi lebih lanjut terkait produk kami? Tim kami yang ramah dan siap membantu ada di sini untuk Anda, Jangan ragu untuk menghubungi, kami siap memberikan solusi terbaik
            </p>
        </div>
    </section>
    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">

            <form action="{{ route('sendToGmail') }}" target="_blank" method="GET" class="grid grid-cols-2 gap-10">
                <div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email Address</label>
                        <input type="email" name="name" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="name@example.com" required>
                    </div>
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                        <input type="text" name="name" id="name"
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="Nama" required>
                    </div>
                    <div>
                        <label for="phone"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telepon</label>
                        <input type="text" id="phone" name="phone"
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="Phone" required>
                    </div>
                    <div>
                        <label for="instance"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Instansi</label>
                        <input type="text" id="instance" name="instance"
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                            placeholder="Nama Instansi" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
                        <textarea id="message" rows="6" name="message"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Leave a comment..."></textarea>
                    </div>
                </div>
                <div class="px-5 m-0">
                    <p class="font-bold mb-5 text-lg">Kontak kami Melalui</p>

                    <p class="font-bold mb-2">Email Kami</p>
                    <p class="mb-5">support@dexindonesia.com</p>
                    <p class="font-bold mb-2">No Telepon </p>
                   <p class="mb-5"> +62 31 99848444‬</p>
                    <p class="font-bold mb-2">Kunjungi kami di </p>
                    <p class="mb-5">Ruko Section One, Jl. Rungkut Industri Raya No.1 Blok A-10, Kendangsari, Tenggilis Mejoyo, Surabaya, East Java 60292</p>
                    <p class="font-bold mb-2">Sosial media kami</p>
                    <p class="font-bold mb-2">Instagram</p>
                    <a href="https://www.instagram.com/dexpumpid/">
                        <p class="mb-5"> @dexpumpid</p>
                    </a>
                    <p class="font-bold mb-2">Youtube </p>
                    <a href="https://www.youtube.com/@dexpumpindonesia6971">
                        <p class="mb-5">@dexpumpindonesia6971</p>
                    </a>
                </div>
                <div class="flex">
                    <button class="bg-blue-600 rounded-lg text-white py-2 px-5" type="submit"> Submit </button>
                </div>
            </form>
        </div>
    </section>
    <livewire:company-profile.footer :company_profile="$company_profile" />
</body>
@livewireScripts

</html>
