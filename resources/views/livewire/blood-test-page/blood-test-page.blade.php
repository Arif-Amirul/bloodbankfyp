<div>
    <x-container title="Blood Test Result" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
        <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-3 sm:gap-6">
            <x-input label="Test id" placeholder="test id" wire:model.defer="test_id" />
            {{-- <x-select
            label="Donor ID"
            placeholder="Select donor id"
            :options="$donorIds"
            wire:model.defer="donorId"
        /> --}}
        <div class="relative">
            <label for="blood_id" class="block text-sm font-medium text-gray-700">Blood ID</label>
            <select wire:model.defer="blood_id" id="blood_id" name="blood_id"
                    class="mt-1 block w-full py-2 px-3 border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Select Blood ID</option>
                @foreach($bloodIds as $id => $bloodId)
                    <option value="{{ $id }}">{{ $bloodId }}</option>
                @endforeach
            </select>
            @error('blood_id') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
            <x-input type="date" label="Test Date" wire:model.defer="date" />
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

        <div class="mt-4">
        <x-button primary wire:click="create" label="Add"  />
        </div>
    </x-container>
</div>
