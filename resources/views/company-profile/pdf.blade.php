<html lang="en">

<head>
    <title>Report Maintenance #{{ $maintenance->maintenancePumpData->number_of_inspection }} {{ $maintenance->pump->serial_number }} Unit {{ $maintenance->pump->unit }} {{ $maintenance->maintenanceMegger->date }}</title>
    @vite(['resources/css/app.css','resources/js/report.js'])
    <style>
        input {
            padding-top:0px !important;
            padding-bottom:0px !important;
        }
    </style>

</head>

<body >
    <div class="p-5 bg-gray-800 flex justify-between items-center fixed top-0 w-full">
        <h2 class="text-white">Preview Report</h2>
        <h2 id="reportTitle" class="text-white font-bold">Report Maintenance #{{ $maintenance->maintenancePumpData->number_of_inspection }} {{ $maintenance->pump->serial_number }} Unit {{ $maintenance->pump->unit }} {{ $maintenance->maintenanceMegger->date }}</h2>
        <button id="btn" class="py-2 px-4 bg-white rounded-md">Download</button>
    </div>

    <div class="flex justify-center bg-gray-600 p-5 mt-20">
        <div id="page" style="width: 210mm" class="flex flex-col gap-5">
            <div class="page page-1 bg-gray-200 flex flex-col justify-between" style="height: 329.9mm">
                <div>
                    <div class="p-2 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="37"
                            viewBox="0 0 100 37">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="100" height="37" />
                        </svg>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white" style="letter-spacing: 0.01px;">FORM MAINTENANCE SUBMERSIBLE AXIAL FLOW PUMP</h1>
                    </div>
                    <div class="flex gap-2 justify-center p-2 bg-gray-200">
                        <div class="grid grid-cols-1 gap-2 text-xs">
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">Tim Teknisi</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm/6"
                                            value="{{ $maintenance->user->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">Lokasi Pompa</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white ">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm/6"
                                            value="{{ $maintenance->pump->location }}">
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">No Seri Pompa</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm/6"
                                            value="{{ $maintenance->pump->serial_number }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-1 text-xs items-start">
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">Flow & Head</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                            value="{{ $maintenance->pump->flow_and_head }}">
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">No Unit Pompa</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                            value="{{ $maintenance->pump->unit }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-2 text-xs">
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">Pemeriksaan</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                            value="{{ $maintenance->maintenancePumpData->number_of_inspection }}">
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">Running Hours Total</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                            value="{{ $maintenance->maintenancePumpData->running_hours_total }}">
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">Running Hours Bulanan</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                            value="{{ $maintenance->maintenancePumpData->running_hours_monthly }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">PEMERIKSAAN</h1>
                    </div>
                    <div class="grid grid-cols-3 justify-center bg-gray-200">
                        <div class="grid-cols-1 gap-2 text-xs p-0">
                            <div class="bg-gray-500">
                                <h1 class="text-center font-bold text-white">LVMDP</h1>
                            </div>
                            <div class="p-2 flex flex-col gap-1">
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900"></label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <p>N</p>
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <p>TN</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Lampu Indikator R.S.T</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="indicator_light_rst" name="indicator_light_rst" type="radio" 
                                            @if ($maintenance->maintenanceLvmdp->indicator_light_rst == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="indicator_light_rst" name="indicator_light_rst" type="radio"
                                            @if ($maintenance->maintenanceLvmdp->indicator_light_rst == 'abnormal' || $maintenance->maintenanceLvmdp->indicator_light_rst == null)
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Balance Voltase</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="voltage_balance" name="voltage_balance" type="radio"
                                            @if ($maintenance->maintenanceLvmdp->voltage_balance == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="voltage_balance" name="voltage_balance" type="radio"
                                            @if ($maintenance->maintenanceLvmdp->voltage_balance == 'abnormal' || $maintenance->maintenanceLvmdp->voltage_balance == null)
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Frequency</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="col-span-2 flex rounded-md bg-white">
                                            <input disabled type="text" name="technician_team" id="technician_team"
                                                class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                value="{{ $maintenance->maintenanceLvmdp->frequency }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="flex rounded-md ring-gray-300 w-full">
                                        <div class="flex gap-2 items-center">
                                            <label for="technician_team" class="font-medium text-gray-900">V1</label>
                                            <div class="w-10">
                                                <div class="flex rounded-md bg-white">
                                                    <input disabled type="text" name="technician_team" id="technician_team"
                                                        class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                        value="{{ $maintenance->maintenanceLvmdp->v1 }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex rounded-md ring-gray-300 w-full">
                                        <div class="flex gap-2 items-center">
                                            <label for="technician_team" class="font-medium text-gray-900">V2</label>
                                            <div class="w-10">
                                                <div class="flex rounded-md bg-white">
                                                    <input disabled type="text" name="technician_team" id="technician_team"
                                                        class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                        value="{{ $maintenance->maintenanceLvmdp->v2 }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex rounded-md ring-gray-300 w-full">
                                        <div class="flex gap-2 items-center">
                                            <label for="technician_team" class="font-medium text-gray-900">V3</label>
                                            <div class="w-10">
                                                <div class="flex rounded-md bg-white">
                                                    <input disabled type="text" name="technician_team" id="technician_team"
                                                        class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                        value="{{ $maintenance->maintenanceLvmdp->v3 }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="flex rounded-md ring-gray-300 w-full">
                                        <div class="flex gap-2 items-center">
                                            <div class="">
                                                <div class="flex rounded-md bg-white">
                                                    <input disabled id="push-everything" name="push-notifications" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                </div>
                                            </div>
                                            <label for="technician_team" class="font-medium text-gray-900">Genset</label>
                                        </div>
                                    </div>
                                    <div class="flex rounded-md ring-gray-300 w-full">
                                        <div class="flex gap-2 items-center">
                                            <div class="">
                                                <div class="flex rounded-md bg-white">
                                                    <input disabled id="push-everything" name="push-notifications" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                </div>
                                            </div>
                                            <label for="technician_team" class="font-medium text-gray-900">Listrik</label>
                                        </div>
                                    </div>
                                    <div class="flex rounded-md ring-gray-300 w-full">
                                        <div class="flex gap-2 items-center">
                                            <div class="">
                                                <div class="flex rounded-md bg-white">
                                                    <input disabled id="push-everything" name="push-notifications" type="radio"
                                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                </div>
                                            </div>
                                            <label for="technician_team" class="font-medium text-gray-900">_________</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-cols-1 gap-2 text-xs p-0">
                            <div class="bg-gray-500">
                                <h1 class="text-center font-bold text-white">JUNCTION BOX</h1>
                            </div>
                            <div class="p-2 flex flex-col gap-1">
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900"></label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <p>N</p>
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <p>TN</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Koneksi Kabel/Baut</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="cable_bolt_connection" name="cable_bolt_connection" type="radio"
                                            @if ($maintenance->maintenanceJunctionBox->cable_bolt_connection == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="cable_bolt_connection" name="cable_bolt_connection" type="radio"
                                            @if ($maintenance->maintenanceJunctionBox->cable_bolt_connection == 'abnormal' || $maintenance->maintenanceJunctionBox->cable_bolt_connection == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Kondisi Kabel</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="cable_condition" name="cable_condition" type="radio"
                                            @if ($maintenance->maintenanceJunctionBox->cable_condition == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="cable_condition" name="cable_condition" type="radio"
                                            @if ($maintenance->maintenanceJunctionBox->cable_condition == 'abnormal' || $maintenance->maintenanceJunctionBox->cable_condition == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Kerapian Koneksi</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="connection_neatness" name="connection_neatness" type="radio"
                                            @if ($maintenance->maintenanceJunctionBox->connection_neatness == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="connection_neatness" name="connection_neatness" type="radio"
                                            @if ($maintenance->maintenanceJunctionBox->connection_neatness == 'abnormal' || $maintenance->maintenanceJunctionBox->connection_neatness == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900 col-span-2 ">Kelembapan Dalam Box</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="col-span-2 flex rounded-md bg-white">
                                            <input disabled type="text" name="technician_team" id="technician_team"
                                                class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                value="{{ $maintenance->maintenanceJunctionBox->humidity_inside_box }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900 col-span-2 ">Suhu Dalam Box</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="col-span-2 flex rounded-md bg-white">
                                            <input disabled type="text" name="technician_team" id="technician_team"
                                                class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                value="{{ $maintenance->maintenanceJunctionBox->temperature_inside_box }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-cols-1 gap-2 text-xs p-0">
                            <div class="bg-gray-500">
                                <h1 class="text-center font-bold text-white">PANEL</h1>
                            </div>
                            <div class="p-2 flex flex-col gap-1">
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900"></label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <p>N</p>
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <p>TN</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Koneksi Kabel/Baut</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="cable_bolt_connection" name="cable_bolt_connection" type="radio"
                                            @if ($maintenance->maintenancePanel->cable_bolt_connection == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="cable_bolt_connection" name="cable_bolt_connection" type="radio"
                                            @if ($maintenance->maintenancePanel->cable_bolt_connection == 'abnormal' || $maintenance->maintenancePanel->cable_bolt_connection == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Kondisi Kabel</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="cable_condition" name="cable_condition" type="radio"
                                            @if ($maintenance->maintenancePanel->cable_condition == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="cable_condition" name="cable_condition" type="radio"
                                            @if ($maintenance->maintenancePanel->cable_condition == 'abnormal' || $maintenance->maintenancePanel->cable_condition == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Kerapian Koneksi</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="connection_neatness" name="connection_neatness" type="radio"
                                            @if ($maintenance->maintenancePanel->connection_neatness == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="connection_neatness" name="connection_neatness" type="radio"
                                            @if ($maintenance->maintenancePanel->connection_neatness == 'abnormal' || $maintenance->maintenancePanel->connection_neatness == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900 col-span-2 ">Kelembapan Dalam Panel</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="col-span-2 flex rounded-md bg-white">
                                            <input disabled type="text" name="technician_team" id="technician_team"
                                                class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                value="{{ $maintenance->maintenancePanel->humidity_inside_panel }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900 col-span-2 ">Suhu Dalam Panel</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="col-span-2 flex rounded-md bg-white">
                                            <input disabled type="text" name="technician_team" id="technician_team"
                                                class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                value="{{ $maintenance->maintenancePanel->temperature_inside_panel }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 justify-center bg-gray-200">
                        <div class="grid grid-cols-3 col-span-3 text-xs p-0">
                            <div class="grid-cols-1 gap-2 text-xs p-0">
                                <div class="bg-gray-500 h-5">
                                    <h1 class="text-center font-bold text-white">FUNGSI PANEL</h1>
                                </div>
                                <div class="p-2 flex flex-col gap-2">
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900"></label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <p>N</p>
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <p>TN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Indikator R.S.T </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="rst_indicator" name="rst_indicator" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->rst_indicator == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="rst_indicator" name="rst_indicator" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->rst_indicator == 'abnormal' || $maintenance->maintenancePanel->rst_indicator == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Indikator Pump On </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="pump_on_indicator" name="pump_on_indicator" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->pump_on_indicator == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="pump_on_indicator" name="pump_on_indicator" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->pump_on_indicator == 'abnormal' || $maintenance->maintenancePanel->pump_on_indicator == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Indikator VSD Standby </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="vsd_standby_indicator" name="vsd_standby_indicator" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->vsd_standby_indicator == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="vsd_standby_indicator" name="vsd_standby_indicator" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->vsd_standby_indicator == 'abnormal' || $maintenance->maintenancePanel->vsd_standby_indicator == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Monitor Drive </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="drive_monitor" name="drive_monitor" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->drive_monitor == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="drive_monitor" name="drive_monitor" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->drive_monitor == 'abnormal' || $maintenance->maintenancePanel->drive_monitor == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Monitor Sensor </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="sensor_monitor" name="sensor_monitor" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->sensor_monitor == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="sensor_monitor" name="sensor_monitor" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->sensor_monitor == 'abnormal' || $maintenance->maintenancePanel->sensor_monitor == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Monitor Power Meter </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="power_meter_monitor" name="power_meter_monitor" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->power_meter_monitor == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="power_meter_monitor" name="power_meter_monitor" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->power_meter_monitor == 'abnormal' || $maintenance->maintenancePanel->power_meter_monitor == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Selektor Moa </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="moa_selector" name="moa_selector" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->moa_selector == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="moa_selector" name="moa_selector" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->moa_selector == 'abnormal' || $maintenance->maintenancePanel->moa_selector == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Tombol Start </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="start_button" name="start_button" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->start_button == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="start_button" name="start_button" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->start_button == 'abnormal' || $maintenance->maintenancePanel->start_button == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Tombol Stop </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="stop_button" name="stop_button" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->stop_button == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="stop_button" name="stop_button" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->stop_button == 'abnormal' || $maintenance->maintenancePanel->stop_button == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Tombol Reset </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="reset_button" name="reset_button" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->reset_button == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="reset_button" name="reset_button" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->reset_button == 'abnormal' || $maintenance->maintenancePanel->reset_button == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Tombol Emergency </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="emergency_button" name="emergency_button" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->emergency_button == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="emergency_button" name="emergency_button" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->emergency_button == 'abnormal' || $maintenance->maintenancePanel->emergency_button == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Kipas Exhaust </label>
                                        <div class="grid grid-cols-2 gap-3">
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="exhaust_fan" name="exhaust_fan" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->exhaust_fan == 'normal')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3">
                                                <input disabled id="exhaust_fan" name="exhaust_fan" type="radio"
                                                @if ($maintenance->maintenancePanelFunction->exhaust_fan == 'abnormal' || $maintenance->maintenancePanel->exhaust_fan == null )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <p class="text-red-500">N : Normal TN : Tidak Normal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-cols-1 col-span-2 gap-2 text-xs p-0">
                                <div class="bg-gray-500 h-5">
                                    <h1 class="text-center font-bold text-white">Elektrikal Mekanikal</h1>
                                </div>
                                <div class="p-2 flex flex-col gap-1">
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900"></label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="flex items-center justify-center gap-x-3 w-16">
                                                <p>40 Hz</p>
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3 w-16">
                                                <p>45 Hz</p>
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3 w-16">
                                                <p>50 Hz</p>
                                            </div>
                                            <div class="flex items-center justify-center gap-x-3 w-16">
                                                <p>Rujukan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">KW</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_kw"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_kw"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_kw"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 250">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Amper</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_amper"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_amper"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_amper"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 517">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">RPM</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_rpm"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_rpm"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_rpm"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 590">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Torsi</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_torsi"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_torsi"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_torsi"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 110 %">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Suhu Winding</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_winding_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_winding_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_winding_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 90 C">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Pump Humidity</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_pump_humidity"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_pump_humidity"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_pump_humidity"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 90 C">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Suhu Bearing</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_bearing_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_bearing_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_bearing_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 90 C">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Suhu Kabel 1</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_cable_1_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_cable_1_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_cable_1_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 60 C">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Suhu Kabel 2</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_cable_2_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_cable_2_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_cable_2_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 60 C">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Suhu Kabel 3</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_cable_3_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_cable_3_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_cable_3_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 60 C">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Vibrasi</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_vibration"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_vibration"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_vibration"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 15 m/s">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Suara (dB)</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_sound"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_sound"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_sound"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 100 dB">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Suhu Terminal</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"40_hz_terminal_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"45_hz_terminal_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceElectroMechanical->{"50_hz_terminal_temperature"} }}">
                                            </div>
                                            <div class="rounded-md bg-white w-16">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="< 60 C">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-cols-1 col-span-3 gap-2 text-xs p-0">
                                <div class="bg-gray-500 h-5">
                                    <h1 class="text-center font-bold text-white">Sensor Test</h1>
                                </div>
                                <div class="p-2 flex flex-col gap-2">
                                    <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900"></label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <p>Sensor suhu</p>
                                                <div class="grid grid-cols-2 gap-2">
                                                    <p>F</p>
                                                    <p>TF</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <p>Sensor WLC</p>
                                                <div class="grid grid-cols-2 gap-2">
                                                    <p>F</p>
                                                    <p>TF</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <p>Sensor Voltase</p>
                                                <div class="grid grid-cols-2 gap-2">
                                                    <p>F</p>
                                                    <p>TF</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <p>Sensor VSD</p>
                                                <div class="grid grid-cols-2 gap-2">
                                                    <p>F</p>
                                                    <p>TF</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Pump Vault</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="pump_fault_temperature_sensor" name="pump_fault_temperature_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->pump_fault_temperature_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="pump_fault_temperature_sensor" name="pump_fault_temperature_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->pump_fault_temperature_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->pump_fault_temperature_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Low Water</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="low_water_wlc_sensor" name="low_water_wlc_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->low_water_wlc_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="low_water_wlc_sensor" name="low_water_wlc_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->low_water_wlc_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->low_water_wlc_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Voltage Fault</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="voltage_fault_voltage_sensor" name="voltage_fault_voltage_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->voltage_fault_voltage_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="voltage_fault_voltage_sensor" name="voltage_fault_voltage_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->voltage_fault_voltage_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->voltage_fault_voltage_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">VSD Fault</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="vsd_vault_vsd_sensor" name="vsd_vault_vsd_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->vsd_vault_vsd_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="vsd_vault_vsd_sensor" name="vsd_vault_vsd_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->vsd_vault_vsd_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->vsd_vault_vsd_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Trouble Alarm</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="trouble_alarm_temperature_sensor" name="trouble_alarm_temperature_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->trouble_alarm_temperature_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="trouble_alarm_temperature_sensor" name="trouble_alarm_temperature_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->trouble_alarm_temperature_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->trouble_alarm_temperature_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="trouble_alarm_wlc_sensor" name="trouble_alarm_wlc_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->trouble_alarm_wlc_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="trouble_alarm_wlc_sensor" name="trouble_alarm_wlc_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->trouble_alarm_wlc_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->trouble_alarm_wlc_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="trouble_alarm_voltage_sensor" name="trouble_alarm_voltage_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->trouble_alarm_voltage_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="trouble_alarm_voltage_sensor" name="trouble_alarm_voltage_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->trouble_alarm_voltage_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->trouble_alarm_voltage_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="trouble_alarm_vsd_sensor" name="trouble_alarm_vsd_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->trouble_alarm_vsd_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="trouble_alarm_vsd_sensor" name="trouble_alarm_vsd_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->trouble_alarm_vsd_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->trouble_alarm_vsd_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2 items-center justify-between">
                                        <label for="technician_team" class="font-medium text-gray-900">Pump Trip</label>
                                        <div class="grid grid-cols-4 gap-1">
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="pump_trip_temperature_sensor" name="pump_trip_temperature_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->pump_trip_temperature_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="pump_trip_temperature_sensor" name="pump_trip_temperature_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->pump_trip_temperature_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->pump_trip_temperature_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="pump_trip_wlc_sensor" name="pump_trip_wlc_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->pump_trip_wlc_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="pump_trip_wlc_sensor" name="pump_trip_wlc_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->pump_trip_wlc_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->pump_trip_wlc_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="pump_trip_voltage_sensor" name="pump_trip_voltage_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->pump_trip_voltage_sensor == 'normal')
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="flex items-center justify-center gap-x-3">
                                                        <input disabled id="pump_trip_voltage_sensor" name="pump_trip_voltage_sensor" type="radio"
                                                        @if ($maintenance->maintenanceSensorTest->pump_trip_voltage_sensor == 'abnormal' || $maintenance->maintenanceSensorTest->pump_trip_voltage_sensor == null )
                                                            checked
                                                        @endif
                                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-center justify-center gap-x-3 w-28">
                                                <div class="grid grid-cols-2 gap-2">
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-cols-1 gap-2 text-xs p-0">
                            <div class="bg-gray-500 h-5">
                                <h1 class="text-center font-bold text-white">Pipa Kolom & Output Air</h1>
                            </div>
                            <div class="p-2 flex flex-col gap-2">
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900"></label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <p>N</p>
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <p>TN</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Kondisi Pipa Kolom</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="column_pipe_condition" name="column_pipe_condition" type="radio"
                                            @if ($maintenance->maintenanceColumnPipeWaterOutput->column_pipe_condition == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="column_pipe_condition" name="column_pipe_condition" type="radio"
                                            @if ($maintenance->maintenanceColumnPipeWaterOutput->column_pipe_condition == 'abnormal' || $maintenance->maintenanceSensorTest->column_pipe_condition == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Kondisi Pipa Output</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="output_pipe_condition" name="output_pipe_condition" type="radio"
                                            @if ($maintenance->maintenanceColumnPipeWaterOutput->output_pipe_condition == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="output_pipe_condition" name="output_pipe_condition" type="radio"
                                            @if ($maintenance->maintenanceColumnPipeWaterOutput->output_pipe_condition == 'abnormal' || $maintenance->maintenanceSensorTest->output_pipe_condition == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Kondisi Valve (Ops)</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="valve_condition" name="valve_condition" type="radio"
                                            @if ($maintenance->maintenanceColumnPipeWaterOutput->valve_condition == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="valve_condition" name="valve_condition" type="radio"
                                            @if ($maintenance->maintenanceColumnPipeWaterOutput->valve_condition == 'abnormal' || $maintenance->maintenanceSensorTest->valve_condition == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Kondisi Flap (Ops)</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="flap_condition" name="flap_condition" type="radio"
                                            @if ($maintenance->maintenanceColumnPipeWaterOutput->flap_condition == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="flap_condition" name="flap_condition" type="radio"
                                            @if ($maintenance->maintenanceColumnPipeWaterOutput->flap_condition == 'abnormal' || $maintenance->maintenanceSensorTest->flap_condition == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Volume Output Air</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="water_output_condition" name="water_output_condition" type="radio"
                                            @if ($maintenance->maintenanceColumnPipeWaterOutput->water_output_condition == 'normal')
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="flex items-center justify-center gap-x-3">
                                            <input disabled id="water_output_condition" name="water_output_condition" type="radio"
                                            @if ($maintenance->maintenanceColumnPipeWaterOutput->water_output_condition == 'abnormal' || $maintenance->maintenanceSensorTest->water_output_condition == null )
                                                checked
                                            @endif
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 flex gap-2 items-center justify-between">
                                    <label for="technician_team" class="font-medium text-gray-900">Kondisi Nilai pH Air</label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div
                                            class="col-span-2 flex rounded-md bg-white">
                                            <input disabled type="text" name="technician_team" id="technician_team"
                                                class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                value="{{ $maintenance->maintenanceColumnPipeWaterOutput->water_ph_value_condition }}">
                                        </div>
                                    </div>
                                </div>
                                <p>Nilai Rujukan 4.5 - 10 pH</p>
                            </div>
                            <div class="bg-gray-500 h-5">
                                <h1 class="text-center font-bold text-white">Keterangan</h1>
                            </div>
                            <div class="p-2 flex flex-col gap-2">
                                <textarea name="" id="" cols="30" rows="10"> Catatan: {{ $maintenance->technician_note }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">ADMINISTRASI (Paraf & Nama)</h1>
                    </div>
                    <div class="flex gap-1 justify-center p-2 bg-gray-200">
                        <div class="flex flex-col items-center justify-between bg-white w-48 h-32">
                            <p class="text-xs">Teknisi Dex</p>
                            <img src="" alt="">
                            <p class="text-xs">Gilang</p>
                        </div>
                        <div class="flex flex-col items-center justify-between bg-white w-48 h-32">
                            <p class="text-xs">Menejemn Dex</p>
                            <img src="" alt="">
                            <p class="text-xs">Tommy</p>
                        </div>
                        <div class="flex flex-col items-center justify-between bg-white w-48 h-32">
                            <p class="text-xs">Operator Pompa</p>
                            <img src="" alt="">
                            <p class="text-xs">David</p>
                        </div>
                        <div class="flex flex-col items-center justify-between bg-white w-48 h-32">
                            <p class="text-xs">Pengawa Pompa</p>
                            <img src="" alt="">
                            <p class="text-xs"></p>
                        </div>
                    </div>
                </div>
    
                <footer class="bg-blue-800 text-white w-full" style="">
                    <div class="flex gap-5 justify-between p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150"
                            height="40" viewBox="0 0 572 224">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="572" height="224" />
                        </svg>
                        <p class="text-sm font-bold text-center">Pemeliharaan Pompa Air Submersible <br>Flow {{ $maintenance->pump->flow_and_head }}</p>
                        <p class="text-sm font-bold text-center">{{ $maintenance->pump->location }} <br>Unit {{ $maintenance->pump->unit }}</p>
            
                    </div>
                </footer>
        
        
            </div>
        
            @pageBreak
        
            <div class="page page-1 bg-gray-200 flex flex-col justify-between" style="height: 329.9mm">
                <div>
                    <div class="p-2 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                            height="37" viewBox="0 0 100 37">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="100" height="37" />
                        </svg>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">FORM MEGGER</h1>
                    </div>
                    <div class="flex gap-2 justify-center p-2 bg-gray-200">
                        <div class="grid grid-cols-1 gap-2 text-xs">
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">Tim Teknisi</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm/6"
                                            value="{{ $maintenance->user->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">Lokasi Pompa</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                            value="{{ $maintenance->pump->location }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-1 text-xs items-start">
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">No Unit Pompa</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                            value="{{ $maintenance->pump->unit }}">
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">No Seri Pompa</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                            value="{{ $maintenance->pump->serial_number }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-2 text-xs">
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">Tanggal</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                            value="{{ $maintenance->maintenanceMegger->date }}">
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2 items-center">
                                <label for="technician_team" class="font-medium text-gray-900">Running Hours</label>
                                <div class="">
                                    <div class="flex rounded-md bg-white  bg-white">
                                        <input disabled type="text" name="technician_team" id="technician_team"
                                            class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                            value="{{ $maintenance->maintenanceMegger->running_hours }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">INSULASI DAN RESISTENSI</h1>
                    </div>
                    <div class="grid grid-cols-2 justify-center bg-gray-200">
                        <div class="grid-cols-1 gap-2 text-xs p-0">
                            <div class="bg-gray-500">
                                <h1 class="text-center font-bold text-white">INSULASI</h1>
                            </div>
                            <div class="p-2 flex flex-col gap-1">
                                <div class="flex flex-col gap-2 text-xs items-center">
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">U1 -PE</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->u1_pe }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">V1 - PE</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->v1_pe }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">W1 - PE</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->w1_pe }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">U2 - PE</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->u2_pe }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">V2 - PE</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->v2_pe }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">W2 - PE</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->w2_pe }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">U1 - V2</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->u1_v2 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">U1 - W2</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->u1_w2 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">V1 - U2</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->v1_u2 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">V1 - W2</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->v1_w2 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">W1 - U2</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->w1_u2 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">W1 - V2</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceInsulation->w1_v2 }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-cols-1 gap-2 text-xs p-0">
                            <div class="bg-gray-500">
                                <h1 class="text-center font-bold text-white">RESISTENSI</h1>
                            </div>
                            <div class="p-2 flex flex-col gap-1">
                                <div class="flex flex-col gap-2 text-xs items-center">
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">PE - PE</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceResistance->pe_pe }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">U1 - U2</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceResistance->u1_u2 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">V1 - V2</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceResistance->v1_v2 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-2">
                                        <label for="technician_team" class="font-medium text-gray-900 ">W1 - W2</label>
                                        <div class="col-span-2">
                                            <div
                                                class="flex rounded-md bg-white  bg-white">
                                                <input disabled type="text" name="technician_team" id="technician_team"
                                                    class="block flex-1 border-0 bg-transparent pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6"
                                                    value="{{ $maintenance->maintenanceResistance->w1_w2 }}">
                                            </div>
                                        </div>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">CEK KONDISI POMPA</h1>
                    </div>
                    <div class="gap-1 justify-center bg-gray-200">
                        <div class="grid-cols-1 gap-2 text-xs p-0">
                            <div class="bg-gray-500 h-5">
                                <h1 class="text-center font-bold text-white"> </h1>
                            </div>
                            <div class="flex flex-col gap-2 text-xs items-center p-2">
                                <div class="grid grid-cols-3 gap-2  w-80">
                                    <label for="technician_team" class="font-medium text-gray-900 ">Bodi Pompa</label>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="pump_body" name="pump_body" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->pump_body == 'ok')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">Ok</label>
                                    </div>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="pump_body" name="pump_body" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->pump_body == 'bad' )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">{{ ($maintenance->maintenancePumpCondition->pump_body == 'bad' && $maintenance->maintenancePumpCondition->pump_body_note != null ) ? $maintenance->maintenancePumpCondition->pump_body_note : '_____'}}</label>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2  w-80">
                                    <label for="technician_team" class="font-medium text-gray-900 ">Impeller</label>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="impeller" name="impeller" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->impeller == 'ok')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">Ok</label>
                                    </div>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="impeller" name="impeller" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->impeller == 'bad' )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">{{ ($maintenance->maintenancePumpCondition->impeller == 'bad' && $maintenance->maintenancePumpCondition->impeller_note != null ) ? $maintenance->maintenancePumpCondition->impeller_note : '_____'}}</label>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2  w-80">
                                    <label for="technician_team" class="font-medium text-gray-900 ">Wearing Ring</label>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="wearing_ring" name="wearing_ring" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->wearing_ring == 'ok')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">Ok</label>
                                    </div>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="wearing_ring" name="wearing_ring" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->wearing_ring == 'bad' )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">{{ ($maintenance->maintenancePumpCondition->wearing_ring == 'bad' && $maintenance->maintenancePumpCondition->wearing_ring_note != null ) ? $maintenance->maintenancePumpCondition->wearing_ring_note : '_____'}}</label>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2  w-80">
                                    <label for="technician_team" class="font-medium text-gray-900 ">Kabel</label>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="cable" name="cable" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->cable == 'ok')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">Ok</label>
                                    </div>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="cable" name="cable" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->cable == 'bad' )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">{{ ($maintenance->maintenancePumpCondition->cable == 'bad' && $maintenance->maintenancePumpCondition->cable_note != null ) ? $maintenance->maintenancePumpCondition->cable_note : '_____'}}</label>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2  w-80">
                                    <label for="technician_team" class="font-medium text-gray-900 ">Baut Pompa</label>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="pump_bolt" name="pump_bolt" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->pump_bolt == 'ok')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">Ok</label>
                                    </div>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="pump_bolt" name="pump_bolt" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->pump_bolt == 'bad' )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">{{ ($maintenance->maintenancePumpCondition->pump_bolt == 'bad' && $maintenance->maintenancePumpCondition->pump_bolt_note != null ) ? $maintenance->maintenancePumpCondition->pump_bolt_note : '_____'}}</label>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2  w-80">
                                    <label for="technician_team" class="font-medium text-gray-900 ">Kondisi Pompa</label>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="pump_condition" name="pump_condition" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->pump_condition == 'ok')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">Ok</label>
                                    </div>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="pump_condition" name="pump_condition" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->pump_condition == 'bad' )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">{{ ($maintenance->maintenancePumpCondition->pump_condition == 'bad' && $maintenance->maintenancePumpCondition->pump_condition_note != null ) ? $maintenance->maintenancePumpCondition->pump_condition_note : '_____'}}</label>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-2  w-80">
                                    <label for="technician_team" class="font-medium text-gray-900 ">Baut Column Pipe </label>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="column_pipe_bolt" name="column_pipe_bolt" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->column_pipe_bolt == 'ok')
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">Ok</label>
                                    </div>
                                    <div class="flex gap-2 items-center">
                                        <div class="">
                                            <div class="flex rounded-md bg-white">
                                                <input disabled id="column_pipe_bolt" name="column_pipe_bolt" type="radio"
                                                @if ($maintenance->maintenancePumpCondition->column_pipe_bolt == 'bad' )
                                                    checked
                                                @endif
                                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                        </div>
                                        <label for="technician_team" class="font-medium text-gray-900">{{ ($maintenance->maintenancePumpCondition->column_pipe_bolt == 'bad' && $maintenance->maintenancePumpCondition->column_pipe_bolt_note != null ) ? $maintenance->maintenancePumpCondition->column_pipe_bolt_note : '_____'}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">KETERANGAN</h1>
                    </div>
                    <div class="bg-gray-500 h-5">
                    </div>
                    <div class="flex gap-1 justify-center p-2 bg-gray-200">
                        <textarea name="" id="" cols="100" rows="10"></textarea>
                    </div>
                </div>
    
                <footer class="bg-blue-800 text-white w-full" style="">
                    <div class="flex gap-5 justify-between p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150"
                            height="40" viewBox="0 0 572 224">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="572" height="224" />
                        </svg>
                        <p class="text-sm font-bold text-center">Pemeliharaan Pompa Air Submersible <br>Flow {{ $maintenance->pump->flow_and_head }}</p>
                        <p class="text-sm font-bold text-center">{{ $maintenance->pump->location }} <br>Unit {{ $maintenance->pump->unit }}</p>
            
                    </div>
                </footer>
            </div>
        
            @pageBreak
            <div class="page page-1 bg-gray-200 flex flex-col justify-between" style="height: 329.9mm">
                <div>
                    <div class="p-2 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                            height="37" viewBox="0 0 100 37">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="100" height="37" />
                        </svg>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">KURVA DATA PEMELIHARAAN</h1>
                    </div>
                    <div class="grid grid-cols-2 p-5 gap-5">
                        <div class="bg-white">
                            <div id="kw">                   
                            </div>
                        </div>
                        <div class="bg-white">
                            <div id="amper">                   
                            </div>
                        </div>
                        <div class="bg-white">
                            <div id="rpm">                   
                            </div>
                        </div>
                        <div class="bg-white">
                            <div id="torsi">                   
                            </div>
                        </div>
                        <div class="bg-white">
                            <div id="vibrasi">                   
                            </div>
                        </div>
                        <div class="bg-white">
                            <div id="suara">                   
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">Ketinggian Air</h1>
                    </div>
                    <div class="p-5">
                        <p class="text-center"> Ketinggian Air 40 Hz: 60 cm; 45 Hz: 50 cm; 50 Hz: 50 cm</p>
                    </div>
                </div>
    
                <footer class="bg-blue-800 text-white w-full" style="">
                    <div class="flex gap-5 justify-between p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150"
                            height="40" viewBox="0 0 572 224">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="572" height="224" />
                        </svg>
                        <p class="text-sm font-bold text-center">Pemeliharaan Pompa Air Submersible <br>Flow {{ $maintenance->pump->flow_and_head }}</p>
                        <p class="text-sm font-bold text-center">{{ $maintenance->pump->location }} <br>Unit {{ $maintenance->pump->unit }}</p>
            
                    </div>
                </footer>
                
            </div>
        
            @pageBreak
            <div class="page page-1 bg-gray-200 flex flex-col justify-between" style="height: 329.9mm">
                <div>
                    <div class="p-2 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                            height="37" viewBox="0 0 100 37">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="100" height="37" />
                        </svg>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">DOKUMENTASI PEMELIHARAAN POMPA DEX</h1>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-5">
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">pH Air</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['water_level'] }}" alt="">
                                @if ($maintenanceDocumentation['water_level']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Mengencangkan Baut Panel</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['tightening_panel_bolts'] }}" alt="">
                                @if ($maintenanceDocumentation['tightening_panel_bolts']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Membersihkan Panel dengan Kain</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['cleaning_panel_with_cloth'] }}" alt="">
                                @if ($maintenanceDocumentation['cleaning_panel_with_cloth']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Membersihkan Panel dengan Kuas</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['cleaning_panel_with_brush'] }}" alt="">
                                @if ($maintenanceDocumentation['cleaning_panel_with_brush']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Membersihkan Panel dengan Vacuum</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['cleaning_panel_with_vacuum'] }}" alt="">
                                @if ($maintenanceDocumentation['cleaning_panel_with_vacuum']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Kondisi Panel setelah dibersihkan</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['panel_condition_after_cleaning'] }}" alt="">
                                @if ($maintenanceDocumentation['panel_condition_after_cleaning']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
            
                        
                    </div>
                </div>
                <footer class="bg-blue-800 text-white w-full" style="">
                    <div class="flex gap-5 justify-between p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150"
                            height="40" viewBox="0 0 572 224">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="572" height="224" />
                        </svg>
                        <p class="text-sm font-bold text-center">Pemeliharaan Pompa Air Submersible <br>Flow {{ $maintenance->pump->flow_and_head }}</p>
                        <p class="text-sm font-bold text-center">{{ $maintenance->pump->location }} <br>Unit {{ $maintenance->pump->unit }}</p>
            
                    </div>
                </footer>
            </div>
        
            @pageBreak
            <div class="page page-1 bg-gray-200 flex flex-col justify-between" style="height: 329.9mm">
                <div>
                    <div class="p-2 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                            height="37" viewBox="0 0 100 37">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="100" height="37" />
                        </svg>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">DOKUMENTASI PEMELIHARAAN POMPA DEX</h1>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-5">
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Daya dan Arus Output Saat f = 40Hz</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['40_hz_kw_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['40_hz_kw_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Daya dan Arus Output Saat f = 45Hz</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['45_hz_kw_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['45_hz_kw_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Daya dan Arus Output Saat f = 50Hz</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['50_hz_kw_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['50_hz_kw_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Vibrasi Saat f = 50Hz</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['50_hz_vibration_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['50_hz_vibration_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Kebisingan Saat f = 50Hz</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['50_hz_sound_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['50_hz_sound_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Suhu Kabel Saat f = 50Hz</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['50_hz_cable_1_temperature_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['50_hz_cable_1_temperature_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>            
                    </div>
                </div>
                <footer class="bg-blue-800 text-white w-full" style="">
                    <div class="flex gap-5 justify-between p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150"
                            height="40" viewBox="0 0 572 224">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="572" height="224" />
                        </svg>
                        <p class="text-sm font-bold text-center">Pemeliharaan Pompa Air Submersible <br>Flow {{ $maintenance->pump->flow_and_head }}</p>
                        <p class="text-sm font-bold text-center">{{ $maintenance->pump->location }} <br>Unit {{ $maintenance->pump->unit }}</p>
            
                    </div>
                </footer>
            </div>
        
            @pageBreak
            <div class="page page-1 bg-gray-200 flex flex-col justify-between" style="height: 329.9mm">
                <div>
                    <div class="p-2 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                            height="37" viewBox="0 0 100 37">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="100" height="37" />
                        </svg>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">DOKUMENTASI PEMELIHARAAN POMPA DEX</h1>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-5">
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Output FLow f = 40Hz</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['40_hz_rpm_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['40_hz_rpm_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Output FLow f = 45Hz</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['45_hz_kw_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['45_hz_kw_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Output FLow f = 50Hz</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['50_hz_kw_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['50_hz_kw_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Junction Box Setelah Dibersihkan</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['junction_box_after_cleaning'] }}" alt="">
                                @if ($maintenanceDocumentation['junction_box_after_cleaning']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Cleaning Pump</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['pump_cleaning'] }}" alt="">
                                @if ($maintenanceDocumentation['pump_cleaning']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>         
                    </div>
                </div>
                <footer class="bg-blue-800 text-white w-full" style="">
                    <div class="flex gap-5 justify-between p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150"
                            height="40" viewBox="0 0 572 224">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="572" height="224" />
                        </svg>
                        <p class="text-sm font-bold text-center">Pemeliharaan Pompa Air Submersible <br>Flow {{ $maintenance->pump->flow_and_head }}</p>
                        <p class="text-sm font-bold text-center">{{ $maintenance->pump->location }} <br>Unit {{ $maintenance->pump->unit }}</p>
            
                    </div>
                </footer>
            </div>
        
            @pageBreak
            <div class="page page-1 bg-gray-200 flex flex-col justify-between" style="height: 329.9mm">
                <div>
                    <div class="p-2 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                            height="37" viewBox="0 0 100 37">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="100" height="37" />
                        </svg>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">TEST INSULASI</h1>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-5">
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">U1 - PE</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['u1_pe_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['u1_pe_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">U2 - PE</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['u2_pe_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['u2_pe_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">V1 - PE</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['v1_pe_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['v1_pe_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">V2 - PE</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['v2_pe_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['v2_pe_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">W1 - PE</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['w1_pe_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['w1_pe_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>  
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">W2 - PE</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['w2_pe_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['w2_pe_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>              
                    </div>
                </div>
                <footer class="bg-blue-800 text-white w-full" style="">
                    <div class="flex gap-5 justify-between p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150"
                            height="40" viewBox="0 0 572 224">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="572" height="224" />
                        </svg>
                        <p class="text-sm font-bold text-center">Pemeliharaan Pompa Air Submersible <br>Flow {{ $maintenance->pump->flow_and_head }}</p>
                        <p class="text-sm font-bold text-center">{{ $maintenance->pump->location }} <br>Unit {{ $maintenance->pump->unit }}</p>
            
                    </div>
                </footer>
            </div>
        
            @pageBreak
            <div class="page page-1 bg-gray-200 flex flex-col justify-between" style="height: 329.9mm">
                <div>
                    <div class="p-2 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                            height="37" viewBox="0 0 100 37">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="100" height="37" />
                        </svg>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">TEST RESISTENSI</h1>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-5">
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">U1 - U2</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['u1_u2_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['u1_u2_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">V1 - V2</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['v1_v2_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['v1_v2_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">W1 - W2</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['w1_w2_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['w1_w2_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">PE1 - PE2</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['pe_pe_image_path'] }}" alt="">
                                @if ($maintenanceDocumentation['pe_pe_image_path']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="bg-blue-800 text-white w-full" style="">
                    <div class="flex gap-5 justify-between p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150"
                            height="40" viewBox="0 0 572 224">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="572" height="224" />
                        </svg>
                        <p class="text-sm font-bold text-center">Pemeliharaan Pompa Air Submersible <br>Flow {{ $maintenance->pump->flow_and_head }}</p>
                        <p class="text-sm font-bold text-center">{{ $maintenance->pump->location }} <br>Unit {{ $maintenance->pump->unit }}</p>
            
                    </div>
                </footer>
            </div>
        
            @pageBreak
            <div class="page page-1 bg-gray-200 flex flex-col justify-between" style="height: 329.9mm">
                <div>
                    <div class="p-2 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100"
                            height="37" viewBox="0 0 100 37">
                            <image
                                xlink:href="data:image/png;base64,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"
                                x="0" y="0" width="100" height="37" />
                        </svg>
                    </div>
                    <div class="bg-blue-800">
                        <h1 class="text-center font-bold text-white">PEMELIHARAAN POMPA</h1>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-5">
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Mengangkat Pompa</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['lifting_pump'] }}" alt="">
                                @if ($maintenanceDocumentation['lifting_pump']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Membersihkan Bodi Pompa</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['cleaning_pump_body'] }}" alt="">
                                @if ($maintenanceDocumentation['cleaning_pump_body']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Memoles Wearing Ring</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['polishing_wearing_ring'] }}" alt="">
                                @if ($maintenanceDocumentation['polishing_wearing_ring']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Mengganti Oli Pompa</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['replacing_pump_oil'] }}" alt="">
                                @if ($maintenanceDocumentation['replacing_pump_oil']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Mengencangkan Baut-Baut Pompa</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['tightening_pump_bolts'] }}" alt="">
                                @if ($maintenanceDocumentation['tightening_pump_bolts']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>  
                        <div class="flex flex-col gap-2">
                            <p class="text-center font-bold">Membersihkan Impeller Pompa</p>
                            <div class="p-2 bg-white h-64" >
                                <img src="{{ $maintenanceDocumentation['cleaning_pump_impeller'] }}" alt="">
                                @if ($maintenanceDocumentation['cleaning_pump_impeller']) <p class="text-center m-24 text-gray-300">Tidak Ada Dokumentasi</p> @endif
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="bg-blue-800 text-white w-full" style="">
                    <div class="flex gap-5 justify-between p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150"
                            height="40" viewBox="0 0 572 224">
                            <image
                                xlink:href="data:image/png;base64,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"

                                x="0" y="0" width="572" height="224" />
                        </svg>
                        <p class="text-sm font-bold text-center">Pemeliharaan Pompa Air Submersible <br>Flow {{ $maintenance->pump->flow_and_head }}</p>
                        <p class="text-sm font-bold text-center">{{ $maintenance->pump->location }} <br>Unit {{ $maintenance->pump->unit }}</p>
            
                    </div>
                </footer>
            </div>
    
        </div>
    </div>

    <div
    id="modalEl"
    tabindex="-1"
    aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0"
>
    <div class="relative max-h-full w-full max-w-2xl">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div
                class="flex items-start justify-center rounded-t border-b p-5 dark:border-gray-600"
            >
                <h3
                    class="text-xl font-semibold text-gray-900 dark:text-white lg:text-2xl"
                >   Maintenance Report
                </h3>
            </div>
            <!-- Modal body -->
            <div class="space-y-6 p-6 flex flex-col justify-center items-center">
                <div role="status">
                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
                Report is Downloading
            </div>
        </div>
    </div>
</div>



    <style>
        .header {
            position: fixed;
            top: 0;
        }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jspdf-html2canvas@latest/dist/jspdf-html2canvas.min.js"></script>
    <script>
        let data = @json($dataCurve);

        var options = {
            chart: {
                animations: {
                    enabled: false
                },
            type: 'bar',
            height: 290
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['40 Hz', '45 Hz', '50 Hz'],
            },
            fill: {
                opacity: 1,
            },

        };

        var optionKw = { ...options, series: data.kw, title: {
                text: 'Daya Output (kW)',
                align: 'center',
            }};
        var optionAmper = { ...options, series: data.amper, title: {
                text: 'Arus Output (A)',
                align: 'center',
            }};
        var optionRpm = { ...options, series: data.rpm, title: {
                text: 'RPM (r/min)',
                align: 'center',
            }};
        var optionTorsi = { ...options, series: data.torsi, title: {
                text: 'Torsi (%)',
                align: 'center',
            }};
        var optionVibrasi = { ...options, series: data.vibration, title: {
                text: 'Vibrasi (%)',
                align: 'center',
            }};
        var optionSuara = { ...options, series: data.sound, title: {
                text: 'Suara (dB)',
                align: 'center',
            }};



        var kw = new ApexCharts(document.querySelector("#kw"), optionKw);
        var amper = new ApexCharts(document.querySelector("#amper"), optionAmper);
        var rpm = new ApexCharts(document.querySelector("#rpm"), optionRpm);
        var torsi = new ApexCharts(document.querySelector("#torsi"), optionTorsi);
        var vibrasi = new ApexCharts(document.querySelector("#vibrasi"), optionVibrasi);
        var suara = new ApexCharts(document.querySelector("#suara"), optionSuara);


        kw.render();
        amper.render();
        rpm.render();
        torsi.render();
        vibrasi.render();
        suara.render();

    </script>
    <script>


    </script>

    <script>
    </script>


</body>

</html>
