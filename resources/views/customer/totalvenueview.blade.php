<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('VENUE') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="panel-body">
                        <div class="row">
                        <div class="custom-btn btn-4">
                        <a href="/booking"> Back </a><br><br> 
                        </div>
                            <div class="table-wrapper">
                                 <table class="fl-table">
                                    <thead class="thead-light">
                
                    <tr>
                        <td>Id</td>
                        <td>Type</td>
                        <td>Name</td>
                        <td>address</td>
                        <td>description</td>
                        <td>prices</td>
                        <td>time</td>
                        <td>email</td>
                    
                        </tr>
                        @foreach ($totalvenue as $venues)
                    <tr>
                        <td>{{ $venues->idvenue }}</td>
                        <td>{{ $venues->Typevenue }}</td>
                        <td>{{ $venues->namevenue}}</td>
                        <td>{{ $venues->address}}</td>
                        <td>{{ $venues->description}}</td>
                        <td>RM{{ $venues->prices}}</td>
                        <td>{{ $venues->time}}</td>
                        <td>{{ $venues->email}}</td>
                        </td>
                    </tr>
@endforeach
</table>    
                            </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>