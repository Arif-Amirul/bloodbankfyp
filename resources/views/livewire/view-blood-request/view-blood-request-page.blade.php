<div>
    <x-container title="View Blood Request" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
            <div class="grid grid-cols-1">
                <div>
                    <x-table.table>
                        <x-slot name="thead">
                            <x-table.table-header class="text-center" value="Transfer ID" sort="" />
                            <x-table.table-header class="text-center" value="Transfer Date" sort="" />
                            <x-table.table-header class="text-center" value="Location" sort="" />
                            <x-table.table-header class="text-center" value="Required Blood Group" sort="" />
                            <x-table.table-header class="text-center" value="Patient ID" sort="" />
                            <x-table.table-header class="text-center" value="Blood ID" sort="" />
                            {{-- <x-table.table-header class="text-center" value="Edit" sort="" /> --}}
                        </x-slot>
                        <x-slot name="tbody">
                            @foreach ($datatransfer as $item)
                                <tr>
                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700  ">
                                        {{$item ->transfer_id}}
                                    </x-table.table-body>

                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                        {{$item ->transfer_date}}
                                    </x-table.table-body>

                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                        {{$item ->location	}}
                                    </x-table.table-body>

                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                        {{$item ->required_blood_group}}
                                    </x-table.table-body>

                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                        {{$item ->patient_id}}
                                    </x-table.table-body>

                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                        {{$item ->blood_id}}
                                    </x-table.table-body>

                                    {{-- <x-table.table-body class="text-xs font-medium text-gray-700">
                                        <div class="flex items-center space-x-2">
                                            <x-button class="bg-green-500 text-white" wire:click="openModalUpdate('{{$item->id}}')" label="Update" />
                                            <x-button class="bg-red-500 text-white" wire:click="delete('{{$item->id}}')" label="Delete" />
                                        </div>
                                    </x-table.table-body> --}}
                                </tr>
                            @endforeach
                            </x-slot>
                    </x-table.table>

                    <!--UPDATE DONOR -->
                    {{-- <div>
                        <x-modal.card title="Edit Blood Request" blur wire:model.defer="updateModal">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <x-input label="Transfer ID" placeholder="transfer id" wire:model.defer="transfer_id" />
                                    <x-input type="date" label="Transfer Date" wire:model.defer="transfer_date" />
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                                    <x-input label="Location" placeholder="location" wire:model.defer="location" />

                                    <x-select
                                        label="Required Blood Group"
                                        placeholder="select blood group"
                                        :options="['A+', 'A-', 'O+', 'O-', 'B+', 'B-', 'AB+','AB-' ]"
                                        wire:model.defer="required_blood_group"
                                    />
                                </div>

                                <x-slot name="footer">
                                    <div class="flex justify-end gap-x-4">
                                        <x-button flat label="Close" x-on:click="close" />
                                        <x-button primary label="Update" wire:click="update('{{$transfer_id}}')" />
                                    </div>
                                </x-slot>
                        </x-modal.card>
                    <div> --}}

                </div>
            </div>
    </x-container>
</div>
