<div>
    <x-container title="Dashboard" routeBackBtn="" titleBackBtn="" disableBackBtn="" >
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                <div class="text-blue-900 text-left text-2xl  font-semibold">Registered Donors</div>
            </div>
             <div class="mx-auto">
                <h4 class="text-2xl font-semibold text-gray-600">0</h4>
            </div>
        </div>
        
        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                <div class="text-blue-900 text-left text-2xl  font-semibold">Total Transfer</div> 
            </div>
            <div class="mx-auto">
                <h4 class="text-2xl font-semibold text-gray-600">0</h4>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-6">
        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">A+</div>
            </div>
             <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodAcount }}</h4>
            </div>
        </div>
        
        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">A-</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodAcount }}</h4>
            </div>
        </div>

        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">B+</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodAcount }}</h4>
            </div>
        </div>

        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">B-</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodAcount }}</h4>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-4">
        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">O+</div>
            </div>
             <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodAcount }}</h4>
            </div>
        </div>
        
        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">O-</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodAcount }}</h4>
            </div>
        </div>

        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">AB+</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodAcount }}</h4>
            </div>
        </div>

        <div class="flex items-center px-2 py-4 bg-gray-100 rounded-md shadow-sm">
            <div class="ml-5">
                 <div class="text-red-800 text-left text-6xl ">AB-</div>
            </div>
            <div class="mx-auto">
                <h4 class="text-4xl font-semibold text-gray-600">{{ $bloodAcount }}</h4>
            </div>
        </div>
    </div>
    
    















                        
                              <!--  <div class="flex items-center px-2 py-4  bg-gray-100 rounded-md shadow-sm">
                                    <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
                                        <svg class="w-8 h-8 text-white" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor"
                                                stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                                            <path
                                                d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                                                stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                        <div class="text-gray-500">Available Products</div>
                                    </div>
                                </div>

                                <div class="flex items-center px-2 py-4  bg-gray-100 rounded-md shadow-sm">
                                    <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
                                        <svg class="w-8 h-8 text-white" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor"
                                                stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                                            <path
                                                d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                                                stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                        <div class="text-gray-500">Available Products</div>
                                    </div>
                                </div>
                                <div class="flex items-center px-2 py-4  bg-gray-100 rounded-md shadow-sm">
                                    <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
                                        <svg class="w-8 h-8 text-white" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor"
                                                stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                                            <path
                                                d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                                                stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                        <div class="text-gray-500">Available Products</div>
                                    </div>
                                </div>
                                <div class="flex items-center px-2 py-4  bg-gray-100 rounded-md shadow-sm">
                                    <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
                                        <svg class="w-8 h-8 text-white" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor"
                                                stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                                            <path
                                                d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                                                stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                        <div class="text-gray-500">Available Products</div>
                                    </div>
                                </div>
                                <div class="flex items-center px-2 py-4  bg-gray-100 rounded-md shadow-sm">
                                    <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
                                        <svg class="w-8 h-8 text-white" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor"
                                                stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                                            <path
                                                d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                                                stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                        <div class="text-gray-500">Available Products</div>
                                    </div>
                                </div>
                                <div class="flex items-center px-2 py-4  bg-gray-100 rounded-md shadow-sm">
                                    
                            
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                        <div class="text-gray-500">Available Products</div>
                                    </div>
                                </div>-->
                                
                    </div>
</x-container>
</div>
