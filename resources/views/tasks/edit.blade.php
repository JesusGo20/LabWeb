<h1>Editar la tarea: {{ $task->name }}</h1>
<hr>
<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nombre</label>
        <br>
        <input type="text" name="name" id="name" value="{{ $task->name }}">
    </div>
    <div>
        <label for="description">Descripcion</label>
        <br>
        <textarea name="description" id="description" cols="30" rows="10">{{ $task->description }}</textarea>
    </div>
    <br>
    <button type="submit">Crear Tarea</button>
</form>
