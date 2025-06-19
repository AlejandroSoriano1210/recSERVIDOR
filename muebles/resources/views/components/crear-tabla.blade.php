<div class="p-60 text-gray-900">
    @if ($datos->isNotEmpty())
        <table>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @foreach ($cabeceras as $cabecera)
                        <th scope="col" class="px-6 py-3">
                            {{ $cabecera }}
                        </th>
                    @endforeach
                    @auth
                        <th colspan="2" scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr
                        class="bg-white border-b dark:bg-gray-500 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        @foreach ($comandos as $comando)
                            <td class="px-6 py-4">
                                @if (method_exists($dato, $comando))
                                    {{ $dato->$comando() }}
                                @elseif (isset($dato->$comando))
                                    {{ $dato->$comando }}
                                @else
                                    {{ '---' }}
                                @endif
                            </td>
                        @endforeach
                        @auth
                            <td class="px-6 py-4 flex items-center">
                                <x-boton-editar :objeto="$dato" ruta="{{ $clase }}" />
                                <x-boton-borrar :objeto="$dato" ruta="{{ $clase }}" class="ms-3" />
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        No hay datos
    @endif
</div>
