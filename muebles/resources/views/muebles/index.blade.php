<x-app-layout>
    <x-crear-tabla :cabeceras="['Denominación', 'Precio', 'Ancho', 'Alto']" :datos="$muebles" clase="muebles" :comandos="['denominacion', 'precio', 'ancho', 'alto']" />
</x-app-layout>
