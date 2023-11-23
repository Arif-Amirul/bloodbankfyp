<div>
    <x-container title="Patient Blood Request" routeBackBtn="" titleBackBtn="" disableBackBtn="">
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

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <x-input label="Patient ID" placeholder="patient id" wire:model.defer="patient_id" />
            <x-input label="Blood ID" placeholder="blood_id" wire:model.defer="blood_id" />
        </div>

        <div class="mt-4">
            <x-button primary wire:click="create" label="Transfer" />
        </div>
        
    </x-container>
</div>

{{-- <div>
    <x-container title="Blood Transfer" routeBackBtn="" titleBackBtn="" disableBackBtn="">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-select
                label="Blood ID"
                placeholder="Select blood id"
                :options="$bloodIds"
                wire:model.defer="bloodId"
            />
            <x-select
                label="Transferred To"
                placeholder="Transferred to"
                :options="$transferredToOptions"
                wire:model.defer="transferredTo"
            />
        </div>
        <div class="mt-4">
            <x-button primary wire:click="transfer" label="Transfer" />
        </div>

        @if(session()->has('success'))
        <div class="mt-4 text-green-600">
            {{ session('success') }}
        </div>
        @endif

    </x-container>
</div> --}}
