<div>
    <form method="POST" action="{{ route($ruta.'.destroy', $objeto->id) }}">
        @method('DELETE')
        @csrf
        <a href="{{ route($ruta.'.destroy', $objeto->id) }}"
        class="font-medium text-red-600 dark:text-red-900 hover:underline ms-3"
            onclick="event.preventDefault(); if (confirm('¿Está seguro?')) this.closest('form').submit();">
                Eliminar
        </a>
    </form>
</div>
