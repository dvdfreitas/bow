<x-appLayout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('leituras') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <table class="table-auto border m-auto my-4 shadow-xl rounded-xl">
                    <tr class="font-bold bg-blue-100 p-4">
                        <td class="p-2 border">Data</td>
                        <td class="p-2 border">Temperatura</td>
                        <td class="p-2 border">Caudal Acumulado</td>
                    </tr>
                    @foreach ($readings as $reading)
                        <tr>
                            <td class="p-4">{{ $reading->created_at }}</td>
                            <td class="p-4">{{ $reading->temperatura }}</td>
                            <td class="p-4">{{ $reading->caudal_acumulado }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    

</x-appLayout>