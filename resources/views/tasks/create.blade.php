<h1>Crear Tarea</h1>
<hr>
<form action="/tasks" method="POST">
    @csrf
    <div>
        <label for="name">Nombre</label>
        <br>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="description">Descripcion</label>
        <br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <br>
    <button type="submit">Crear Tarea</button>
</form>
