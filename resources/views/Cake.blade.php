<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cake') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action = "cake" method = "post">
                @csrf
	                    <table>
	                        <tr>
	                            <td>Cake Name :  </td>
	                            <td><input type='text' name='name' /></td>
                            </tr>
                            <tr>
	                            <td>Type :  </td>
	                            <td><input type="text" name='type'/></td>
	                        </tr>
	                        <tr>
                            <td>prices :  </td>
	                            <td><input type='text' name='price' /></td>
	                        </tr>
	
	<td colspan = '1'>
	<input type = 'submit' value = "Add cake"/>
	</td>
	</tr>
	</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
