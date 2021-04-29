<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('food') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action = "food" method = "post">
                @csrf
	                    <table>
	                        <tr>
	                            <td>Type food :  </td>
	                            <td><input type='text' name='typesfood' /></td>
                            </tr>
                            <tr>
	                            <td>Name food :  </td>
	                            <td><input type="text" name='Namefood'/></td>
	                        </tr>
                            <tr>
	                            <td>participant :  </td>
	                            <td><input type="text" name='participant'/></td>
	                        </tr>
                            <tr>
	                            <td>Description  </td>
	                            <td><input type="text" name='description'/></td>
	                        </tr>
	                        <tr>
                                <td>prices :  </td>
	                            <td><input type='text' name='prices' /></td>
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
