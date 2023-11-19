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
                            <x-table.table-header class="text-center" value="Hospital Contact" sort="" />
                            <x-table.table-header class="text-center" value="Edit" sort="" />

                        </x-slot>
                        <x-slot name="tbody">
                            @foreach ($dataPatient as $item)
                            <tr>
                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                                {{$item ->patient_id}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                                {{$item ->patient_full_name}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                                {{$item ->date}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                                {{$item ->phone_number}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                                {{$item ->gender}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                                {{$item ->required_blood_group}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                                {{$item ->hospital_address}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                                {{$item ->hospital_name}}
                            </x-table.table-body>

                            <x-table.table-body colspan="" class="text-xs font-medium text-gray-700">
                                {{$item ->hospital_contact}}
                            </x-table.table-body>

                            <x-table.table-body class="text-xs font-medium text-gray-700">
                                    <div class="flex items-center space-x-2">
                                        <x-button class="bg-green-500 text-white" wire:click="openModalUpdate('{{$item->id}}')" label="Update" />
                                        <x-button class="bg-red-500 text-white" wire:click="delete('{{$item->id}}')" label="Delete" />
                                    </div>
                            </x-table.table-body>
                            </tr>
                            @endforeach
                        </x-slot>
                </x-table.table>

                <!--UPDATE PATIENT-->
                <div>
                    <x-modal.card title="Edit Patient" blur wire:model.defer="updateModal">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <x-input label="Patient ID" placeholder="patient id" wire:model.defer="patient_id" />
                            <x-input label="Full Name" placeholder="full name" wire:model.defer="patient_full_name" />
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                            <x-input type="date" label="Birth date" wire:model.defer="date" />
                            <x-input label="Phone Number" placeholder="phone number" wire:model.defer="phone_number" />
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                            <x-select
                                label="Gender"
                                placeholder="select Gender"
                                :options="['Male', 'Female']"
                                wire:model.defer="gender"
                            />
                            <x-select
                                label="Required Blood Group"
                                placeholder="select blood group"
                                :options="['A+', 'A-', 'O+', 'O-', 'B+', 'B-', 'AB+','AB-' ]"
                                wire:model.defer="required_blood_group"
                            />
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                            <div class="col-span-1 sm:col-span-2">
                                <x-input label="Hospital Address" placeholder="hospital address" wire:model.defer="hospital_address" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                            <x-input label="Hospital Name" placeholder="hospital name" wire:model.defer="hospital_name" />
                            <x-input label="Hospital Contact" placeholder="hospital contact" wire:model.defer="hospital_contact" />
                        </div>

                        <x-slot name="footer">
                            <div class="flex justify-end gap-x-4">
                                <x-button flat label="Close" x-on:click="close" />
                                <x-button primary label="Update" wire:click="update('{{$patient_id}}')" />
                            </div>
                        </x-slot>
                    </x-modal.card>
                <div>
            </div>
        </div>
    </x-container>
</div>
