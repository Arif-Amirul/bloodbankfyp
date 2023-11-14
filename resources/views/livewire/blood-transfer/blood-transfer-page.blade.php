<div>
    <x-container title="Blood Transfer" routeBackBtn="" titleBackBtn="" disableBackBtn="">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <x-select
                label="Donor ID"
                placeholder="Select donor id"
                :options="$donorIds"
                wire:model.defer="donorId"
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
</div>
