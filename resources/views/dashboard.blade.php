<x-app-layout>
    <x-slot name="header">
        <h5 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h5>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <a href="{{ url('cake') }}" class="text-sm text-gray-700 underline">Cake</a>
                    <a href="{{ url('cakeview') }}" class="text-sm text-gray-700 underline">Cakeview</a><br><br>
                    <a href="{{ url('outfit') }}" class="text-sm text-gray-700 underline">Outfit</a>
                    <a href="{{ url('outfitview') }}" class="text-sm text-gray-700 underline">outfitview</a><br><br>
                    <a href="{{ url('venue') }}" class="text-sm text-gray-700 underline">venue</a>
                    <a href="{{ url('venueview') }}" class="text-sm text-gray-700 underline">venueview</a><br><br>
                    <a href="{{ url('food') }}" class="text-sm text-gray-700 underline">+food</a>
                    <a href="{{ url('foodview') }}" class="text-sm text-gray-700 underline">foodview</a><br>

                    
            </div>
        </div>
    </div>
</x-app-layout>
