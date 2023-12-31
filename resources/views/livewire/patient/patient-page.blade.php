<div>
    <x-container title="Patient Blood Request" routeBackBtn="" titleBackBtn="" disableBackBtn="">
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
                :options="['A', 'AB', 'O', 'B']"
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

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
            <x-input label="Quantity Required" placeholder="quantity required" wire:model.defer="quantity_required" />
        </div>

        <div class="mt-4">
            <x-button primary wire:click="create" label="Add" />
        </div>

        
    </x-container>
</div>
