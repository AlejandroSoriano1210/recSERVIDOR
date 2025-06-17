<div>
    <form method="POST" action="{{ route($ruta, $objeto) }}">
        @method('DELETE')
        @csrf
        <a href="{{ route($ruta, $objeto) }}"
        class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3"
            onclick="event.preventDefault(); if (confirm('¿Está seguro?')) this.closest('form').submit();">
                Eliminar
        </a>
    </form>
</div>