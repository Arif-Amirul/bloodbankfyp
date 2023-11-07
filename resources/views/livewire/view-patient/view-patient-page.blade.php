<div>
    <x-container title="View Patient Page" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
        <div class="grid grid-cols-1">
            <div>
            <x-table.table>
                    <x-slot name="thead">
                        <x-table.table-header class="text-center" value="Patient ID" sort="" />
                        <x-table.table-header class="text-center" value="Full Name" sort="" />
                        <x-table.table-header class="text-center" value="Date" sort="" />
                        <x-table.table-header class="text-center" value="Phone Number" sort="" />
                        <x-table.table-header class="text-center" value="Gender" sort="" />
                        <x-table.table-header class="text-center" value="Blood Group" sort="" /> 
                        <x-table.table-header class="text-center" value="Hospital Address" sort="" />
                        <x-table.table-header class="text-center" value="Hospital Name" sort="" />
                        <x-table.table-header class="text-center" value="Quantity Required" sort="" />
                        <x-table.table-header class="text-center" value="Edit" sort="" /> 

                    </x-slot>
                    <x-slot name="tbody">
                       
                        <tr>
                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            1
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                             1
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            1
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            1
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            1
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            1
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            1
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            1
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            1
                        </x-table.table-body>

                           <x-table.table-body class="text-xs font-medium text-gray-700">
                                <div class="flex items-center space-x-2">
                                    <x-button class="bg-green-500 text-white" wire:click="" label="Update" />
                                    <x-button primary wire:click="delete" label="Delete" />
                                </div>
                            </x-table.table-body>
                        </tr>
                     
                    </x-slot>
                </x-table.table>
            </div>
        </div>
    </x-container>
</div>
