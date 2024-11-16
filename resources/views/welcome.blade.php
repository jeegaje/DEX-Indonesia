<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Dex Pump - Bersama Membangun Indonesia</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/x-icon" href="{{ asset('images/dex-logo.png') }}">
        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles

        @php
        use Carbon\Carbon;
        @endphp

    </head>
    <body>
        <div style="background-color: rgb(207, 207, 207);">
            <div style="max-width: 980px; margin: auto">
                <livewire:navbar :pumps="$pumps" :data_technician="$data_technician" />
                <livewire:sidebar :maintenance_type="$maintenance_type" />
                @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
        {{ session('error') }}
    </div>
@endif
                <div class="bg-teal-50 p-7">
                    <div id="tabContentPump">
                        <form method="POST" action="{{ route('maintenance.upload') }}" enctype="multipart/form-data">
                            <div class="hidden rounded-lg" id="target-pump-data" role="tabpanel" aria-labelledby="trigger-pump-data">
                                @csrf
                                <input type="hidden" name="maintenance_token" value="{{ request()->query('token') }}">
                                <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Data Pompa</button>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="technician-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Tim Teknisi</label>
                                        <input type="text" name="pump_data_technician" value="{{ $data_technician->name }}" placeholder="Ketikan di sini" id="technician-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                                    </div>
                                    <div class="mb-5">
                                        <label for="location-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Lokasi Pompa</label>
                                        <input type="text" name="pump_data_location" value="{{ $data_pump->location }}" placeholder="Ketikan di sini" id="location-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                                    </div>
                                    <div class="mb-5">
                                        <label for="serial_number-input" class="block mb-2 text-sm text-gray-900 dark:text-white">No Seri Pompa</label>
                                        <input type="text" name="pump_data_serial_number" value="{{ $data_pump->serial_number }}" placeholder="Ketikan di sini" id="serial_number-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div class="mb-5">
                                        <label for="flow_and_head-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Flow & Head</label>
                                        <input type="text" name="pump_data_flow_and_head" value="{{ $data_pump->flow_and_head }}" placeholder="Ketikan di sini" id="flow_and_head-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div class="mb-5">
                                        <label for="unit-input" class="block mb-2 text-sm text-gray-900 dark:text-white">No Unit Pompa</label>
                                        <input type="text" name="pump_data_unit" value="{{ $data_pump->unit }}" placeholder="Ketikan di sini" id="unit-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div class="mb-5">
                                        <label for="number_of_inspection-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Pemeriksaan</label>
                                        <input type="text" name="pump_data_number_of_inspection" value="{{ $total_of_inspection }}" placeholder="Ketikan di sini" id="number_of_inspection-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div class="mb-5">
                                        <label for="running_hours_total-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Running Hours Total</label>
                                        <div class="flex mb-2">
                                            <input type="number" name="pump_data_running_hours_total" placeholder="Ketikan di sini" id="running_hours_total-input" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>H</p>
                                            </span>
                                        </div>
                                        <input type="file" name="pump_data_running_hours_total_image" class="filepond text-white"/>
                                    </div>
                                    <div class="mb-5">
                                        <label for="running_hours_monthly-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Running Hours Bulanan</label>
                                        <div class="flex mb-2">
                                            <input type="number" name="pump_data_running_hours_monthly" placeholder="Ketikan di sini" id="running_hours_monthly" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>H</p>
                                            </span>
                                        </div>
                                        <input type="file" name="pump_data_running_hours_monthly_image" class="filepond"/>
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
                                        <label for="lvmdp_indicator_light_rst_detail" class="block mb-2 text-sm text-gray-900 dark:text-white">Lampu Indikator R.S.T</label>
                                        <input type="text" name="lvmdp_indicator_light_rst_detail" placeholder="Ketikan di sini" id="lvmdp_indicator_light_rst_detail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="lvmdp_indicator_light_rst_normal" type="radio" value="normal" name="lvmdp_indicator_light_rst" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="lvmdp_indicator_light_rst_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="lvmdp_indicator_light_rst_abnormal" type="radio" value="abnormal" name="lvmdp_indicator_light_rst" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="lvmdp_indicator_light_rst_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="lvmdp_voltage_balance_detail" class="block mb-2 text-sm text-gray-900 dark:text-white">Balance Voltase</label>
                                        <input type="text" name="lvmdp_voltage_balance_detail" placeholder="Ketikan di sini" id="lvmdp_voltage_balance_detail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="lvmdp_voltage_balance_normal" type="radio" value="normal" name="lvmdp_voltage_balance" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="lvmdp_voltage_balance_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="lvmdp_voltage_balance_abnormal" type="radio" value="abnormal" name="lvmdp_voltage_balance" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="lvmdp_voltage_balance_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="lvmdp_frequency" class="block mb-2 text-sm text-gray-900 dark:text-white">Frequency</label>
                                        <div class="flex">
                                            <input type="number" name="lvmdp_frequency" placeholder="Ketikan di sini" id="lvmdp_frequency" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="lvmdp_v1" class="block mb-2 text-sm text-gray-900 dark:text-white">V1</label>
                                        <input type="number" name="lvmdp_v1" placeholder="Ketikan di sini" id="lvmdp_v1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div class="mb-5">
                                        <label for="lvmdp_v2" class="block mb-2 text-sm text-gray-900 dark:text-white">V2</label>
                                        <input type="number" name="lvmdp_v2" placeholder="Ketikan di sini" id="lvmdp_v2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div class="mb-5">
                                        <label for="lvmdp_v3" class="block mb-2 text-sm text-gray-900 dark:text-white">V3</label>
                                        <input type="number" name="lvmdp_v3" placeholder="Ketikan di sini" id="lvmdp_v3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="lvmdp_power" class="block mb-2 text-sm text-gray-900 dark:text-white">Power</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="lvmdp_power_normal" type="radio" value="normal" name="lvmdp_power" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="lvmdp_power_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="lvmdp_power2_abnormal" type="radio" value="abnormal" name="lvmdp_power" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="lvmdp_power2_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
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
                                        <label for="junction_box_cable_bolt_connection" class="block mb-2 text-sm text-gray-900 dark:text-white">Koneksi Kabel/Baut</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="junction_box_cable_bolt_connection_normal" type="radio" value="normal" name="junction_box_cable_bolt_connection" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="junction_box_cable_bolt_connection_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="junction_box_cable_bolt_connection_abnormal" type="radio" value="abnormal" name="junction_box_cable_bolt_connection" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="junction_box_cable_bolt_connection_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="junction_box_cable_condition" class="block mb-2 text-sm text-gray-900 dark:text-white">Koneksi Kabel</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="junction_box_cable_condition_normal" type="radio" value="normal" name="junction_box_cable_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="junction_box_cable_condition_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="junction_box_cable_condition_abnormal" type="radio" value="abnormal" name="junction_box_cable_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="junction_box_cable_condition_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="junction_box_connection_neatness" class="block mb-2 text-sm text-gray-900 dark:text-white">Kerapian Koneksi</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="junction_box_connection_neatness_normal" type="radio" value="normal" name="junction_box_connection_neatness" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="junction_box_connection_neatness_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="junction_box_connection_neatness_abnormal" type="radio" value="abnormal" name="junction_box_connection_neatness" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="junction_box_connection_neatness_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="junction_box_humidity_inside_box" class="block mb-2 text-sm text-gray-900 dark:text-white">Kelembapan Dalam Box</label>
                                        <input type="number" placeholder="Ketikan di sini" name="junction_box_humidity_inside_box" id="junction_box_humidity_inside_box" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="junction_box_temperature_inside_box" class="block mb-2 text-sm text-gray-900 dark:text-white">Suhu Dalam Box</label>
                                        <input type="number" placeholder="Ketikan di sini" name="junction_box_temperature_inside_box" id="junction_box_temperature_inside_box" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                        <label for="panel_cable_bolt_connection" class="block mb-2 text-sm text-gray-900 dark:text-white">Koneksi Kabel/Baut</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_cable_bolt_connection_normal" type="radio" value="normal" name="panel_cable_bolt_connection" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_cable_bolt_connection_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="panel_cable_bolt_connection_abnormal" type="radio" value="abnormal" name="panel_cable_bolt_connection" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_cable_bolt_connection_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_cable_condition" class="block mb-2 text-sm text-gray-900 dark:text-white">Koneksi Kabel</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_cable_condition_normal" type="radio" value="normal" name="panel_cable_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_cable_condition_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="panel_cable_condition_abnormal" type="radio" value="abnormal" name="panel_cable_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_cable_condition_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_connection_neatness" class="block mb-2 text-sm text-gray-900 dark:text-white">Kerapian Koneksi</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_connection_neatness_normal" type="radio" value="normal" name="panel_connection_neatness" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_connection_neatness_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="panel_connection_neatness_abnormal" type="radio" value="abnormal" name="panel_connection_neatness" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_connection_neatness_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="panel_humidity_inside_panel" class="block mb-2 text-sm text-gray-900 dark:text-white">Kelembapan Dalam Box</label>
                                        <input type="number" placeholder="Ketikan di sini" name="panel_humidity_inside_panel" id="panel_humidity_inside_box" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="panel_temperature_inside_panel" class="block mb-2 text-sm text-gray-900 dark:text-white">Suhu Dalam Box</label>
                                        <input type="number" placeholder="Ketikan di sini" name="panel_temperature_inside_panel" id="panel_temperature_inside_box" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                        <label for="panel_function_rst_indicator" class="block mb-2 text-sm text-gray-900 dark:text-white">Indikator R.S.T</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_rst_indicator_functional" type="radio" value="functional" name="panel_function_rst_indicator" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_rst_indicator_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_rst_indicator_not_functional" type="radio" value="not_functional" name="panel_function_rst_indicator" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_rst_indicator_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_pump_on_indicator" class="block mb-2 text-sm text-gray-900 dark:text-white">Indikator Pump ON</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_pump_on_indicator_functional" type="radio" value="functional" name="panel_function_pump_on_indicator" class="w-4 h-4 text-blue-600 bg-gra_functional00 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_pump_on_indicator_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_pump_on_indicator_not_functional" type="radio" value="not_functional" name="panel_function_pump_on_indicator" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_pump_on_indicator_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_cable_bolt_connection" class="block mb-2 text-sm text-gray-900 dark:text-white">Koneksi Kabel/Baut</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_cable_bolt_connection_functional" type="radio" value="functional" name="panel_function_cable_bolt_connection" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_cable_bolt_connection_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_cable_bolt_connection_not_functional" type="radio" value="not_functional" name="panel_function_cable_bolt_connection" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_cable_bolt_connection_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_vsd_standby_indicator" class="block mb-2 text-sm text-gray-900 dark:text-white">Indikator VSD Standby</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_vsd_standby_indicator_functional" type="radio" value="functional" name="panel_function_vsd_standby_indicator" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_vsd_standby_indicator_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_vsd_standby_indicator_not_functional" type="radio" value="not_functional" name="panel_function_vsd_standby_indicator" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_vsd_standby_indicator_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_drive_monitor" class="block mb-2 text-sm text-gray-900 dark:text-white">Monitor Drive</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_drive_monitor_functional" type="radio" value="functional" name="panel_function_drive_monitor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_drive_monitor_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_drive_monitor_not_functional" type="radio" value="not_functional" name="panel_function_drive_monitor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_drive_monitor_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_sensor_monitor" class="block mb-2 text-sm text-gray-900 dark:text-white">Monitor Sensor</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_sensor_monitor_functional" type="radio" value="functional" name="panel_function_sensor_monitor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_sensor_monitor_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_sensor_monitor_not_functional" type="radio" value="not_functional" name="panel_function_sensor_monitor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_sensor_monitor_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_power_meter_monitor" class="block mb-2 text-sm text-gray-900 dark:text-white">Monitor Power Meter</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_power_meter_monitor_functional" type="radio" value="functional" name="panel_function_power_meter_monitor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_power_meter_monitor_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_power_meter_monitor_not_functional" type="radio" value="not_functional" name="panel_function_power_meter_monitor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_power_meter_monitor_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_moa_selector" class="block mb-2 text-sm text-gray-900 dark:text-white">Selektor MOA</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_moa_selector_functional" type="radio" value="functional" name="panel_function_moa_selector" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_moa_selector_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_moa_selector_not_functional" type="radio" value="not_functional" name="panel_function_moa_selector" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_moa_selector_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_start_button" class="block mb-2 text-sm text-gray-900 dark:text-white">Tombol Start</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_start_button_functional" type="radio" value="functional" name="panel_function_start_button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_start_button_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_start_button_not_functional" type="radio" value="not_functional" name="panel_function_start_button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_start_button_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_stop_button" class="block mb-2 text-sm text-gray-900 dark:text-white">Tombol Stop</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_stop_button_functional" type="radio" value="functional" name="panel_function_stop_button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_stop_button_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_stop_button_not_functional" type="radio" value="not_functional" name="panel_function_stop_button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_stop_button_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_reset_button" class="block mb-2 text-sm text-gray-900 dark:text-white">Tombol Reset</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_reset_button_functional" type="radio" value="functional" name="panel_function_reset_button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_reset_button_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_reset_button_not_functional" type="radio" value="not_functional" name="panel_function_reset_button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_reset_button_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_emergency_button" class="block mb-2 text-sm text-gray-900 dark:text-white">Tombol Emergency</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_emergency_button_functional" type="radio" value="functional" name="panel_function_emergency_button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_emergency_button_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_emergency_button_not_functional" type="radio" value="not_functional" name="panel_function_emergency_button" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_emergency_button_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="panel_function_exhaust_fan" class="block mb-2 text-sm text-gray-900 dark:text-white">Kipas Exhaust</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="panel_function_exhaust_fan_functional" type="radio" value="functional" name="panel_function_exhaust_fan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_exhaust_fan_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Fungsi</label>
                                            <input id="panel_function_exhaust_fan_not_functional" type="radio" value="not_functional" name="panel_function_exhaust_fan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="panel_function_exhaust_fan_not_functional" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Fungsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="panel">kembali</button>
                                    <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="elektrikalMekanikal">Lanjut</button>
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
                                        <label for="elektrikal_mekanikal_40_hz_kw" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_kw" name="elektrikal_mekanikal_40_hz_kw" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_kw_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_kw" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_kw" name="elektrikal_mekanikal_45_hz_kw" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_kw_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_kw" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_kw" name="elektrikal_mekanikal_50_hz_kw" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_kw_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Amper</h5>
                                        <p class="text-gray-400">Rujukan : <517</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_amper" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_amper" name="elektrikal_mekanikal_40_hz_amper" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_amper_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_amper" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_amper" name="elektrikal_mekanikal_45_hz_amper" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_amper_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_amper" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_amper" name="elektrikal_mekanikal_50_hz_amper" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_amper_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">RPM</h5>
                                        <p class="text-gray-400">Rujukan : <590</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_rpm" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_rpm" name="elektrikal_mekanikal_40_hz_rpm" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_rpm_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_rpm" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_rpm" name="elektrikal_mekanikal_45_hz_rpm" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_rpm_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_rpm" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_rpm" name="elektrikal_mekanikal_50_hz_rpm" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_rpm_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Torsi</h5>
                                        <p class="text-gray-400">Rujukan : <110%</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_torsi" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_torsi" name="elektrikal_mekanikal_40_hz_torsi" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_torsi_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_torsi" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_torsi" name="elektrikal_mekanikal_45_hz_torsi" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_torsi_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_torsi" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_torsi" name="elektrikal_mekanikal_50_hz_torsi" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_torsi_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Suhu Winding</h5>
                                        <p class="text-gray-400">Rujukan : <90°C</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_winding_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_winding_temperature" name="elektrikal_mekanikal_40_hz_winding_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_winding_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_winding_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_winding_temperature" name="elektrikal_mekanikal_45_hz_winding_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_winding_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_winding_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_winding_temperature" name="elektrikal_mekanikal_50_hz_winding_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_winding_temperature_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Pump Humidity</h5>
                                        <p class="text-gray-400">Rujukan : <90°C</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_pump_humidity" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_pump_humidity" name="elektrikal_mekanikal_40_hz_pump_humidity" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_pump_humidity_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_pump_humidity" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_pump_humidity" name="elektrikal_mekanikal_45_hz_pump_humidity" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_pump_humidity_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_pump_humidity" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_pump_humidity" name="elektrikal_mekanikal_50_hz_pump_humidity" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_pump_humidity_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Suhu Bearing</h5>
                                        <p class="text-gray-400">Rujukan : <90°C</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_bearing_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_bearing_temperature" name="elektrikal_mekanikal_40_hz_bearing_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_bearing_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_bearing_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_bearing_temperature" name="elektrikal_mekanikal_45_hz_bearing_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_bearing_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_bearing_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_bearing_temperature" name="elektrikal_mekanikal_50_hz_bearing_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_bearing_temperature_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Suhu Kabel 1</h5>
                                        <p class="text-gray-400">Rujukan : <60°C</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_cable_1_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_cable_1_temperature" name="elektrikal_mekanikal_40_hz_cable_1_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_cable_1_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_cable_1_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_cable_1_temperature" name="elektrikal_mekanikal_45_hz_cable_1_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_cable_1_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_cable_1_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_cable_1_temperature" name="elektrikal_mekanikal_50_hz_cable_1_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_cable_1_temperature_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Suhu Kabel 2</h5>
                                        <p class="text-gray-400">Rujukan : <60°C</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_cable_2_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_cable_2_temperature" name="elektrikal_mekanikal_40_hz_cable_2_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_cable_2_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_cable_2_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_cable_2_temperature" name="elektrikal_mekanikal_45_hz_cable_2_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_cable_2_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_cable_2_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_cable_2_temperature" name="elektrikal_mekanikal_50_hz_cable_2_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_cable_2_temperature_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Suhu Kabel 3</h5>
                                        <p class="text-gray-400">Rujukan : <60°C</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_cable_3_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_cable_3_temperature" name="elektrikal_mekanikal_40_hz_cable_3_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_cable_3_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_cable_3_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_cable_3_temperature" name="elektrikal_mekanikal_45_hz_cable_3_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_cable_3_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_cable_3_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_cable_3_temperature" name="elektrikal_mekanikal_50_hz_cable_3_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_cable_3_temperature_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Vibrasi</h5>
                                        <p class="text-gray-400">Rujukan : <15m/s²</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_vibration" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_vibration" name="elektrikal_mekanikal_40_hz_vibration" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_vibration_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_vibration" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_vibration" name="elektrikal_mekanikal_45_hz_vibration" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_vibration_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_vibration" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_vibration" name="elektrikal_mekanikal_50_hz_vibration" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_vibration_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Suara (dB)</h5>
                                        <p class="text-gray-400">Rujukan : <100dB</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_sound" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_sound" name="elektrikal_mekanikal_40_hz_sound" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_sound_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_sound" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_sound" name="elektrikal_mekanikal_45_hz_sound" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_sound_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_sound" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_sound" name="elektrikal_mekanikal_50_hz_sound" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_sound_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-4">
                                        <h5 class="text-md font-semibold"">Suhu Terminal</h5>
                                        <p class="text-gray-400">Rujukan : <60°C</p>
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_40_hz_terminal_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">40Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_40_hz_terminal_temperature" name="elektrikal_mekanikal_40_hz_terminal_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_40_hz_terminal_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_45_hz_terminal_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">45Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_45_hz_terminal_temperature" name="elektrikal_mekanikal_45_hz_terminal_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_45_hz_terminal_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="mb-5">
                                        <label for="elektrikal_mekanikal_50_hz_terminal_temperature" class="block mb-2 text-sm text-gray-900 dark:text-white">50Hz</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="elektrikal_mekanikal_50_hz_terminal_temperature" name="elektrikal_mekanikal_50_hz_terminal_temperature" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>Hz</p>
                                            </span>
                                        </div>
                                        <input type="file" name="elektrikal_mekanikal_50_hz_terminal_temperature_image_path" class="filepond">
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="functionPanel">kembali</button>
                                        <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="pipeColumnWaterOutput">Lanjut</button>
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
                                    <label for="pipe_column_water_output_water_ph_value_condition" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Nilai pH Air</label>
                                    <div class="flex mb-2">
                                        <input type="number" placeholder="Ketikan di sini" id="pipe_column_water_output_water_ph_value_condition" name="pipe_column_water_output_water_ph_value_condition" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                            <p>Hz</p>
                                        </span>
                                    </div>
                                    <input type="file" name="pipe_column_water_output_water_ph_value_condition_image_path" class="filepond">
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="pipe_column_water_output_column_pipe_condition" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Pipa kolom</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pipe_column_water_output_column_pipe_condition_normal" type="radio" value="normal" name="pipe_column_water_output_column_pipe_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pipe_column_water_output_column_pipe_condition_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="pipe_column_water_output_column_pipe_condition_abnormal" type="radio" value="abnormal" name="pipe_column_water_output_column_pipe_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pipe_column_water_output_column_pipe_condition_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="pipe_column_water_output_output_pipe_condition" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Pipa Output</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pipe_column_water_output_output_pipe_condition_normal" type="radio" value="normal" name="pipe_column_water_output_output_pipe_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pipe_column_water_output_output_pipe_condition_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="pipe_column_water_output_output_pipe_condition_abnormal" type="radio" value="abnormal" name="pipe_column_water_output_output_pipe_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pipe_column_water_output_output_pipe_condition_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="pipe_column_water_output_valve_condition" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Valve (Ops)</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pipe_column_water_output_valve_condition_norma;" type="radio" value="normal" name="pipe_column_water_output_valve_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pipe_column_water_output_valve_condition_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="pipe_column_water_output_valve_condition_abnormal" type="radio" value="abnormal" name="pipe_column_water_output_valve_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pipe_column_water_output_valve_condition_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="pipe_column_water_output_flap_condition" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Flap (Ops)</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pipe_column_water_output_flap_condition_normal" type="radio" value="normal" name="pipe_column_water_output_flap_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pipe_column_water_output_flap_condition_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="pipe_column_water_output_flap_condition_abnormal" type="radio" value="abnormal" name="pipe_column_water_output_flap_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pipe_column_water_output_flap_condition_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <label for="pipe_column_water_output_water_output_condition" class="block mb-2 text-sm text-gray-900 dark:text-white">Volume Output Air</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pipe_column_water_output_water_output_condition_normal" type="radio" value="normal" name="pipe_column_water_output_water_output_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pipe_column_water_output_water_output_condition_normal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="pipe_column_water_output_water_output_condition_abnormal" type="radio" value="abnormal" name="pipe_column_water_output_water_output_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pipe_column_water_output_water_output_condition_abnormal" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="elektrikalMekanikal">kembali</button>
                                    <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="testCensor">Lanjut</button>
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
                                        <label for="test_sensor_pump_fault_temperature_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_pump_fault_temperature_sensor_normal" type="radio" value="normal" name="test_sensor_pump_fault_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_fault_temperature_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_pump_fault_temperature_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_pump_fault_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_fault_temperature_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_pump_fault_wlc_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_pump_fault_wlc_sensor_normal" type="radio" value="normal" name="test_sensor_pump_fault_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_fault_wlc_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_pump_fault_wlc_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_pump_fault_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_fault_wlc_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_pump_fault_voltage_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_pump_fault_voltage_sensor_normal" type="radio" value="normal" name="test_sensor_pump_fault_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_fault_voltage_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_pump_fault_voltage_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_pump_fault_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_fault_voltage_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_pump_fault_vsd_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_pump_fault_vsd_sensor_normal" type="radio" value="normal" name="test_sensor_pump_fault_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_fault_vsd_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_pump_fault_vsd_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_pump_fault_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_fault_vsd_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <h4 class="font-semibold mb-4">Low Water</h4>
                                    <div class="mb-4">
                                        <label for="test_sensor_low_water_temperature_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_low_water_temperature_sensor_normal" type="radio" value="normal" name="test_sensor_low_water_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_low_water_temperature_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_low_water_temperature_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_low_water_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_low_water_temperature_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_low_water_wlc_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_low_water_wlc_sensor_normal" type="radio" value="normal" name="test_sensor_low_water_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_low_water_wlc_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_low_water_wlc_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_low_water_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_low_water_wlc_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_low_water_voltage_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_low_water_voltage_sensor_normal" type="radio" value="normal" name="test_sensor_low_water_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_low_water_voltage_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_low_water_voltage_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_low_water_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_low_water_voltage_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_low_water_vsd_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_low_water_vsd_sensor_normal" type="radio" value="normal" name="test_sensor_low_water_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_low_water_vsd_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_low_water_vsd_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_low_water_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_low_water_vsd_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <h4 class="font-semibold mb-4">Voltage Fault</h4>
                                    <div class="mb-4">
                                        <label for="test_sensor_voltage_fault_temperature_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_voltage_fault_temperature_sensor_normal" type="radio" value="normal" name="test_sensor_voltage_fault_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_voltage_fault_temperature_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_voltage_fault_temperature_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_voltage_fault_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_voltage_fault_temperature_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_voltage_fault_wlc_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_voltage_fault_wlc_sensor_normal" type="radio" value="normal" name="test_sensor_voltage_fault_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_voltage_fault_wlc_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_voltage_fault_wlc_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_voltage_fault_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_voltage_fault_wlc_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_voltage_fault_voltage_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_voltage_fault_voltage_sensor_normal" type="radio" value="normal" name="test_sensor_voltage_fault_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_voltage_fault_voltage_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_voltage_fault_voltage_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_voltage_fault_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_voltage_fault_voltage_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_voltage_fault_vsd_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_voltage_fault_vsd_sensor_normal" type="radio" value="normal" name="test_sensor_voltage_fault_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_voltage_fault_vsd_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_voltage_fault_vsd_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_voltage_fault_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_voltage_fault_vsd_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <h4 class="font-semibold mb-4">VSD Vault</h4>
                                    <div class="mb-4">
                                        <label for="test_sensor_vsd_vault_temperature_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_vsd_vault_temperature_sensor_normal" type="radio" value="normal" name="test_sensor_vsd_vault_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_vsd_vault_temperature_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_vsd_vault_temperature_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_vsd_vault_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_vsd_vault_temperature_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_vsd_vault_wlc_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_vsd_vault_wlc_sensor_normal" type="radio" value="normal" name="test_sensor_vsd_vault_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_vsd_vault_wlc_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_vsd_vault_wlc_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_vsd_vault_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_vsd_vault_wlc_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_vsd_vault_voltage_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_vsd_vault_voltage_sensor_normal" type="radio" value="normal" name="test_sensor_vsd_vault_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_vsd_vault_voltage_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_vsd_vault_voltage_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_vsd_vault_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_vsd_vault_voltage_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_vsd_vault_vsd_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_vsd_vault_vsd_sensor_normal" type="radio" value="normal" name="test_sensor_vsd_vault_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_vsd_vault_vsd_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_vsd_vault_vsd_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_vsd_vault_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_vsd_vault_vsd_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <h4 class="font-semibold mb-4">Trouble Alarm</h4>
                                    <div class="mb-4">
                                        <label for="test_sensor_trouble_alarm_temperature_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_trouble_alarm_temperature_sensor_normal" type="radio" value="normal" name="test_sensor_trouble_alarm_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_trouble_alarm_temperature_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_trouble_alarm_temperature_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_trouble_alarm_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_trouble_alarm_temperature_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_trouble_alarm_wlc_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_trouble_alarm_wlc_sensor_normal" type="radio" value="normal" name="test_sensor_trouble_alarm_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_trouble_alarm_wlc_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_trouble_alarm_wlc_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_trouble_alarm_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_trouble_alarm_wlc_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_trouble_alarm_voltage_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_trouble_alarm_voltage_sensor_normal" type="radio" value="normal" name="test_sensor_trouble_alarm_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_trouble_alarm_voltage_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_trouble_alarm_voltage_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_trouble_alarm_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_trouble_alarm_voltage_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_trouble_alarm_vsd_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_trouble_alarm_vsd_sensor_normal" type="radio" value="normal" name="test_sensor_trouble_alarm_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_trouble_alarm_vsd_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_trouble_alarm_vsd_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_trouble_alarm_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_trouble_alarm_vsd_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <h4 class="font-semibold mb-4">Pump Trip</h4>
                                    <div class="mb-4">
                                        <label for="test_sensor_pump_trip_temperature_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Suhu</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_pump_trip_temperature_sensor_normal" type="radio" value="normal" name="test_sensor_pump_trip_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_trip_temperature_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_pump_trip_temperature_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_pump_trip_temperature_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_trip_temperature_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_pump_trip_wlc_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor WLC</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_pump_trip_wlc_sensor_normal" type="radio" value="normal" name="test_sensor_pump_trip_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_trip_wlc_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_pump_trip_wlc_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_pump_trip_wlc_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_trip_wlc_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_pump_trip_voltage_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor Voltase</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_pump_trip_voltage_sensor_normal" type="radio" value="normal" name="test_sensor_pump_trip_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_trip_voltage_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_pump_trip_voltage_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_pump_trip_voltage_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_trip_voltage_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="test_sensor_pump_trip_vsd_sensor" class="block text-sm text-gray-900 dark:text-white">Sensor VSD</label>
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="test_sensor_pump_trip_vsd_sensor_normal" type="radio" value="normal" name="test_sensor_pump_trip_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_trip_vsd_sensor_normal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Normal</label>
                                            <input id="test_sensor_pump_trip_vsd_sensor_abnormal" type="radio" value="abnormal" name="test_sensor_pump_trip_vsd_sensor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="test_sensor_pump_trip_vsd_sensor_abnormal" class="w-full py-2 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Normal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="pipeColumnWaterOutput">kembali</button>
                                    @if ($maintenance_type == 'full')
                                    <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="megger">Lanjut</button>
                                    @else
                                    <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="documentation">Lanjut</button>
                                    @endif
                                </div>
                            </div>
                            @if ($maintenance_type == 'full')
                            <div
                                class="hidden rounded-lg"
                                id="target-megger"
                                role="tabpanel"
                                aria-labelledby="trigger-megger"
                            >
                                <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Megger</button>
                                <div class="rounded-lg bg-gray-50 p-4">
                                    <div class="mb-5">
                                        <label for="megger_technician" class="block mb-2 text-sm text-gray-900 dark:text-white">Tim Teknisi</label>
                                        <input type="text" value="{{ $data_technician->name }}" placeholder="Ketikan di sini" id="megger_technician" name="megger_technician" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                                    </div>
                                    <div class="mb-5">
                                        <label for="megger_location" class="block mb-2 text-sm text-gray-900 dark:text-white">Lokasi Pompa</label>
                                        <input type="text" value="{{ $data_pump->location }}" placeholder="Ketikan di sini" id="megger_location" name="megger_location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                                    </div>
                                    <div class="mb-5">
                                        <label for="megger_serial_number" class="block mb-2 text-sm text-gray-900 dark:text-white">No Unit Pompa</label>
                                        <input type="text" value="{{ $data_pump->serial_number }}" placeholder="Ketikan di sini" id="megger_serial_number" name="megger_serial_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                                    </div>
                                    <div class="mb-5">
                                        <label for="megger_unit" class="block mb-2 text-sm text-gray-900 dark:text-white">No Seri Pompa</label>
                                        <input type="text" value="{{ $data_pump->unit }}" placeholder="Ketikan di sini" id="megger_unit" name="megger_unit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                                    </div>
                                    <div class="mb-5">
                                        <label for="megger_date" class="block mb-2 text-sm text-gray-900 dark:text-white">Tanggal</label>
                                        <input type="text" value="{{ Carbon::now()->format('d/m/Y') }}" placeholder="25/10/2024" id="megger_date" name="megger_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                                    </div>
                                    <div class="mb-5">
                                        <label for="megger_running_hours" class="block mb-2 text-sm text-gray-900 dark:text-white">Running Hours</label>
                                        <div class="flex">
                                            <input type="text" placeholder="Ketikan di sini" id="megger_running_hours" name="megger_running_hours" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>H</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="testCensor">kembali</button>
                                    <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="insulation">Lanjut</button>
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
                                        <label for="insulation_u1_pe" class="block mb-2 text-sm text-gray-900 dark:text-white">U1 - PE</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_u1_pe" name="insulation_u1_pe" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                        <input type="file" name="insulation_u1_pe_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_v1_pe" class="block mb-2 text-sm text-gray-900 dark:text-white">V1 - PE</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_v1_pe" name="insulation_v1_pe" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                        <input type="file" name="insulation_v1_pe_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_w1_pe" class="block mb-2 text-sm text-gray-900 dark:text-white">W1 - PE</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_w1_pe" name="insulation_w1_pe" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                        <input type="file" name="insulation_w1_pe_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_u2_pe" class="block mb-2 text-sm text-gray-900 dark:text-white">U2 - PE</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_u2_pe" name="insulation_u2_pe" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                        <input type="file" name="insulation_u2_pe_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_v2_pe" class="block mb-2 text-sm text-gray-900 dark:text-white">V2 - PE</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_v2_pe" name="insulation_v2_pe" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                        <input type="file" name="insulation_v2_pe_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_w2_pe" class="block mb-2 text-sm text-gray-900 dark:text-white">W2 - PE</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_w2_pe" name="insulation_w2_pe" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                        <input type="file" name="insulation_w2_pe_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_u1_v2" class="block mb-2 text-sm text-gray-900 dark:text-white">U1 - V2</label>
                                        <div class="flex">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_u1_v2" name="insulation_u1_v2" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_u1_w2" class="block mb-2 text-sm text-gray-900 dark:text-white">U1 - W2</label>
                                        <div class="flex">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_u1_w2" name="insulation_u1_w2" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_v1_u2" class="block mb-2 text-sm text-gray-900 dark:text-white">V1 - U2</label>
                                        <div class="flex">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_v1_u2" name="insulation_v1_u2" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_v1_w2" class="block mb-2 text-sm text-gray-900 dark:text-white">V1 - W2</label>
                                        <div class="flex">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_v1_w2" name="insulation_v1_w2" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_w1_u2" class="block mb-2 text-sm text-gray-900 dark:text-white">W1 - U2</label>
                                        <div class="flex">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_w1_u2" name="insulation_w1_u2" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="insulation_w1_v2" class="block mb-2 text-sm text-gray-900 dark:text-white">W1 - V2</label>
                                        <div class="flex">
                                            <input type="number" placeholder="Ketikan di sini" id="insulation_w1_v2" name="insulation_w1_v2" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="megger">kembali</button>
                                    <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="resistance">Lanjut</button>
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
                                        <label for="resistance_pe_pe" class="block mb-2 text-sm text-gray-900 dark:text-white">PE - PE</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="resistance_pe_pe" name="resistance_pe_pe" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                        <input type="file" name="resistance_pe_pe_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="resistance_u1_u2" class="block mb-2 text-sm text-gray-900 dark:text-white">U1 - U2</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="resistance_u1_u2" name="resistance_u1_u2" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                        <input type="file" name="resistance_u1_u2_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="resistance_v1_v2" class="block mb-2 text-sm text-gray-900 dark:text-white">V1 - V2</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="resistance_v1_v2" name="resistance_v1_v2" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                        <input type="file" name="resistance_v1_v2_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="resistance_w1_w2" class="block mb-2 text-sm text-gray-900 dark:text-white">W1 - W2</label>
                                        <div class="flex mb-2">
                                            <input type="number" placeholder="Ketikan di sini" id="resistance_w1_w2" name="resistance_w1_w2" class="rounded-none rounded-s-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="">
                                            <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-e-md">
                                                <p>M'Ω</p>
                                            </span>
                                        </div>
                                        <input type="file" name="resistance_w1_w2_image_path" class="filepond">
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="insulation">kembali</button>
                                    <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="pumpCondition">Lanjut</button>
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
                                            <label for="pump_condition_pump_body_note" class="block text-sm text-gray-900 dark:text-white">Bodi Pompa</label>
                                            <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Bodi Pompa “Tidak Oke”</i>
                                        </div>
                                        <input type="text" placeholder="Ketikan di sini" id="pump_condition_pump_body_note" name="pump_condition_pump_body_note" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pump_condition_pump_body_ok" type="radio" value="ok" name="pump_condition_pump_body" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_pump_body_ok" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                            <input id="pump_condition_pump_body_bad" type="radio" value="bad" name="pump_condition_pump_body" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_pump_body_bad" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <div class="mb-2">
                                            <label for="pump_condition_impeller_note" class="block text-sm text-gray-900 dark:text-white">Impeller</label>
                                            <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Impeller “Tidak Oke”</i>
                                        </div>
                                        <input type="text" placeholder="Ketikan di sini" id="pump_condition_impeller_note" name="pump_condition_impeller_note" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pump_condition_impeller_ok" type="radio" value="ok" name="pump_condition_impeller" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_impeller_ok" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                            <input id="pump_condition_impeller_bad" type="radio" value="bad" name="pump_condition_impeller" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_impeller_bad" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <div class="mb-2">
                                            <label for="pump_condition_wearing_ring_note" class="block text-sm text-gray-900 dark:text-white">Wearing Ring</label>
                                            <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Wearing Ring “Tidak Oke”</i>
                                        </div>
                                        <input type="text" placeholder="Ketikan di sini" id="pump_condition_wearing_ring_note" name="pump_condition_wearing_ring_note" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pump_condition_wearing_ring_ok" type="radio" value="ok" name="pump_condition_wearing_ring" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_wearing_ring_ok" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                            <input id="pump_condition_wearing_ring_bad" type="radio" value="bad" name="pump_condition_wearing_ring" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_wearing_ring_bad" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <div class="mb-2">
                                            <label for="pump_condition_cable_note" class="block text-sm text-gray-900 dark:text-white">Kabel</label>
                                            <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Kabel “Tidak Oke”</i>
                                        </div>
                                        <input type="text" placeholder="Ketikan di sini" id="pump_condition_cable_note" name="pump_condition_cable_note" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pump_condition_cable_ok" type="radio" value="ok" name="pump_condition_cable" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_cable_ok" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                            <input id="pump_condition_cable_bad" type="radio" value="bad" name="pump_condition_cable" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_cable_bad" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <div class="mb-2">
                                            <label for="pump_condition_pump_bolt_note" class="block text-sm text-gray-900 dark:text-white">Baut Pompa</label>
                                            <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Baut Pompa “Tidak Oke”</i>
                                        </div>
                                        <input type="text" placeholder="Ketikan di sini" id="pump_condition_pump_bolt_note" name="pump_condition_pump_bolt_note" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pump_condition_pump_bolt_ok" type="radio" value="ok" name="pump_condition_pump_bolt" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_pump_bolt_ok" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                            <input id="pump_condition_pump_bolt_bad" type="radio" value="bad" name="pump_condition_pump_bolt" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_pump_bolt_bad" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <div class="mb-2">
                                            <label for="pump_condition_pump_condition_note" class="block text-sm text-gray-900 dark:text-white">Kondisi Pompa</label>
                                            <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Kondisi Pompa “Tidak Oke”</i>
                                        </div>
                                        <input type="text" placeholder="Ketikan di sini" id="pump_condition_pump_condition_note" name="pump_condition_pump_condition_note" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pump_condition_pump_condition_ok" type="radio" value="ok" name="pump_condition_pump_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_pump_condition_ok" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                            <input id="pump_condition_pump_condition_bad" type="radio" value="bad" name="pump_condition_pump_condition" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_pump_condition_bad" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="">
                                        <div class="mb-2">
                                            <label for="pump_condition_column_pipe_bolt_note" class="block text-sm text-gray-900 dark:text-white">Baut Column Pipe</label>
                                            <i class="text-red-600 text-xs">*Tuliskan Keterangan Hanya Apabila Kondisi Baut Column Pipe “Tidak Oke”</i>
                                        </div>
                                        <input type="text" placeholder="Ketikan di sini" id="pump_condition_column_pipe_bolt_note" name="pump_condition_column_pipe_bolt_note" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <div class="flex items-center ps-4 rounded dark:border-gray-700">
                                            <input id="pump_condition_column_pipe_bolt_ok" type="radio" value="ok" name="pump_condition_column_pipe_bolt" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_column_pipe_bolt_ok" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">OK</label>
                                            <input id="pump_condition_column_pipe_bolt_bad" type="radio" value="bad" name="pump_condition_column_pipe_bolt" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="pump_condition_column_pipe_bolt_bad" class="w-full py-4 ms-2 text-sm text-gray-900 dark:text-gray-300">Tidak Oke</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="resistance">kembali</button>
                                    <button type="button" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="documentation">Lanjut</button>
                                </div>
                            </div>
                            @endif
                            <div
                                class="hidden rounded-lg"
                                id="target-documentation"
                                role="tabpanel"
                                aria-labelledby="trigger-documentation"
                            >
                                <button type="button" class="text-blue-500 bg-white border border-gray-300 pointer-events-none rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Dokumentasi</button>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_tightening_panel_bolts" class="block mb-2 text-sm text-gray-900 dark:text-white">Mengencangkan Baut Panel</label>
                                        <input type="file" name="documentation_tightening_panel_bolts" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_cleaning_panel_with_cloth" class="block mb-2 text-sm text-gray-900 dark:text-white">Membersihkan Panel Dengan Kain</label>
                                        <input type="file" name="documentation_cleaning_panel_with_cloth" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_cleaning_panel_with_brush" class="block mb-2 text-sm text-gray-900 dark:text-white">Membersihkan Panel Dengan Kuas</label>
                                        <input type="file" name="documentation_cleaning_panel_with_brush" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_cleaning_panel_with_vacuum" class="block mb-2 text-sm text-gray-900 dark:text-white">Membersihkan Panel Dengan Vacuum</label>
                                        <input type="file" name="documentation_cleaning_panel_with_vacuum" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_panel_condition_after_cleaning" class="block mb-2 text-sm text-gray-900 dark:text-white">Kondisi Panel Setelah Dibersihkan </label>
                                        <input type="file" name="documentation_panel_condition_after_cleaning" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_junction_box_after_cleaning" class="block mb-2 text-sm text-gray-900 dark:text-white">Junction Box Setelah Dibersihkan</label>
                                        <input type="file" name="documentation_junction_box_after_cleaning" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_water_level" class="block mb-2 text-sm text-gray-900 dark:text-white">Ketinggian Air</label>
                                        <input type="file" name="documentation_water_level" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_pump_cleaning" class="block mb-2 text-sm text-gray-900 dark:text-white">Pump Cleaning </label>
                                        <input type="file" name="documentation_pump_cleaning" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_lifting_pump" class="block mb-2 text-sm text-gray-900 dark:text-white">Mengangkat Pompa</label>
                                        <input type="file" name="documentation_lifting_pump" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_cleaning_pump_body" class="block mb-2 text-sm text-gray-900 dark:text-white">Membersihkan Bodi Pompa</label>
                                        <input type="file" name="documentation_cleaning_pump_body" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_polishing_wearing_ring" class="block mb-2 text-sm text-gray-900 dark:text-white">Memoles Wearing Ring </label>
                                        <input type="file" name="documentation_polishing_wearing_ring" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_replacing_pump_oil" class="block mb-2 text-sm text-gray-900 dark:text-white">Menganti Oli Pompa</label>
                                        <input type="file" name="documentation_replacing_pump_oil" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_tightening_pump_bolts" class="block mb-2 text-sm text-gray-900 dark:text-white">Mengencangkan Baut-Baut Pompa</label>
                                        <input type="file" name="documentation_tightening_pump_bolts" class="filepond">
                                    </div>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 mb-5">
                                    <div class="mb-5">
                                        <label for="documentation_cleaning_pump_impeller" class="block mb-2 text-sm text-gray-900 dark:text-white">Membersihkan Impeller Pompa</label>
                                        <input type="file" name="documentation_cleaning_pump_impeller" class="filepond">
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    @if ($maintenance_type == 'full')
                                    <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="pumpCondition">kembali</button>
                                    @else
                                    <button type="button" class="text-white font-semibold bg-red-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2 button-tab-trigger" data-tab-target="testCensor">kembali</button>
                                    @endif
                                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 mb-2" type="button">
                                        Submit
                                    </button>
                                </div>
                            </div>
                            <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Simpan Data Maintenace
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5">
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <p class="mb-4 text-center">Pastikan semua data yang Anda masukkan sudah benar. Setelah dikirim, form tidak dapat diubah.</p>
                                                    <label for="maintenance_note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan Teknisi</label>
                                                    <p class="mb-2 text-sm text-gray-900">Tambahkan catatan kegiatan maintenance, pastikan semua telah terisi dengan benar, dan jangan lupa untuk menambahkan tanda tangan teknisi & Operator</p>
                                                    <textarea id="maintenance_note" name="maintenance_note" rows="4" class="mb-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis Catatan Teknisi"></textarea>
                                                    <label for="maintenance_signature" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TTD Operator & Teknisi</label>
                                                    <input type="file" name="maintenance_signature" class="filepond">                
                                                </div>
                                            </div>
                                            <button type="button" aria-hidden="true" data-modal-toggle="crud-modal" class="text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                Cek Kembali
                                            </button>
                                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </form>
                    </div> 
                </div>
            </div>
        </div>

        @livewireScripts
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const tabsElement = document.getElementById('tabs-example');
        
                @if ($maintenance_type == 'full')

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
                @else

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
                        id: 'documentation',
                        triggerEl: document.querySelector('#trigger-documentation'),
                        targetEl: document.querySelector('#target-documentation'),
                    },
                ];

                @endif
        
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


                const pumpsSelect = document.getElementById('pumps');

                pumpsSelect.addEventListener('change', function () {
                    const selectedOption = this.options[this.selectedIndex];
                    const targetUrl = selectedOption.getAttribute('data-url-target');

                    if (targetUrl) {
                        window.location.href = targetUrl; // Redirect ke URL yang ditentukan
                    }
                });
            });

            
        </script>
    </body>
</html>
