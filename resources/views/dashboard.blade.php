<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:visits title="wat is dis"/>
                    <livewire:home-country-modal />
                    {{-- <x-modal name="modal" maxWidth="sm" show="true">
                        <div class="p-6">
                            <h2 class="text-lg font-semibold text-gray-900 leading-tight">Hey I See you are not fucking Logged IN!</h2>
                            <p class="text-gray-600">DO THAT</p>
                        </div>
                    </x-modal> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
