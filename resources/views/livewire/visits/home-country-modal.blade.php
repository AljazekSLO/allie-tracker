<div>
    <!-- Modal Background -->
    <div 
        x-data="{ open: false }" 
        x-cloak 
        x-show="open" 
        x-init="setTimeout(() => {if ($wire.show) {open = true}}, 1000)" 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-100"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-100"
            
        
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60">
        <!-- Modal Content -->
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <!-- Modal Header -->
            <div class="flex items-center justify-between border-b border-gray-200 pb-3 mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Living Country Selection</h2>
            </div>
            <!-- Modal Body -->
            <div class="flex items-center space-x-4">
                <!-- Country Logo -->
                <img src="https://hatscripts.github.io/circle-flags/flags/{{ strtolower($userGeolocation['iso']) }}.svg" alt="Country Logo" class="w-16 h-16 object-cover rounded-full border border-gray-200">
                <!-- Country Info and Dropdown -->
                <div>
                    <p class="text-gray-700 text-lg">You are detected in <span class="font-semibold">{{ $userGeolocation['country'] }}</span>.</p>
                    <p class="text-gray-600 mt-2">Set this as your living country or select another one</p>

                    <!-- Country Dropdown -->
                    <div class="mt-4">
                        <label for="country" class="block text-sm font-medium text-gray-700">Select Country:</label>
                        <select id="country" wire:model="selectedCountry" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            @foreach ($countries as $country)
                                <option value="{{ $country['iso2'] }}" {{ $country['iso2'] === $selectedCountry ? 'selected' : '' }}>
                                    {{ $country['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <!-- Modal Footer -->
            <div class="mt-6 flex justify-end space-x-4">
                <button wire:click="setCountry" @click="open = false" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
            </div>
        </div>
    </div>
</div>
