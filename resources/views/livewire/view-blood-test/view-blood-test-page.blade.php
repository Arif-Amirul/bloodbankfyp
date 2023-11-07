<div>
    <x-container title="View Blood Test" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
        <div class="grid grid-cols-1">
            <div>
            <x-table.table>
                    <x-slot name="thead">
                        <x-table.table-header class="text-center" value="Donor ID" sort="" />
                        <x-table.table-header class="text-center" value="Blood ID" sort="" />
                        <x-table.table-header class="text-center" value="Date" sort="" />
                        <x-table.table-header class="text-center" value="Blood Group" sort="" />
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
                        @foreach ($datablood as $itemblood)
                        <tr>
                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->donor_id}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->blood_id}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->date}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->white_blood_cells}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->neutrophils}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->red_blood_cells}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->haemoglobin}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->hematocrit}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->mcv}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->platelets}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->cd4_cd8}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->hiv_test}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->glicaemia}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->transferrin}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->ferritim}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->sodium}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->potassium}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->calcium}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->plasma_proteins}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->albumin}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->prealbumin}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->gamma_globulins}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->alt}}
                        </x-table.table-body>

                        <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                            {{$itemblood->gamma_gt}}
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
