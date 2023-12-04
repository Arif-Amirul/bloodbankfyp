<div>
    <x-container title="Dashboard" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                <div class="text-blue-900 text-left text-2xl  font-semibold">Registered Donors</div>
            </div>
             <div class="mx-auto">
                <h4 class="text-2xl font-semibold text-gray-600">{{ $registeredDonorsCount }}</h4>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
        <div class="ml-3">
            <div class="text-red-800 text-left text-2xl font-semibold">Blood Group</div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-2">
        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">A+</div>
            </div>
             <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodA_plus }} bag</h4>
            </div>
        </div>

        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">A-</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodA_minus }} bag</h4>
            </div>
        </div>

        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">B+</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodB_plus }} bag</h4>
            </div>
        </div>

        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">B-</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodB_minus }} bag</h4>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-4">
        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">O-</div>
            </div>
             <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodO_plus }} bag</h4>
            </div>
        </div>

        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">O+</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{$bloodO_minus }} bag</h4>
            </div>
        </div>

        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">AB+</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodAB_plus }} bag</h4>
            </div>
        </div>

        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">AB-</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodAB_minus}} bag</h4>
            </div>
        </div>
    </div>



     </div>
</x-container>
</div>
