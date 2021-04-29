<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('venue') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action = "venues" method = "post">
                @csrf
	                    <table>
	                        <tr>
	                            <td>Type venue :  </td>
	                            <td><input type='text' name='Typevenue' /></td>
                            </tr>
                            <tr>
	                            <td>Name Venue :  </td>
	                            <td><input type="text" name='namevenue'/></td>
	                        </tr>
                            <tr>
	                            <td>address :  </td>
	                            <td><input type="text" name='address'/></td>
	                        </tr>
                            <tr>
	                            <td>Description  </td>
	                            <td><input type="text" name='description'/></td>
	                        </tr>
	                        <tr>
                                <td>prices :  </td>
	                            <td><input type='text' name='prices' /></td>
	                        </tr>
                            <tr>
	                            <td>Time  </td>
	                            <td><input type="text" name='time'/></td>
	                        </tr>
	
	<td colspan = '1'>
	<input type = 'submit' value = "Add venue"/>
	</td>
	</tr>
	</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
