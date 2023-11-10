<div>
    <x-container title="View Donor" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
        <div class="grid grid-cols-1">
            <div>
                <x-table.table>
                    <x-slot name="thead">
                        <x-table.table-header class="text-center" value="Donor ID" sort="" />
                        <x-table.table-header class="text-center" value="Blood Group" sort="" />
                        <x-table.table-header class="text-center" value="Full Name" sort="" />
                        <x-table.table-header class="text-center" value="Phone Number" sort="" />
                        <x-table.table-header class="text-center" value="Marital Status" sort="" />
                        <x-table.table-header class="text-center" value="Date" sort="" />
                        <x-table.table-header class="text-center" value="Gender" sort="" />
                        <x-table.table-header class="text-center" value="Race" sort="" />
                        <x-table.table-header class="text-center" value="Street Address" sort="" />
                        <x-table.table-header class="text-center" value="City" sort="" />
                        <x-table.table-header class="text-center" value="State" sort="" />
                        <x-table.table-header class="text-center" value="Postal Code" sort="" />
                        <x-table.table-header class="text-center" value="Donation Date" sort="" />
                        <!--<x-table.table-header class="text-center" value="Donate" sort="" />-->
                        <x-table.table-header class="text-center" value="Blood Test" sort="" />
                        <x-table.table-header class="text-center" value="Edit" sort="" />
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($data as $item)
                            <tr>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->donor_id}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->blood_group}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->full_name}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->phone_number}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->marital_status}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->	date}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->	gender}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->race}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->street_address}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->city}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->state}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->postal_code}}
                                </x-table.table-body>
                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    {{$item ->donation_date}}
                                </x-table.table-body>

                                <!--<x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                    <x-button class="bg-yellow-500 text-white" wire:click="" label="View" />
                                </x-table.table-body>-->

                                <x-table.table-body colspan="" class="text-xs font-medium text-gray-700 ">
                                <div class="flex items-center space-x-2">
                                        <x-button class="bg-red-500 text-white" wire:click="openModalBloodTest" label="Add" />
                                        <x-button class="bg-blue-500 text-white" wire:click="viewModalBloodTest" label="View" />
                                    </div>
                                </x-table.table-body>

                                <x-table.table-body class="text-xs font-medium text-gray-700">
                                    <div class="flex items-center space-x-2">
                                        <x-button class="bg-green-500 text-white" wire:click="openModalUpdate('{{$item->id}}')" label="Update" />
                                        <x-button class="bg-red-500 text-white" wire:click="delete('{{$item->id}}')" label="Delete" />
                                        <x-button primary label="Save" wire:click="update('{{$item->id}}')" />
                                    </div>
                                </x-table.table-body>
                            </tr>
                        @endforeach
                        </x-slot>
                </x-table.table>


                    <!--ADD BLOOD TEST-->
                    <div>
                        <x-modal.card title="Add Blood Test" blur wire:model.defer="updateModalTest">

                             <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6">
                                <x-input label="Blood ID" placeholder="blood id" wire:model.defer="blood_id" />
                                <x-input type="date" label="Date" wire:model.defer="date" />
                            </div>

                            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6 mt-4">
                                <x-input label="White blood cells" placeholder="result" wire:model.defer="white_blood_cells" />
                                <x-input label="Neutrophils" placeholder="result" wire:model.defer="neutrophils" />
                                <x-input label="Red blood cells" placeholder="result" wire:model.defer="red_blood_cells" />
                            </div>

                            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6 mt-4">
                                <x-input label="Haemoglobin" placeholder="result" wire:model.defer="haemoglobin" />
                                <x-input label="Hematocrit" placeholder="result" wire:model.defer="hematrocrit" />
                                <x-input label="MCV" placeholder="result" wire:model.defer="mcv" />
                            </div>

                            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6 mt-4">
                                <x-input label="Platelets" placeholder="result" wire:model.defer="platelets" />
                                <x-input label="CD4+/CD8+" placeholder="result" wire:model.defer="cd4_cd8" />
                                <x-select
                                    label="HIV Test"
                                    placeholder="select result"
                                    :options="['Positive', 'Negative']"
                                    wire:model.defer="hiv_test"
                                />
                            </div>

                            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6 mt-4">
                                <x-input label="Glicaemia" placeholder="result" wire:model.defer="glicaemia" />
                                <x-input label="Transferrin" placeholder="result" wire:model.defer="transferrin" />
                                <x-input label="Ferritim" placeholder="result" wire:model.defer="ferritim" />
                            </div>

                            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6 mt-4">
                                <x-input label="Sodium" placeholder="result" wire:model.defer="sodium" />
                                <x-input label="Potassium" placeholder="result" wire:model.defer="potassium" />
                                <x-input label="Calcium" placeholder="result" wire:model.defer="calcium" />
                            </div>

                            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6 mt-4">
                                <x-input label="Plasma proteins" placeholder="result" wire:model.defer="plasma_proteins" />
                                <x-input label="Albumin" placeholder="result" wire:model.defer="albumin" />
                                <x-input label="Prealbumin" placeholder="result" wire:model.defer="prealbumin" />
                            </div>

                            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6 mt-4">
                                <x-input label="Gamma globulins" placeholder="result" wire:model.defer="gamma_globulins" />
                                <x-input label="ALT" placeholder="result" wire:model.defer="alt" />
                                <x-input label="Gamma GT" placeholder="result" wire:model.defer="gamma_gt" />
                            </div>

                            <x-slot name="footer">
                                <div class="flex justify-end gap-x-4">
                                    <x-button flat label="Close" x-on:click="close" />
                                    <x-button primary wire:click="create" label="Save" />
                                </div>
                            </x-slot>
                        </x-modal.card>
                    </div>

                    <!--VIEW BLOOD TEST-->
                    <div>
                        <x-modal.card title="View Blood Test" blur wire:model.defer="viewModalTest" max-width="9xl">
                            <div>
                                <x-table.table>
                                    <x-slot name="thead">
                                        <x-table.table-header class="text-center" colspan="" value="blood id" sort="" />
                                        <x-table.table-header class="text-center" colspan="" value="date" sort="" />

                                    </x-slot>
                                    <x-slot name="tbody">

                                        @foreach ($blooddata as $item)
                                        <tr>
                                            <x-table.table-body class="text-xs font-medium text-gray-700">
                                                {{$item ->blood_id}}
                                            </x-table.table-body>

                                            <x-table.table-body class="text-xs font-medium text-gray-700">
                                                {{$item ->date}}
                                            </x-table.table-body>
                                        </tr>
                                        @endforeach
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

                    <!--UPDATE DONOR -->
                    <div>
                        <x-modal.card title="Edit Donor" blur wire:model.defer="updateModal">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <x-input label="Donor ID" placeholder="donor id" wire:model.defer="donor_id" />
                                    <x-select
                                        label="Blood Group"
                                        placeholder="select blood group"
                                        :options="['A+', 'A-', 'O+', 'O-', 'B+', 'B-', 'AB+','AB-']"
                                        wire:model.defer="blood_group"
                                    />
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                                    <x-input label="Full Name" placeholder="full name" wire:model.defer="full_name" />
                                    <x-input label="Phone Number" placeholder="phone number" wire:model.defer="phone_number" />
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                                    <x-select
                                        label="Marital Status"
                                        placeholder="select marital status"
                                        :options="['Single', 'Married', 'Divorcee']"
                                        wire:model.defer="marital_status"
                                    />
                                    <x-input type="date" label="Birth date" wire:model.defer="date" />
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                                    <x-select
                                        label="Gender"
                                        placeholder="select Gender"
                                        :options="['Male', 'Female']"
                                        wire:model.defer="gender"
                                    />
                                    <x-select
                                        label="Race"
                                        placeholder="select race"
                                        :options="['Melayu', 'Cina','India','Iban','Kadazan', 'Bidayuh' ,'Melanau', 'Bajau','Murut']"
                                        wire:model.defer="race"
                                    />
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                                    <div class="col-span-1 sm:col-span-2">
                                        <x-input label="Street Address" placeholder="street address" wire:model.defer="street_address" />
                                    </div>
                                </div>

                                <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6 mt-4">
                                    <x-input label="City" placeholder="city" wire:model.defer="city" />
                                    <x-input label="State" placeholder="state" wire:model.defer="state" />
                                    <x-input label="Postal Code" placeholder="postal code" wire:model.defer="postal_code" />
                                </div>
                                <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6 mt-4">
                                    <x-input type="date" label="Donation Date" wire:model.defer="donation_date" />
                                </div>
                                <x-slot name="footer">
                                    <div class="flex justify-end gap-x-4">
                                        <x-button flat label="Close" x-on:click="close" />
                                        <x-button primary label="Save" wire:click="update('{{$donor_id}}')" />
                                    </div>
                                </x-slot>
                        </x-modal.card>
                    <div>

            </div>
        </div>
    </x-container>
</div>
