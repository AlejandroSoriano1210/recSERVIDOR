<div>
    <input type="text" id="busqueda" name="busqueda" wire:model="busqueda" placeholder="Buscar..." class="flex items-center justify-center mt-20 border p-2 rounded" />
    <ul>
        @foreach ($resultado as $dato)
            <li>
                {{ $dato->$comando }}
            </li>
        @endforeach
    </ul>
    <p>
        Buscando: {{ $busqueda }}
    </p>
</div>
