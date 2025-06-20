<x-app-layout>
    @livewire('barra-busqueda', ['clase' => App\Models\Mueble::class, 'comando' => 'denominacion'])
    <x-crear-tabla :cabeceras="['Denominación', 'Precio', 'Ancho', 'Alto']" :datos="$muebles" clase="muebles" :comandos="['denominacion', 'precio', 'ancho', 'alto']" />
    @auth
        <div class="mt-6 text-center">
            <a href="{{ route('muebles.create') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Crear un nuevo mueble
            </a>
        </div>
    @endauth
</x-app-layout>
