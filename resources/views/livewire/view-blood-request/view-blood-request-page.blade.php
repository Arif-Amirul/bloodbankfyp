<div>
    <x-container title="Manage Blood Transfer" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
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
                            <x-table.table-header class="text-center" value="Edit" sort="" />
                            <x-table.table-header class="text-center" value="Detail" sort="" />
                        </x-slot>
                        <x-slot name="tbody">
                            @foreach ($datatransfer as $item)
                                <tr>
                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                        {{$item ->transfer_id}}
                                    </x-table.table-body>

                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                        {{$item ->transfer_date}}
                                    </x-table.table-body>

                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                        {{$item ->location}}
                                    </x-table.table-body>

                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                        {{$item ->required_blood_group}}
                                    </x-table.table-body>

                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                        {{$item ->patient_id}}
                                    </x-table.table-body>

                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                        {{$item ->blood_id}}
                                    </x-table.table-body>

                                    <x-table.table-body class="text-xs font-medium text-gray-700">
                                        <div class="flex items-center space-x-2">
                                            {{-- <x-button class="bg-green-500 text-white" wire:click="openModalUpdate('{{$item->id}}')" label="Update" /> --}}
                                            <x-button class="bg-red-500 text-white" wire:click="delete('{{$item->id}}')" label="Delete" />
                                        </div>
                                    </x-table.table-body>

                                    <x-table.table-body class="text-xs font-medium text-gray-700">
                                        <div class="flex items-center space-x-2">
                                            <x-button class="bg-blue-500 text-white" wire:click="openModalDetail('{{$item->id}}')" label="Detail" />
                                        </div>
                                    </x-table.table-body>
                                </tr>
                            @endforeach
                            </x-slot>
                    </x-table.table>

                    <!--UPDATE BLOOD REQUEST -->
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

                    <!--VIEW DETAIL -->
                    <div>
                        <x-modal.card title="DETAILS" blur wire:model.defer="details" max-width="9xl">
                            <div>
                                <x-table.table>
                                    <x-slot name="thead">
                                                <x-table.table-header class="text-center" value="Patient ID" sort="" />
                                                <x-table.table-header class="text-center" value="Patient Full Name" sort="" />
                                                <x-table.table-header class="text-center" value="Blood Group" sort="" />
                                                <x-table.table-header class="text-center" value="Birth Date" sort="" />
                                                <x-table.table-header class="text-center" value="Phone Number" sort="" />
                                                <x-table.table-header class="text-center" value="Gender" sort="" />
                                                <x-table.table-header class="text-center" value="Location" sort="" />
                                                <x-table.table-header class="text-center" value="Contact" sort="" />
                                                <x-table.table-header class="text-center" value="Transfer Date" sort="" />

                                    </x-slot>
                                            <x-slot name="tbody">
                                                <tr>
                                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                                        {{ $patient_id }}
                                                    </x-table.table-body>
                                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                                        {{ $patient_full_name }}
                                                    </x-table.table-body>
                                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                                        {{ $required_blood_group }}
                                                    </x-table.table-body>
                                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                                        {{ $date }}
                                                    </x-table.table-body>
                                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                                        {{ $phone_number }}
                                                    </x-table.table-body>
                                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                                        {{ $gender }}
                                                    </x-table.table-body>
                                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                                        {{ $location }}
                                                    </x-table.table-body>
                                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                                        {{ $contact }}
                                                    </x-table.table-body>
                                                    <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 text-center">
                                                        {{ $transfer_date }}
                                                    </x-table.table-body>
                                                </tr>
                                            </x-slot>
                                </x-table.table>
                            </div>
                            <x-slot name="footer">
                                <div class="flex justify-end gap-x-4">
                                    <x-button flat label="Close" x-on:click="close" />
                                </div>
                            </x-slot>
                        </x-modal.card>
                    </div>
                </div>
            </div>
    </x-container>
</div>
