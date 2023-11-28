<div>
    <x-container title="Manage Donor" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
        <div class="grid grid-cols-1">
            <div>
                <x-table.table>
                    <x-slot name="thead">
                        <x-table.table-header class="text-center" value="Donation ID" sort="" />
                        <x-table.table-header class="text-center" value="Donor ID" sort="" />
                        <x-table.table-header class="text-center" value="Blood Group" sort="" />
                        <x-table.table-header class="text-center" value="Blood ID" sort="" />
                        <x-table.table-header class="text-center" value="Donation Date" sort="" />
                        <x-table.table-header class="text-center" value="Edit" sort="" />
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($datadonate as $item)
                        <tr>
                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                {{$item ->donation_id}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                {{$item ->donor_id}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                {{$item ->blood_group}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                {{$item ->blood_id}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                {{$item ->donation_date}}
                            </x-table.table-body>

                            <x-table.table-body class="text-xs font-medium text-gray-700 text-center">
                                <div class="flex items-center space-x-2">
                                    <x-button class="bg-green-500 text-white" wire:click="openModalUpdate('{{$item->id}}')" label="Update" />
                                    <x-button class="bg-red-500 text-white" wire:click="delete('{{$item->id}}')" label="Delete" />
                                </div>
                            </x-table.table-body>
                        </tr>
                        @endforeach
                    </x-slot>
                </x-table.table>
            </div>
        </div>

        <!--UPDATE DONOR -->
        <div>
            <x-modal.card title="Edit Donor" blur wire:model.defer="updateModal">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <x-input label="Donation ID" placeholder="donation id" wire:model.defer="donation_id" />
                        <x-select
                            label="Blood Group"
                            placeholder="select blood group"
                            :options="['A+', 'A-', 'O+', 'O-', 'B+', 'B-', 'AB+','AB-' ]"
                            wire:model.defer="blood_group"
                        />
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <x-input type="date" label="Donation Date" wire:model.defer="donation_date" />
                        <x-input label="Blood ID" placeholder="blood id" wire:model.defer="blood_id" />
                    </div>
                    
                    <x-slot name="footer">
                        <div class="flex justify-end gap-x-4">
                            <x-button flat label="Close" x-on:click="close" />
                            <x-button primary label="Update" wire:click="update('{{$donor_id}}')" />
                        </div>
                    </x-slot>
            </x-modal.card>
        <div>
    </x-container>
    </div>
</div>

{{-- <div>
    <x-container title="View Donor" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
        <div class="grid grid-cols-1">
            <div>
                <x-table.table>
                    <x-slot name="thead">
                        <x-table.table-header class="text-center" value="Patient ID" sort="" />
                        <x-table.table-header class="text-center" value="Blood ID" sort="" />
                        <x-table.table-header class="text-center" value="Transfer Date" sort="" />
                        <x-table.table-header class="text-center" value="Transfer Location" sort="" />
                        <x-table.table-header class="text-center" value="Blood Group" sort="" />
                        <x-table.table-header class="text-center" value="Edit" sort="" />
                    </x-slot>
                    <x-slot name="tbody">
                        <tr>
                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                               1
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                1
                             </x-table.table-body>

                             <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                1
                             </x-table.table-body>

                             <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                1
                             </x-table.table-body>

                             <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                1
                             </x-table.table-body>

                             <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                1
                             </x-table.table-body>
                        </tr>
                    </x-slot>
                </x-table.table>
            </div>
        </x-container>
    </div>
</div> --}}
