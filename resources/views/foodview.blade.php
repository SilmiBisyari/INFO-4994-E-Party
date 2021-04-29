<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('venueview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table border = "1">
                    <tr>
                        <td>Id</td>
                        <td>Type Venue </td>
                        <td>Name Venue</td>
                        <td>address</td>
                        <td>description</td>
                        <td>prices</td>
                        <td>time</td>
                    
                        </tr>
                        @foreach ($food as $food)
                    <tr>
                        <td>{{ $food->id }}</td>
                        <td>{{ $food->typesfood }}</td>
                        <td>{{ $food->Namefood}}</td>
                        <td>{{ $food->participant}}</td>
                        <td>{{ $food->description}}</td>
                        <td>{{ $food->prices}}</td>
                        
                        </td>
                    </tr>
@endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>