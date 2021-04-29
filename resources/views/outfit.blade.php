<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Outfit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action = "outfits" method = "post">
                @csrf
	                    <table>
	                        <tr>
	                            <td>Outfit Name :  </td>
	                            <td><input type='text' name='nameoutfit' /></td>
                            </tr>
                            <tr>
	                            <td>Type of outfit :  </td>
	                            <td><input type="text" name='typeofoutfit'/></td>
	                        </tr>
                            <tr>
	                            <td>Size  :  </td>
	                            <td><input type="text" name='size'/></td>
	                        </tr>
                            <tr>
	                            <td>Colour :  </td>
	                            <td><input type="text" name='colour'/></td>
	                        </tr>
	                        <tr>
                            <td>prices :  </td>
	                            <td><input type='text' name='prices' /></td>
	                        </tr>
	
	<td colspan = '1'>
	<input type = 'submit' value = "Add outfit"/>
	</td>
	</tr>
	</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
