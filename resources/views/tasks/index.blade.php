<a href="/tasks/create">
    <h1>Crear</h1>
</a>
<ul>
    @foreach ($tasks as $task)
        <li>
            <a href="/tasks/{{ $task->id }}">{{ $task->name }}</a>
            <form action="/tasks/{{ $task->id }}/complete" method="POST"> @csrf @method('PUT') <button
                    type="submit">Completar</button></form>
        </li>
    @endforeach
</ul>
