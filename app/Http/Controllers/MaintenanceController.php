<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\MaintenanceAssignment;
use App\Models\MaintenanceColumnPipeWaterOutput;
use App\Models\MaintenanceDocumentation;
use App\Models\MaintenanceElectroMechanical;
use App\Models\MaintenanceInsulation;
use App\Models\MaintenanceJunctionBox;
use App\Models\MaintenanceLvmdp;
use App\Models\MaintenanceMegger;
use App\Models\MaintenancePanel;
use App\Models\MaintenancePanelFunction;
use App\Models\MaintenancePumpCondition;
use App\Models\MaintenancePumpData;
use App\Models\MaintenanceResistance;
use App\Models\MaintenanceSensorTest;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaintenanceController extends Controller
{

    private function fileRelocated(String $filepath, String $target) {
        $fileLocation = Storage::putFile(
            path: 'public/' . $target,
            file: new File(Storage::path($filepath))
        );

        $fileLocation = str_replace("public/", "", $fileLocation);

        return $fileLocation;
    }
    // Method untuk menampilkan form create
    public function create(Request $request)
    {
        // Ambil token dari query string
        $token = $request->query('token');

        $pump = MaintenanceAssignment::with(['pump', 'user'])->where('token', $token)->first();

        $pumps = MaintenanceAssignment::with('pump')->where('user_id', $pump->user_id)->get();

        $total_of_inspection = Maintenance::where('maintenance_assignment_id', $pump->id)->count() + 1;

        $data_pump = $pump->pump;

        $data_technician = $pump->user;

        return view('welcome', compact('token', 'pumps', 'data_pump', 'data_technician', 'total_of_inspection'));

        // Validasi token, jika perlu
        // if ($this->validateToken($token)) {
        //     return view('maintenance.create', compact('token'));
        // } else {
        //     return redirect()->back()->withErrors(['error' => 'Invalid token']);
        // }
    }

    public function testUpload(Request $request) {
        try {

            $token =  $request->maintenance_token;
            $maintenance_assignment = MaintenanceAssignment::with(['pump', 'user'])->where('token', $token)->first();


            $maintenance = new Maintenance();
            $maintenance->maintenance_assignment_id = $maintenance_assignment->id;
            $maintenance->maintenance_type = $maintenance_assignment->maintenance_type;
            $maintenance->maintenance_status = 'waiting_approval';
            $maintenance->inspection_date = Carbon::now(); 
            $maintenance->save();





            // $request->validate([
            //     'technician' => 'required|string|max:255',
            //     'location' => 'required|string|max:255',
            //     'serial_number' => 'required|string|max:255',
            //     'flow_and_head' => 'required|string|max:255',
            //     'unit' => 'required|string|max:255',
            //     'number_of_inspection' => 'required|integer',
            //     'running_hours_total' => 'required|integer',
            //     'running_hours_total_image' => 'image|nullable|max:2048',
            //     'running_hours_monthly' => 'required|integer',
            //     'running_hours_monthly_image' => 'image|nullable|max:2048',
            // ]);
    
            $maintenance_pump_data = new MaintenancePumpData();

            $maintenance_pump_data->maintenance_id = $maintenance->id;

            if ($request->filled('pump_data_technician')) {
                $maintenance_pump_data->technician = $request->pump_data_technician;
            }
            
            if ($request->filled('pump_data_location')) {
                $maintenance_pump_data->location = $request->pump_data_location;
            }
            
            if ($request->filled('pump_data_serial_number')) {
                $maintenance_pump_data->serial_number = $request->pump_data_serial_number;
            }
            
            if ($request->filled('pump_data_flow_and_head')) {
                $maintenance_pump_data->flow_and_head = $request->pump_data_flow_and_head;
            }
            
            if ($request->filled('pump_data_unit')) {
                $maintenance_pump_data->unit = $request->pump_data_unit;
            }
            
            if ($request->filled('pump_data_number_of_inspection')) {
                $maintenance_pump_data->number_of_inspection = $request->pump_data_number_of_inspection;
            }
            
            if ($request->filled('pump_data_running_hours_total')) {
                $maintenance_pump_data->running_hours_total = $request->pump_data_running_hours_total;
            }
            
            if ($request->filled('pump_data_running_hours_monthly')) {
                $maintenance_pump_data->running_hours_monthly = $request->pump_data_running_hours_monthly;
            }
            
            if ($request->filled('pump_data_running_hours_total_image')) {
                $fileLocation_running_hours_total_image = $this->fileRelocated($request->pump_data_running_hours_total_image, 'maintenance/data-pump');
                $maintenance_pump_data->running_hours_total_image = $fileLocation_running_hours_total_image;
            }
            
            if ($request->filled('pump_data_running_hours_monthly_image')) {
                $fileLocation_running_hours_monthly_image = $this->fileRelocated($request->pump_data_running_hours_monthly_image, 'maintenance/data-pump');
                $maintenance_pump_data->running_hours_monthly_image = $fileLocation_running_hours_monthly_image;
            }

            $maintenance_pump_data->status = 'waiting_approval';
            
            $maintenance_pump_data->save();


            $maintenance_lvmdp = new MaintenanceLvmdp();

            $maintenance_lvmdp->maintenance_id = $maintenance->id;

            if ($request->filled('lvmdp_indicator_light_rst_detail')) {
                $maintenance_lvmdp->indicator_light_rst_detail = $request->lvmdp_indicator_light_rst_detail;
            }
            
            if ($request->filled('lvmdp_indicator_light_rst')) {
                $maintenance_lvmdp->indicator_light_rst = $request->lvmdp_indicator_light_rst;
            }
            
            if ($request->filled('lvmdp_voltage_balance_detail')) {
                $maintenance_lvmdp->voltage_balance_detail = $request->lvmdp_voltage_balance_detail;
            }

            if ($request->filled('lvmdp_voltage_balance')) {
                $maintenance_lvmdp->voltage_balance = $request->lvmdp_voltage_balance;
            }
            
            if ($request->filled('lvmdp_frequency')) {
                $maintenance_lvmdp->frequency = $request->lvmdp_frequency;
            }
            
            if ($request->filled('lvmdp_v1')) {
                $maintenance_lvmdp->v1 = $request->lvmdp_v1;
            }

            if ($request->filled('lvmdp_v2')) {
                $maintenance_lvmdp->v2 = $request->lvmdp_v2;
            }

            if ($request->filled('lvmdp_v3')) {
                $maintenance_lvmdp->v3 = $request->lvmdp_v3;
            }

            if ($request->filled('lvmdp_power')) {
                $maintenance_lvmdp->power = $request->lvmdp_power;
            }

            $maintenance_lvmdp->status = 'waiting_approval';

            $maintenance_lvmdp->save();


            $maintenance_junction_box = new MaintenanceJunctionBox();

            $maintenance_junction_box->maintenance_id = $maintenance->id;

            if ($request->filled('junction_box_cable_bolt_connection')) {
                $maintenance_junction_box->cable_bolt_connection = $request->junction_box_cable_bolt_connection;
            }
            
            if ($request->filled('junction_box_cable_condition')) {
                $maintenance_junction_box->cable_condition = $request->junction_box_cable_condition;
            }
            
            if ($request->filled('junction_box_connection_neatness')) {
                $maintenance_junction_box->connection_neatness = $request->junction_box_connection_neatness;
            }

            if ($request->filled('junction_box_humidity_inside_box')) {
                $maintenance_junction_box->humidity_inside_box = $request->junction_box_humidity_inside_box;
            }
            
            if ($request->filled('junction_box_temperature_inside_box')) {
                $maintenance_junction_box->temperature_inside_box = $request->junction_box_temperature_inside_box;
            }
            
            $maintenance_junction_box->status = 'waiting_approval';

            $maintenance_junction_box->save();

            $maintenance_panel = new MaintenancePanel();

            $maintenance_panel->maintenance_id = $maintenance->id;

            if ($request->filled('panel_cable_bolt_connection')) {
                $maintenance_panel->cable_bolt_connection = $request->panel_cable_bolt_connection;
            }
            
            if ($request->filled('panel_cable_condition')) {
                $maintenance_panel->cable_condition = $request->panel_cable_condition;
            }
            
            if ($request->filled('panel_connection_neatness')) {
                $maintenance_panel->connection_neatness = $request->panel_connection_neatness;
            }

            if ($request->filled('panel_humidity_inside_panel')) {
                $maintenance_panel->humidity_inside_panel = $request->panel_humidity_inside_panel;
            }
            
            if ($request->filled('panel_temperature_inside_panel')) {
                $maintenance_panel->temperature_inside_panel = $request->panel_temperature_inside_panel;
            }
            
            $maintenance_panel->status = 'waiting_approval';

            $maintenance_panel->save();

            $maintenance_panel_function = new MaintenancePanelFunction();

            $maintenance_panel_function->maintenance_id = $maintenance->id;

            if ($request->filled('panel_function_rst_indicator')) {
                $maintenance_panel_function->rst_indicator = $request->panel_function_rst_indicator;
            }
            
            if ($request->filled('panel_function_pump_on_indicator')) {
                $maintenance_panel_function->pump_on_indicator = $request->panel_function_pump_on_indicator;
            }
            
            if ($request->filled('panel_function_cable_bolt_connection')) {
                $maintenance_panel_function->cable_bolt_connection = $request->panel_function_cable_bolt_connection;
            }

            if ($request->filled('panel_function_vsd_standby_indicator')) {
                $maintenance_panel_function->vsd_standby_indicator = $request->panel_function_vsd_standby_indicator;
            }
            
            if ($request->filled('panel_function_drive_monitor')) {
                $maintenance_panel_function->drive_monitor = $request->panel_function_drive_monitor;
            }

            if ($request->filled('panel_function_sensor_monitor')) {
                $maintenance_panel_function->sensor_monitor = $request->panel_function_sensor_monitor;
            }
            
            if ($request->filled('panel_function_power_meter_monitor')) {
                $maintenance_panel_function->power_meter_monitor = $request->panel_function_power_meter_monitor;
            }
            
            if ($request->filled('panel_function_moa_selector')) {
                $maintenance_panel_function->moa_selector = $request->panel_function_moa_selector;
            }

            if ($request->filled('panel_function_start_button')) {
                $maintenance_panel_function->start_button = $request->panel_function_start_button;
            }
            
            if ($request->filled('panel_function_stop_button')) {
                $maintenance_panel_function->stop_button = $request->panel_function_stop_button;
            }

            if ($request->filled('panel_function_reset_button')) {
                $maintenance_panel_function->reset_button = $request->panel_function_reset_button;
            }
            
            if ($request->filled('panel_function_emergency_button')) {
                $maintenance_panel_function->emergency_button = $request->panel_function_emergency_button;
            }

            if ($request->filled('panel_function_exhaust_fan')) {
                $maintenance_panel_function->exhaust_fan = $request->panel_function_exhaust_fan;
            }

            $maintenance_panel_function->status = 'waiting_approval';

            $maintenance_panel_function->save();



            $maintenance_pelectro_mechanical = new MaintenanceElectroMechanical();

            $maintenance_pelectro_mechanical->maintenance_id = $maintenance->id;

            if ($request->filled('elektrikal_mekanikal_40_hz_kw')) {
                $maintenance_pelectro_mechanical->{"40_hz_kw"} = $request->elektrikal_mekanikal_40_hz_kw;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_kw_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_kw_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_kw_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_kw_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_kw_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_kw')) {
                $maintenance_pelectro_mechanical->{"45_hz_kw"} = $request->elektrikal_mekanikal_45_hz_kw;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_kw_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_kw_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_kw_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_kw_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_kw_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_kw')) {
                $maintenance_pelectro_mechanical->{"50_hz_kw"} = $request->elektrikal_mekanikal_50_hz_kw;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_kw_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_kw_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_kw_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_kw_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_kw_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_amper')) {
                $maintenance_pelectro_mechanical->{"40_hz_amper"} = $request->elektrikal_mekanikal_40_hz_amper;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_amper_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_amper_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_amper_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_amper_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_amper_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_amper')) {
                $maintenance_pelectro_mechanical->{"45_hz_amper"} = $request->elektrikal_mekanikal_45_hz_amper;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_amper_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_amper_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_amper_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_amper_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_amper_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_amper')) {
                $maintenance_pelectro_mechanical->{"50_hz_amper"} = $request->elektrikal_mekanikal_50_hz_amper;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_amper_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_amper_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_amper_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_amper_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_amper_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_rpm')) {
                $maintenance_pelectro_mechanical->{"40_hz_rpm"} = $request->elektrikal_mekanikal_40_hz_rpm;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_rpm_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_rpm_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_rpm_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_rpm_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_rpm_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_rpm')) {
                $maintenance_pelectro_mechanical->{"45_hz_rpm"} = $request->elektrikal_mekanikal_45_hz_rpm;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_rpm_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_rpm_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_rpm_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_rpm_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_rpm_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_rpm')) {
                $maintenance_pelectro_mechanical->{"50_hz_rpm"} = $request->elektrikal_mekanikal_50_hz_rpm;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_rpm_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_rpm_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_rpm_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_rpm_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_rpm_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_torsi')) {
                $maintenance_pelectro_mechanical->{"40_hz_torsi"} = $request->elektrikal_mekanikal_40_hz_torsi;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_torsi_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_torsi_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_torsi_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_torsi_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_torsi_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_torsi')) {
                $maintenance_pelectro_mechanical->{"45_hz_torsi"} = $request->elektrikal_mekanikal_45_hz_torsi;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_torsi_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_torsi_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_torsi_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_torsi_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_torsi_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_torsi')) {
                $maintenance_pelectro_mechanical->{"50_hz_torsi"} = $request->elektrikal_mekanikal_50_hz_torsi;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_torsi_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_torsi_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_torsi_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_torsi_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_torsi_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_winding_temperature')) {
                $maintenance_pelectro_mechanical->{"40_hz_winding_temperature"} = $request->elektrikal_mekanikal_40_hz_winding_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_winding_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_winding_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_winding_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_winding_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_winding_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_winding_temperature')) {
                $maintenance_pelectro_mechanical->{"45_hz_winding_temperature"} = $request->elektrikal_mekanikal_45_hz_winding_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_winding_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_winding_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_winding_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_winding_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_winding_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_winding_temperature')) {
                $maintenance_pelectro_mechanical->{"50_hz_winding_temperature"} = $request->elektrikal_mekanikal_50_hz_winding_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_winding_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_winding_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_winding_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_winding_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_winding_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_pump_humidity')) {
                $maintenance_pelectro_mechanical->{"40_hz_pump_humidity"} = $request->elektrikal_mekanikal_40_hz_pump_humidity;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_pump_humidity_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_pump_humidity_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_pump_humidity_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_pump_humidity_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_pump_humidity_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_pump_humidity')) {
                $maintenance_pelectro_mechanical->{"45_hz_pump_humidity"} = $request->elektrikal_mekanikal_45_hz_pump_humidity;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_pump_humidity_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_pump_humidity_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_pump_humidity_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_pump_humidity_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_pump_humidity_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_pump_humidity')) {
                $maintenance_pelectro_mechanical->{"50_hz_pump_humidity"} = $request->elektrikal_mekanikal_50_hz_pump_humidity;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_pump_humidity_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_pump_humidity_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_pump_humidity_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_pump_humidity_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_pump_humidity_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_bearing_temperature')) {
                $maintenance_pelectro_mechanical->{"40_hz_bearing_temperature"} = $request->elektrikal_mekanikal_40_hz_bearing_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_bearing_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_bearing_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_bearing_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_bearing_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_bearing_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_bearing_temperature')) {
                $maintenance_pelectro_mechanical->{"45_hz_bearing_temperature"} = $request->elektrikal_mekanikal_45_hz_bearing_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_bearing_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_bearing_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_bearing_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_bearing_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_bearing_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_bearing_temperature')) {
                $maintenance_pelectro_mechanical->{"50_hz_bearing_temperature"} = $request->elektrikal_mekanikal_50_hz_bearing_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_bearing_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_bearing_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_bearing_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_bearing_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_bearing_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_cable_1_temperature')) {
                $maintenance_pelectro_mechanical->{"40_hz_cable_1_temperature"} = $request->elektrikal_mekanikal_40_hz_cable_1_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_cable_1_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_cable_1_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_cable_1_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_cable_1_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_cable_1_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_cable_1_temperature')) {
                $maintenance_pelectro_mechanical->{"45_hz_cable_1_temperature"} = $request->elektrikal_mekanikal_45_hz_cable_1_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_cable_1_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_cable_1_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_cable_1_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_cable_1_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_cable_1_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_cable_1_temperature')) {
                $maintenance_pelectro_mechanical->{"50_hz_cable_1_temperature"} = $request->elektrikal_mekanikal_50_hz_cable_1_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_cable_1_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_cable_1_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_cable_1_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_cable_1_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_cable_1_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_cable_2_temperature')) {
                $maintenance_pelectro_mechanical->{"40_hz_cable_2_temperature"} = $request->elektrikal_mekanikal_40_hz_cable_2_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_cable_2_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_cable_2_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_cable_2_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_cable_2_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_cable_2_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_cable_2_temperature')) {
                $maintenance_pelectro_mechanical->{"45_hz_cable_2_temperature"} = $request->elektrikal_mekanikal_45_hz_cable_2_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_cable_2_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_cable_2_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_cable_2_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_cable_2_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_cable_2_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_cable_2_temperature')) {
                $maintenance_pelectro_mechanical->{"50_hz_cable_2_temperature"} = $request->elektrikal_mekanikal_50_hz_cable_2_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_cable_2_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_cable_2_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_cable_2_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_cable_2_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_cable_2_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_cable_3_temperature')) {
                $maintenance_pelectro_mechanical->{"40_hz_cable_3_temperature"} = $request->elektrikal_mekanikal_40_hz_cable_3_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_cable_3_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_cable_3_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_cable_3_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_cable_3_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_cable_3_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_cable_3_temperature')) {
                $maintenance_pelectro_mechanical->{"45_hz_cable_3_temperature"} = $request->elektrikal_mekanikal_45_hz_cable_3_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_cable_3_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_cable_3_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_cable_3_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_cable_3_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_cable_3_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_cable_3_temperature')) {
                $maintenance_pelectro_mechanical->{"50_hz_cable_3_temperature"} = $request->elektrikal_mekanikal_50_hz_cable_3_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_cable_3_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_cable_3_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_cable_3_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_cable_3_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_cable_3_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_vibration')) {
                $maintenance_pelectro_mechanical->{"40_hz_vibration"} = $request->elektrikal_mekanikal_40_hz_vibration;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_vibration_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_vibration_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_vibration_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_vibration_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_vibration_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_vibration')) {
                $maintenance_pelectro_mechanical->{"45_hz_vibration"} = $request->elektrikal_mekanikal_45_hz_vibration;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_vibration_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_vibration_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_vibration_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_vibration_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_vibration_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_vibration')) {
                $maintenance_pelectro_mechanical->{"50_hz_vibration"} = $request->elektrikal_mekanikal_50_hz_vibration;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_vibration_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_vibration_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_vibration_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_vibration_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_vibration_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_sound')) {
                $maintenance_pelectro_mechanical->{"40_hz_sound"} = $request->elektrikal_mekanikal_40_hz_sound;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_sound_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_sound_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_sound_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_sound_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_sound_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_sound')) {
                $maintenance_pelectro_mechanical->{"45_hz_sound"} = $request->elektrikal_mekanikal_45_hz_sound;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_sound_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_sound_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_sound_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_sound_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_sound_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_sound')) {
                $maintenance_pelectro_mechanical->{"50_hz_sound"} = $request->elektrikal_mekanikal_50_hz_sound;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_sound_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_sound_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_sound_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_sound_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_sound_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_40_hz_terminal_temperature')) {
                $maintenance_pelectro_mechanical->{"40_hz_terminal_temperature"} = $request->elektrikal_mekanikal_40_hz_terminal_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_40_hz_terminal_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_40_hz_terminal_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_40_hz_terminal_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"40_hz_terminal_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_40_hz_terminal_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_45_hz_terminal_temperature')) {
                $maintenance_pelectro_mechanical->{"45_hz_terminal_temperature"} = $request->elektrikal_mekanikal_45_hz_terminal_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_45_hz_terminal_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_45_hz_terminal_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_45_hz_terminal_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"45_hz_terminal_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_45_hz_terminal_temperature_image_path;
            }

            if ($request->filled('elektrikal_mekanikal_50_hz_terminal_temperature')) {
                $maintenance_pelectro_mechanical->{"50_hz_terminal_temperature"} = $request->elektrikal_mekanikal_50_hz_terminal_temperature;
            }
                        
            if ($request->filled('elektrikal_mekanikal_50_hz_terminal_temperature_image_path')) {
                $fileLocation_elektrikal_mekanikal_50_hz_terminal_temperature_image_path = $this->fileRelocated($request->elektrikal_mekanikal_50_hz_terminal_temperature_image_path, 'maintenance/electro-mechanical');
                $maintenance_pelectro_mechanical->{"50_hz_terminal_temperature_image_path"} = $fileLocation_elektrikal_mekanikal_50_hz_terminal_temperature_image_path;
            }

            $maintenance_pelectro_mechanical->status = 'waiting_approval';
            
            $maintenance_pelectro_mechanical->save();



            $maintenance_column_pipe_water_output = new MaintenanceColumnPipeWaterOutput();

            $maintenance_column_pipe_water_output->maintenance_id = $maintenance->id;

            if ($request->filled('pipe_column_water_output_water_ph_value_condition')) {
                $maintenance_column_pipe_water_output->water_ph_value_condition = $request->pipe_column_water_output_water_ph_value_condition;
            }
            
            if ($request->filled('pipe_column_water_output_water_ph_value_condition_image_path')) {
                $fileLocation_pipe_column_water_output_water_ph_value_condition_image_path = $this->fileRelocated($request->pipe_column_water_output_water_ph_value_condition_image_path, 'maintenance/pipe-column-water-output');
                $maintenance_column_pipe_water_output->water_ph_value_condition_image_path = $fileLocation_pipe_column_water_output_water_ph_value_condition_image_path;
            }

            if ($request->filled('pipe_column_water_output_column_pipe_condition')) {
                $maintenance_column_pipe_water_output->column_pipe_condition = $request->pipe_column_water_output_column_pipe_condition;
            }
            
            if ($request->filled('pipe_column_water_output_output_pipe_condition')) {
                $maintenance_column_pipe_water_output->output_pipe_condition = $request->pipe_column_water_output_output_pipe_condition;
            }

            if ($request->filled('pipe_column_water_output_valve_condition')) {
                $maintenance_column_pipe_water_output->valve_condition = $request->pipe_column_water_output_valve_condition;
            }
            
            if ($request->filled('pipe_column_water_output_flap_condition')) {
                $maintenance_column_pipe_water_output->flap_condition = $request->pipe_column_water_output_flap_condition;
            }

            if ($request->filled('pipe_column_water_output_water_output_condition')) {
                $maintenance_column_pipe_water_output->water_output_condition = $request->pipe_column_water_output_water_output_condition;
            }

            $maintenance_column_pipe_water_output->status = 'waiting_approval';
            
            $maintenance_column_pipe_water_output->save();


            
            $maintenance_sensor_test = new MaintenanceSensorTest();

            $maintenance_sensor_test->maintenance_id = $maintenance->id;

            if ($request->filled('test_sensor_pump_fault_temperature_sensor')) {
                $maintenance_sensor_test->pump_fault_temperature_sensor = $request->test_sensor_pump_fault_temperature_sensor;
            }

            if ($request->filled('test_sensor_pump_fault_wlc_sensor')) {
                $maintenance_sensor_test->pump_fault_wlc_sensor = $request->test_sensor_pump_fault_wlc_sensor;
            }
            
            if ($request->filled('test_sensor_pump_fault_voltage_sensor')) {
                $maintenance_sensor_test->pump_fault_voltage_sensor = $request->test_sensor_pump_fault_voltage_sensor;
            }

            if ($request->filled('test_sensor_pump_fault_vsd_sensor')) {
                $maintenance_sensor_test->pump_fault_vsd_sensor = $request->test_sensor_pump_fault_vsd_sensor;
            }

            if ($request->filled('test_sensor_low_water_temperature_sensor')) {
                $maintenance_sensor_test->low_water_temperature_sensor = $request->test_sensor_low_water_temperature_sensor;
            }

            if ($request->filled('test_sensor_low_water_wlc_sensor')) {
                $maintenance_sensor_test->low_water_wlc_sensor = $request->test_sensor_low_water_wlc_sensor;
            }
            
            if ($request->filled('test_sensor_low_water_voltage_sensor')) {
                $maintenance_sensor_test->low_water_voltage_sensor = $request->test_sensor_low_water_voltage_sensor;
            }

            if ($request->filled('test_sensor_low_water_vsd_sensor')) {
                $maintenance_sensor_test->low_water_vsd_sensor = $request->test_sensor_low_water_vsd_sensor;
            }

            if ($request->filled('test_sensor_voltage_fault_temperature_sensor')) {
                $maintenance_sensor_test->voltage_fault_temperature_sensor = $request->test_sensor_voltage_fault_temperature_sensor;
            }

            if ($request->filled('test_sensor_voltage_fault_wlc_sensor')) {
                $maintenance_sensor_test->voltage_fault_wlc_sensor = $request->test_sensor_voltage_fault_wlc_sensor;
            }
            
            if ($request->filled('test_sensor_voltage_fault_voltage_sensor')) {
                $maintenance_sensor_test->voltage_fault_voltage_sensor = $request->test_sensor_voltage_fault_voltage_sensor;
            }

            if ($request->filled('test_sensor_voltage_fault_vsd_sensor')) {
                $maintenance_sensor_test->voltage_fault_vsd_sensor = $request->test_sensor_voltage_fault_vsd_sensor;
            }

            if ($request->filled('test_sensor_vsd_vault_temperature_sensor')) {
                $maintenance_sensor_test->vsd_vault_temperature_sensor = $request->test_sensor_vsd_vault_temperature_sensor;
            }

            if ($request->filled('test_sensor_vsd_vault_wlc_sensor')) {
                $maintenance_sensor_test->vsd_vault_wlc_sensor = $request->test_sensor_vsd_vault_wlc_sensor;
            }
            
            if ($request->filled('test_sensor_vsd_vault_voltage_sensor')) {
                $maintenance_sensor_test->vsd_vault_voltage_sensor = $request->test_sensor_vsd_vault_voltage_sensor;
            }

            if ($request->filled('test_sensor_vsd_vault_vsd_sensor')) {
                $maintenance_sensor_test->vsd_vault_vsd_sensor = $request->test_sensor_vsd_vault_vsd_sensor;
            }

            if ($request->filled('test_sensor_trouble_alarm_temperature_sensor')) {
                $maintenance_sensor_test->trouble_alarm_temperature_sensor = $request->test_sensor_trouble_alarm_temperature_sensor;
            }

            if ($request->filled('test_sensor_trouble_alarm_wlc_sensor')) {
                $maintenance_sensor_test->trouble_alarm_wlc_sensor = $request->test_sensor_trouble_alarm_wlc_sensor;
            }
            
            if ($request->filled('test_sensor_trouble_alarm_voltage_sensor')) {
                $maintenance_sensor_test->trouble_alarm_voltage_sensor = $request->test_sensor_trouble_alarm_voltage_sensor;
            }

            if ($request->filled('test_sensor_trouble_alarm_vsd_sensor')) {
                $maintenance_sensor_test->trouble_alarm_vsd_sensor = $request->test_sensor_trouble_alarm_vsd_sensor;
            }

            if ($request->filled('test_sensor_pump_trip_temperature_sensor')) {
                $maintenance_sensor_test->pump_trip_temperature_sensor = $request->test_sensor_pump_trip_temperature_sensor;
            }

            if ($request->filled('test_sensor_pump_trip_wlc_sensor')) {
                $maintenance_sensor_test->pump_trip_wlc_sensor = $request->test_sensor_pump_trip_wlc_sensor;
            }
            
            if ($request->filled('test_sensor_pump_trip_voltage_sensor')) {
                $maintenance_sensor_test->pump_trip_voltage_sensor = $request->test_sensor_pump_trip_voltage_sensor;
            }

            if ($request->filled('test_sensor_pump_trip_vsd_sensor')) {
                $maintenance_sensor_test->pump_trip_vsd_sensor = $request->test_sensor_pump_trip_vsd_sensor;
            }

            $maintenance_sensor_test->status = 'waiting_approval';
            
            $maintenance_sensor_test->save();


            $maintenance_megger = new MaintenanceMegger();

            $maintenance_megger->maintenance_id = $maintenance->id;

            if ($request->filled('megger_technician')) {
                $maintenance_megger->technician = $request->megger_technician;
            }

            if ($request->filled('megger_location')) {
                $maintenance_megger->location = $request->megger_location;
            }
            
            if ($request->filled('megger_serial_number')) {
                $maintenance_megger->serial_number = $request->megger_serial_number;
            }

            if ($request->filled('megger_unit')) {
                $maintenance_megger->unit = $request->megger_unit;
            }
            
            if ($request->filled('megger_date')) {
                $maintenance_megger->date = $request->megger_date;
            }

            if ($request->filled('megger_running_hours')) {
                $maintenance_megger->running_hours = $request->megger_running_hours;
            }

            $maintenance_megger->status = 'waiting_approval';
            
            $maintenance_megger->save();


            $maintenance_insulation = new MaintenanceInsulation();

            $maintenance_insulation->maintenance_id = $maintenance->id;

            if ($request->filled('insulation_u1_pe')) {
                $maintenance_insulation->u1_pe = $request->insulation_u1_pe;
            }

            if ($request->filled('insulation_u1_pe_image_path')) {
                $fileLocation_insulation_u1_pe_image_path = $this->fileRelocated($request->insulation_u1_pe_image_path, 'maintenance/insulation');
                $maintenance_insulation->u1_pe_image_path = $fileLocation_insulation_u1_pe_image_path;
            }

            if ($request->filled('insulation_v1_pe')) {
                $maintenance_insulation->v1_pe = $request->insulation_v1_pe;
            }

            if ($request->filled('insulation_v1_pe_image_path')) {
                $fileLocation_insulation_v1_pe_image_path = $this->fileRelocated($request->insulation_v1_pe_image_path, 'maintenance/insulation');
                $maintenance_insulation->v1_pe_image_path = $fileLocation_insulation_v1_pe_image_path;
            }

            if ($request->filled('insulation_w1_pe')) {
                $maintenance_insulation->w1_pe = $request->insulation_w1_pe;
            }

            if ($request->filled('insulation_w1_pe_image_path')) {
                $fileLocation_insulation_w1_pe_image_path = $this->fileRelocated($request->insulation_w1_pe_image_path, 'maintenance/insulation');
                $maintenance_insulation->w1_pe_image_path = $fileLocation_insulation_w1_pe_image_path;
            }

            if ($request->filled('insulation_u2_pe')) {
                $maintenance_insulation->u2_pe = $request->insulation_u2_pe;
            }

            if ($request->filled('insulation_u2_pe_image_path')) {
                $fileLocation_insulation_u2_pe_image_path = $this->fileRelocated($request->insulation_u2_pe_image_path, 'maintenance/insulation');
                $maintenance_insulation->u2_pe_image_path = $fileLocation_insulation_u2_pe_image_path;
            }

            if ($request->filled('insulation_v2_pe')) {
                $maintenance_insulation->v2_pe = $request->insulation_v2_pe;
            }

            if ($request->filled('insulation_v2_pe_image_path')) {
                $fileLocation_insulation_v2_pe_image_path = $this->fileRelocated($request->insulation_v2_pe_image_path, 'maintenance/insulation');
                $maintenance_insulation->v2_pe_image_path = $fileLocation_insulation_v2_pe_image_path;
            }

            if ($request->filled('insulation_w2_pe')) {
                $maintenance_insulation->w2_pe = $request->insulation_w2_pe;
            }

            if ($request->filled('insulation_w2_pe_image_path')) {
                $fileLocation_insulation_w2_pe_image_path = $this->fileRelocated($request->insulation_w2_pe_image_path, 'maintenance/insulation');
                $maintenance_insulation->w2_pe_image_path = $fileLocation_insulation_w2_pe_image_path;
            }

            if ($request->filled('insulation_u1_v2')) {
                $maintenance_insulation->u1_v2 = $request->insulation_u1_v2;
            }

            if ($request->filled('insulation_u1_w2')) {
                $maintenance_insulation->u1_w2 = $request->insulation_u1_w2;
            }
            
            if ($request->filled('insulation_v1_u2')) {
                $maintenance_insulation->v1_u2 = $request->insulation_v1_u2;
            }

            if ($request->filled('insulation_v1_w2')) {
                $maintenance_insulation->v1_w2 = $request->insulation_v1_w2;
            }
            
            if ($request->filled('insulation_w1_u2')) {
                $maintenance_insulation->w1_u2 = $request->insulation_w1_u2;
            }

            if ($request->filled('insulation_w1_v2')) {
                $maintenance_insulation->w1_v2 = $request->insulation_w1_v2;
            }

            $maintenance_insulation->status = 'waiting_approval';
            
            $maintenance_insulation->save();


            $maintenance_resistance = new MaintenanceResistance();

            $maintenance_resistance->maintenance_id = $maintenance->id;

            if ($request->filled('resistance_pe_pe')) {
                $maintenance_resistance->pe_pe = $request->resistance_pe_pe;
            }

            if ($request->filled('resistance_pe_pe_image_path')) {
                $fileLocation_resistance_pe_pe_image_path = $this->fileRelocated($request->resistance_pe_pe_image_path, 'maintenance/resistance');
                $maintenance_resistance->pe_pe_image_path = $fileLocation_resistance_pe_pe_image_path;
            }

            if ($request->filled('resistance_u1_u2')) {
                $maintenance_resistance->u1_u2 = $request->resistance_u1_u2;
            }

            if ($request->filled('resistance_u1_u2_image_path')) {
                $fileLocation_resistance_u1_u2_image_path = $this->fileRelocated($request->resistance_u1_u2_image_path, 'maintenance/resistance');
                $maintenance_resistance->u1_u2_image_path = $fileLocation_resistance_u1_u2_image_path;
            }

            if ($request->filled('resistance_v1_v2')) {
                $maintenance_resistance->v1_v2 = $request->resistance_v1_v2;
            }

            if ($request->filled('resistance_v1_v2_image_path')) {
                $fileLocation_resistance_v1_v2_image_path = $this->fileRelocated($request->resistance_v1_v2_image_path, 'maintenance/resistance');
                $maintenance_resistance->v1_v2_image_path = $fileLocation_resistance_v1_v2_image_path;
            }

            if ($request->filled('resistance_w1_w2')) {
                $maintenance_resistance->w1_w2 = $request->resistance_w1_w2;
            }

            if ($request->filled('resistance_w1_w2_image_path')) {
                $fileLocation_resistance_w1_w2_image_path = $this->fileRelocated($request->resistance_w1_w2_image_path, 'maintenance/resistance');
                $maintenance_resistance->w1_w2_image_path = $fileLocation_resistance_w1_w2_image_path;
            }

            $maintenance_resistance->status = 'waiting_approval';
            
            $maintenance_resistance->save();


            $maintenance_pump_condition = new MaintenancePumpCondition();

            $maintenance_pump_condition->maintenance_id = $maintenance->id;

            if ($request->filled('pump_condition_pump_body_note')) {
                $maintenance_pump_condition->pump_body_note = $request->pump_condition_pump_body_note;
            }

            if ($request->filled('pump_condition_pump_body')) {
                $maintenance_pump_condition->pump_body = $request->pump_condition_pump_body;
            }

            if ($request->filled('pump_condition_wearing_ring_note')) {
                $maintenance_pump_condition->wearing_ring_note = $request->pump_condition_wearing_ring_note;
            }

            if ($request->filled('pump_condition_wearing_ring')) {
                $maintenance_pump_condition->wearing_ring = $request->pump_condition_wearing_ring;
            }
            
            if ($request->filled('pump_condition_pump_bolt_note')) {
                $maintenance_pump_condition->pump_bolt_note = $request->pump_condition_pump_bolt_note;
            }

            if ($request->filled('pump_condition_pump_bolt')) {
                $maintenance_pump_condition->pump_bolt = $request->pump_condition_pump_bolt;
            }

            if ($request->filled('pump_condition_column_pipe_bolt_note')) {
                $maintenance_pump_condition->column_pipe_bolt_note = $request->pump_condition_column_pipe_bolt_note;
            }

            if ($request->filled('pump_condition_column_pipe_bolt')) {
                $maintenance_pump_condition->column_pipe_bolt = $request->pump_condition_column_pipe_bolt;
            }
            
            if ($request->filled('pump_condition_impeller_note')) {
                $maintenance_pump_condition->impeller_note = $request->pump_condition_impeller_note;
            }
            
            if ($request->filled('pump_condition_impeller')) {
                $maintenance_pump_condition->impeller = $request->pump_condition_impeller;
            }

            if ($request->filled('pump_condition_cable_note')) {
                $maintenance_pump_condition->cable_note = $request->pump_condition_cable_note;
            }
            
            if ($request->filled('pump_condition_cable')) {
                $maintenance_pump_condition->cable = $request->pump_condition_cable;
            }

            if ($request->filled('pump_condition_pump_condition_note')) {
                $maintenance_pump_condition->pump_condition_note = $request->pump_condition_pump_condition_note;
            }

            if ($request->filled('pump_condition_pump_condition')) {
                $maintenance_pump_condition->pump_condition = $request->pump_condition_pump_condition;
            }

            $maintenance_pump_condition->status = 'waiting_approval';
            
            $maintenance_pump_condition->save();


            $maintenance_documentation = new MaintenanceDocumentation();

            $maintenance_documentation->maintenance_id = $maintenance->id;

            if ($request->filled('documentation_tightening_panel_bolts')) {
                $fileLocation_documentation_tightening_panel_bolts = $this->fileRelocated($request->documentation_tightening_panel_bolts, 'maintenance/documentation');
                $maintenance_documentation->tightening_panel_bolts = $fileLocation_documentation_tightening_panel_bolts;
            }

            if ($request->filled('documentation_cleaning_panel_with_cloth')) {
                $fileLocation_documentation_cleaning_panel_with_cloth = $this->fileRelocated($request->documentation_cleaning_panel_with_cloth, 'maintenance/documentation');
                $maintenance_documentation->cleaning_panel_with_cloth = $fileLocation_documentation_cleaning_panel_with_cloth;
            }

            if ($request->filled('documentation_cleaning_panel_with_brush')) {
                $fileLocation_documentation_cleaning_panel_with_brush = $this->fileRelocated($request->documentation_cleaning_panel_with_brush, 'maintenance/documentation');
                $maintenance_documentation->cleaning_panel_with_brush = $fileLocation_documentation_cleaning_panel_with_brush;
            }

            if ($request->filled('documentation_cleaning_panel_with_vacuum')) {
                $fileLocation_documentation_cleaning_panel_with_vacuum = $this->fileRelocated($request->documentation_cleaning_panel_with_vacuum, 'maintenance/documentation');
                $maintenance_documentation->cleaning_panel_with_vacuum = $fileLocation_documentation_cleaning_panel_with_vacuum;
            }

            if ($request->filled('documentation_panel_condition_after_cleaning')) {
                $fileLocation_documentation_panel_condition_after_cleaning = $this->fileRelocated($request->documentation_panel_condition_after_cleaning, 'maintenance/documentation');
                $maintenance_documentation->panel_condition_after_cleaning = $fileLocation_documentation_panel_condition_after_cleaning;
            }

            if ($request->filled('documentation_junction_box_after_cleaning')) {
                $fileLocation_documentation_junction_box_after_cleaning = $this->fileRelocated($request->documentation_junction_box_after_cleaning, 'maintenance/documentation');
                $maintenance_documentation->junction_box_after_cleaning = $fileLocation_documentation_junction_box_after_cleaning;
            }

            if ($request->filled('documentation_water_level')) {
                $fileLocation_documentation_water_level = $this->fileRelocated($request->documentation_water_level, 'maintenance/documentation');
                $maintenance_documentation->water_level = $fileLocation_documentation_water_level;
            }

            if ($request->filled('documentation_pump_cleaning')) {
                $fileLocation_documentation_pump_cleaning = $this->fileRelocated($request->documentation_pump_cleaning, 'maintenance/documentation');
                $maintenance_documentation->pump_cleaning = $fileLocation_documentation_pump_cleaning;
            }

            if ($request->filled('documentation_lifting_pump')) {
                $fileLocation_documentation_lifting_pump = $this->fileRelocated($request->documentation_lifting_pump, 'maintenance/documentation');
                $maintenance_documentation->lifting_pump = $fileLocation_documentation_lifting_pump;
            }

            if ($request->filled('documentation_replacing_pump_oil')) {
                $fileLocation_documentation_replacing_pump_oil = $this->fileRelocated($request->documentation_replacing_pump_oil, 'maintenance/documentation');
                $maintenance_documentation->replacing_pump_oil = $fileLocation_documentation_replacing_pump_oil;
            }

            if ($request->filled('documentation_tightening_pump_bolts')) {
                $fileLocation_documentation_tightening_pump_bolts = $this->fileRelocated($request->documentation_tightening_pump_bolts, 'maintenance/documentation');
                $maintenance_documentation->tightening_pump_bolts = $fileLocation_documentation_tightening_pump_bolts;
            }

            if ($request->filled('documentation_cleaning_pump_impeller')) {
                $fileLocation_documentation_cleaning_pump_impeller = $this->fileRelocated($request->documentation_cleaning_pump_impeller, 'maintenance/documentation');
                $maintenance_documentation->cleaning_pump_impeller = $fileLocation_documentation_cleaning_pump_impeller;
            }

            $maintenance_documentation->status = 'waiting_approval';
            
            $maintenance_documentation->save();




    
                return back()->with('success', 'File berhasil diunggah.');

        } catch (\Exception $e) {
            // Tangkap error dan kirim pesan ke session
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
