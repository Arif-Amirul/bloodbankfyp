<div>
    <x-container title="View Blood Test" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
        <div class="grid grid-cols-1">
            <div>
            <x-table.table>
                    <x-slot name="thead">
                        <x-table.table-header class="text-center" value="Donor ID" sort="" />
                        <x-table.table-header class="text-center" value="Blood ID" sort="" />
                        <x-table.table-header class="text-center" value="Date" sort="" />
                        <x-table.table-header class="text-center" value="White blood cells" sort="" />
                        <x-table.table-header class="text-center" value="Neutrophils" sort="" />
                        <x-table.table-header class="text-center" value="Red blood cells" sort="" />
                        <x-table.table-header class="text-center" value="Haemoglobin" sort="" />
                        <x-table.table-header class="text-center" value="Hematocrit" sort="" />
                        <x-table.table-header class="text-center" value="MCV" sort="" />
                        <x-table.table-header class="text-center" value="Platelets" sort="" />
                        <x-table.table-header class="text-center" value="CD4+/CD8+" sort="" />
                        <x-table.table-header class="text-center" value="HIV test" sort="" />
                        <x-table.table-header class="text-center" value="Glicaemia" sort="" />
                        <x-table.table-header class="text-center" value="Transferrin" sort="" />
                        <x-table.table-header class="text-center" value="Ferritim" sort="" />
                        <x-table.table-header class="text-center" value="Na+" sort="" />
                        <x-table.table-header class="text-center" value="K+" sort="" />
                        <x-table.table-header class="text-center" value="Ca++" sort="" />
                        <x-table.table-header class="text-center" value="Plasma proteins" sort="" />
                        <x-table.table-header class="text-center" value="Albumin" sort="" />
                        <x-table.table-header class="text-center" value="Prealbumin" sort="" />
                        <x-table.table-header class="text-center" value="Gamma globulins" sort="" />
                        <x-table.table-header class="text-center" value="ALT" sort="" />
                        <x-table.table-header class="text-center" value="Gamma GT" sort="" />
                        <x-table.table-header class="text-center" value="Edit" sort="" />

                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($blooddata as $item)
                        <tr>
                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->blood_id}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->blood_id}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->date}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->white_blood_cells}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->neutrophils}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->red_blood_cells}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->haemoglobin}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->hematrocrit}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->mcv}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->platelets}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->cd4_cd8}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->hiv_test}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->glicaemia}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->transferrin}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->ferritim}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->sodium}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->potassium}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->calcium}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->plasma_proteins}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->albumin}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->prealbumin}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->gamma_globulins}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->alt}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$item ->gamma_gt}}
                        </x-table.table-body>

                        <x-table.table-body class="text-xs font-medium text-gray-700">
                                <div class="flex items-center space-x-2">
                                    <x-button class="bg-green-500 text-white" wire:click="" label="Update" />
                                    <x-button primary wire:click="delete" label="Delete" />
                                </div>
                            </x-table.table-body>
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table.table>
            </div>
        </div>
    </x-container>
</div>
