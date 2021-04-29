<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('outfit view') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table border = "1">
                    <tr>
                        <td>Id</td>
                        <td>outfit Name</td>
                        <td>Type of outfit</td>
                        <td>Size :</td>
                        <td>Colour</td>
                        <td>price</td>
                    
                        </tr>
                        @foreach ($outfits as $outfits)
                    <tr>
                        <td>{{ $outfits->idoutfit }}</td>
                        <td>{{ $outfits->nameoutfit }}</td>
                        <td>{{ $outfits->typeofoutfit}}</td>
                        <td>{{ $outfits->size}}</td>
                        <td>{{ $outfits->colour}}</td>
                        <td>{{ $outfits->prices}}</td>
                        </td>
                    </tr>
@endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>