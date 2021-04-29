<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cake view') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table border = "1">
                    <tr>
                        <td>Id</td>
                        <td>Cake Name</td>
                        <td>Cake Type</td>
                        <td>price</td>
                    
                        </tr>
                        @foreach ($cake as $cake)
                    <tr>
                        <td>{{ $cake->id }}</td>
                        <td>{{ $cake->name }}</td>
                        <td>{{ $cake->type}}</td>
                        <td>{{ $cake->prices}}</td>
                        </td>
                    </tr>
@endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>