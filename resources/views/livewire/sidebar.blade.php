
 <!-- drawer component -->
 <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-screen h-screen overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <div class="p-4">
        <a href="">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </a>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-3 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
            <svg aria-hidden="true" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
   <div class="py-4 overflow-y-auto bg-teal-50 h-auto p-4">
       <ul class="space-y-6 font-medium" id="tabs-example" role="tablist">
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer"  id="trigger-pump-data" aria-controls="target-pump-data" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Data Pompa</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenancePumpData">
            </div>
          </li>
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-lvmdp" aria-controls="target-lvmdp" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Lvmdp</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenanceLvmdp">
            </div>
          </li>
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-junction-box" aria-controls="target-junction-box" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Junction Box</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenanceJunctionBox">
            </div>
          </li>
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-panel" aria-controls="target-panel" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Panel</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenancePanel">
            </div>
          </li>
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-panel-function" aria-controls="target-panel-function" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Fungsi Panel</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenancePanelFunction">
            </div>
          </li>
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-elektrikal-mekanikal" aria-controls="target-elektrikal-mekanikal" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Elektrikal & Mekanikal</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenanceElectricalMechanical">
            </div>
          </li>
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-pipe-column-water-output" aria-controls="target-pipe-column-water-output" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Pipa Kolom & Output Air</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenancePipeColumnWaterOutput">
            </div>
          </li>
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-test-censor" aria-controls="target-test-censor" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Sensor Test</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenanceTestCensor">
            </div>
          </li>
          @if ($maintenance_type == 'full')
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-insulation" aria-controls="target-insulation" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Insulasi</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenanceInsulation">
            </div>
          </li>
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-resistance" aria-controls="target-resistance" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Resistensi</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenanceResistance">
            </div>
          </li>
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-pump-condition" aria-controls="target-pump-condition" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Kondisi Pompa</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenancePumpCondition">
            </div>
          </li>
          @endif
          <li class="p-6 bg-white border border-gray-200 rounded-lg cursor-pointer" id="trigger-documentation" aria-controls="target-documentation" data-drawer-hide="drawer-navigation">
            <h3 class="mb-3 text-lg">Dokumentasi</h3>
            <div class="flex gap-2 items-center" id="sidebarMaintenanceDocumentation">
            </div>
          </li>
       </ul>
       <div class="flex justify-end">
           <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="text-white font-semibold bg-blue-600 border border-gray-300 rounded-lg text-sm px-6 py-2.5 me-2 my-5" type="button">
            Submit
           </button>
       </div>
    </div>
 </div>
 
