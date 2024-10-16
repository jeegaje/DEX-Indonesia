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
        <div style="background-color: rgb(207, 207, 207);">
            <div style="max-width: 980px; margin: auto">
                <livewire:navbar />
                <livewire:sidebar />
                <div class="bg-teal-50 p-7">
                    <div id="tabContentPump">
                        <div
                            class="hidden rounded-lg"
                            id="target-pump-data"
                            role="tabpanel"
                            aria-labelledby="trigger-pump-data"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Data Pompa</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Tim Teknisi</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Lokasi Pompa</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">No Seri Pompa</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Flow & Head</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">No Unit Pompa</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Pemeriksaan</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Running Hours Total</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>H</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Running Hours Bulanan</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>H</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="lvmdp">Lanjut</button>
                            </div>
                        </div>
                        <div
                            class="hidden"
                            id="target-lvmdp"
                            role="tabpanel"
                            aria-labelledby="trigger-lvmdp"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">LVMDP</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Lampu Indikator R.S.T</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Balance Voltase</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Frequency</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">V1</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">V2</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">V3</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Power</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="pumpData">kembali</button>
                                <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="junctionBox">Lanjut</button>
                            </div>
                        </div>
                        <div
                            class="hidden"
                            id="target-junction-box"
                            role="tabpanel"
                            aria-labelledby="trigger-junction-box"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Junction Box</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Koneksi Kabel/Baut</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Koneksi Kabel</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kerapian Koneksi</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kelembapan Dalam Box</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Suhu Dalam Box</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="lvmdp">kembali</button>
                                <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="panel">Lanjut</button>
                            </div>
                        </div>
                        <div
                            class="hidden"
                            id="target-panel"
                            role="tabpanel"
                            aria-labelledby="trigger-panel"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Panel</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Koneksi Kabel/Baut</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Koneksi Kabel</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kerapian Koneksi</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kelembapan Dalam Box</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Suhu Dalam Box</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="junctionBox">kembali</button>
                                <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="functionPanel">Lanjut</button>
                            </div>
                        </div>
                        <div
                            class="hidden"
                            id="target-panel-function"
                            role="tabpanel"
                            aria-labelledby="trigger-panel-function"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Fungsi Panel</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Indikator R.S.T</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Indikator Pump ON</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Koneksi Kabel/Baut</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Indikator VSD Standby</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Monitor Drive</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Monitor Sensor</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Monitor Power Meter</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Selektor MOA</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Tombol Start</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Tombol Stop</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Tombol Reset</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Tombol Emergency</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kipas Exhaust</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden"
                            id="target-elektrikal-mekanikal"
                            role="tabpanel"
                            aria-labelledby="trigger-elektrikal-mekanikal"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Elektrikal & Mekanikal</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Kw</h5>
                                    <p class="text-gray-400">Rujukan : <250</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Amper</h5>
                                    <p class="text-gray-400">Rujukan : <517</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">RPM</h5>
                                    <p class="text-gray-400">Rujukan : <590</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Torsi</h5>
                                    <p class="text-gray-400">Rujukan : <110%</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Suhu Winding</h5>
                                    <p class="text-gray-400">Rujukan : <90°C</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Pump Humidity</h5>
                                    <p class="text-gray-400">Rujukan : <90°C</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Suhu Bearing</h5>
                                    <p class="text-gray-400">Rujukan : <90°C</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Suhu Kabel 1</h5>
                                    <p class="text-gray-400">Rujukan : <60°C</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Suhu Kabel 2</h5>
                                    <p class="text-gray-400">Rujukan : <60°C</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Suhu Kabel 3</h5>
                                    <p class="text-gray-400">Rujukan : <60°C</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Vibrasi</h5>
                                    <p class="text-gray-400">Rujukan : <15m/s²</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Suara (dB)</h5>
                                    <p class="text-gray-400">Rujukan : <100dB</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-4">
                                    <h5 class="text-md font-semibold"">Suhu Terminal</h5>
                                    <p class="text-gray-400">Rujukan : <60°C</p>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden"
                            id="target-pipe-column-water-output"
                            role="tabpanel"
                            aria-labelledby="trigger-pipe-column-water-output"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Pipa Kolom & Output Air</button>
                            <p class="text-gray-400 mb-4">Rujukan : 4.5 - 10 pH</p>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Nilai pH Air</label>
                                <div class="flex">
                                    <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                        <p>Hz</p>
                                    </span>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Pipa kolom</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Pipa Output</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Valve (Ops)</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Flap (Ops)</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Volume Output Air</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden"
                            id="target-test-censor"
                            role="tabpanel"
                            aria-labelledby="trigger-test-censor"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Sensor Test</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <h4 class="font-semibold mb-4">Pump Fault</h4>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <h4 class="font-semibold mb-4">Low Water</h4>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <h4 class="font-semibold mb-4">Voltage Fault</h4>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <h4 class="font-semibold mb-4">VSD Vault</h4>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <h4 class="font-semibold mb-4">Trouble Alarm</h4>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <h4 class="font-semibold mb-4">Pump Trip</h4>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden rounded-lg"
                            id="target-megger"
                            role="tabpanel"
                            aria-labelledby="trigger-megger"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Megger</button>
                            <div class="rounded-lg bg-gray-50 p-4">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Tim Teknisi</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Lokasi Pompa</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">No Unit Pompa</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">No Seri Pompa</label>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Tanggal</label>
                                    <input type="text" placeholder="25/10/2024" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Running Hours</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>H</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden rounded-lg"
                            id="target-insulation"
                            role="tabpanel"
                            aria-labelledby="trigger-insulation"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Insulation</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">U1 - PE</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">V1 - PE</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">W1 - PE</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">U2 - PE</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">V2 - PE</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">W2 - PE</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">U1 - V2</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">U1 - W2</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">V1 - U2</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">V1 - W2</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">W1 - U2</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">W1 - V2</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden rounded-lg"
                            id="target-resistance"
                            role="tabpanel"
                            aria-labelledby="trigger-resistance"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Resistensi</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">PE - PE</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">U1 - U2</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">V1 - V2</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">W1 - W2</label>
                                    <div class="flex">
                                        <input type="text" placeholder="Ketikan di sini" id="website-admin" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>M'Ω</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden"
                            id="target-pump-condition"
                            role="tabpanel"
                            aria-labelledby="trigger-pump-condition"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Kondisi Pompa</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <div class="mb-2">
                                        <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Bodi Pompa</label>
                                        <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Bodi Pompa “Tidak Oke”</i>
                                    </div>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <div class="mb-2">
                                        <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Impeller</label>
                                        <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Impeller “Tidak Oke”</i>
                                    </div>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <div class="mb-2">
                                        <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Wearing Ring</label>
                                        <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Wearing Ring “Tidak Oke”</i>
                                    </div>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <div class="mb-2">
                                        <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Kabel</label>
                                        <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Kabel “Tidak Oke”</i>
                                    </div>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <div class="mb-2">
                                        <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Baut Pompa</label>
                                        <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Baut Pompa “Tidak Oke”</i>
                                    </div>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <div class="mb-2">
                                        <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Kondisi Pompa</label>
                                        <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Kondisi Pompa “Tidak Oke”</i>
                                    </div>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="">
                                    <div class="mb-2">
                                        <label for="base-input" class="block text-sm text-gray-900 dark:text-white">Kondisi Pompa</label>
                                        <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Kondisi Pompa “Tidak Oke”</i>
                                    </div>
                                    <input type="text" placeholder="Ketikan di sini" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                        <input id="bordered-checkbox-2" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-checkbox-2" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden rounded-lg"
                            id="target-documentation"
                            role="tabpanel"
                            aria-labelledby="trigger-documentation"
                        >
                            <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Dokumentasi</button>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mengencangkan Baut Panel</label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Membersihkan Panel Dengan Kain</label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Membersihkan Panel Dengan Kuas</label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Membersihkan Panel Dengan Vacuum</label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Panel Setelah Dibersihkan </label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Junction Box Setelah Dibersihkan</label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Ketinggian Air</label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Pump Cleaning </label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mengangkat Pompa</label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Membersihkan Bodi Pompa</label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Memoles Wearing Ring </label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Menganti Oli Pompa</label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mengencangkan Baut-Baut Pompa</label>
                                    
                                </div>
                            </div>
                            <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                <div class="mb-5">
                                    <label for="base-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Membersihkan Impeller Pompa</label>
                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

        @livewireScripts
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const tabsElement = document.getElementById('tabs-example');
        
                const tabElements = [
                    {
                        id: 'pumpData',
                        triggerEl: document.querySelector('#trigger-pump-data'),
                        targetEl: document.querySelector('#target-pump-data'),
                    },
                    {
                        id: 'lvmdp',
                        triggerEl: document.querySelector('#trigger-lvmdp'),
                        targetEl: document.querySelector('#target-lvmdp'),
                    },
                    {
                        id: 'junctionBox',
                        triggerEl: document.querySelector('#trigger-junction-box'),
                        targetEl: document.querySelector('#target-junction-box'),
                    },
                    {
                        id: 'panel',
                        triggerEl: document.querySelector('#trigger-panel'),
                        targetEl: document.querySelector('#target-panel'),
                    },
                    {
                        id: 'functionPanel',
                        triggerEl: document.querySelector('#trigger-panel-function'),
                        targetEl: document.querySelector('#target-panel-function'),
                    },
                    {
                        id: 'elektrikalMekanikal',
                        triggerEl: document.querySelector('#trigger-elektrikal-mekanikal'),
                        targetEl: document.querySelector('#target-elektrikal-mekanikal'),
                    },
                    {
                        id: 'pipeColumnWaterOutput',
                        triggerEl: document.querySelector('#trigger-pipe-column-water-output'),
                        targetEl: document.querySelector('#target-pipe-column-water-output'),
                    },
                    {
                        id: 'testCensor',
                        triggerEl: document.querySelector('#trigger-test-censor'),
                        targetEl: document.querySelector('#target-test-censor'),
                    },
                    {
                        id: 'megger',
                        triggerEl: document.querySelector('#trigger-megger'),
                        targetEl: document.querySelector('#target-megger'),
                    },
                    {
                        id: 'insulation',
                        triggerEl: document.querySelector('#trigger-insulation'),
                        targetEl: document.querySelector('#target-insulation'),
                    },
                    {
                        id: 'resistance',
                        triggerEl: document.querySelector('#trigger-resistance'),
                        targetEl: document.querySelector('#target-resistance'),
                    },
                    {
                        id: 'pumpCondition',
                        triggerEl: document.querySelector('#trigger-pump-condition'),
                        targetEl: document.querySelector('#target-pump-condition'),
                    },
                    {
                        id: 'documentation',
                        triggerEl: document.querySelector('#trigger-documentation'),
                        targetEl: document.querySelector('#target-documentation'),
                    },
                ];
        
                const options = {
                    defaultTabId: 'pumpData',
                    activeClasses: 'text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500',
                    inactiveClasses: 'text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300',
                    // onShow: () => {
                    //     console.log('tab is shown');
                    // },
                };
        
                const tabs = new Tabs(tabsElement, tabElements, options);
                tabs.show('pumpData');

                var buttons = document.querySelectorAll('.button-tab-trigger');

                buttons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        var tabTarget = button.getAttribute('data-tab-target');
                        tabs.show(tabTarget);
                    });
                });
            });
            
        </script>
    </body>
</html>
