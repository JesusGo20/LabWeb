<h1>Tarea #: {{ $task->id }}</h1>
<hr>
<h2>Tarea: {{ $task->name }}</h2>
<hr>
<h2>Descipcion: {{ $task->description }}</h2>

<a href="/tasks/{{ $task->id }}/edit">
    <button>Editar</button>
</a>
<form action="/tasks/{{ $task->id }}/delete" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
