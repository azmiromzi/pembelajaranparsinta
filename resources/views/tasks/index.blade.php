<x-app-layout title="tasks">


    <form action="/tasks" method="post" style="margin-left: 2rem">
        @csrf
        <input type="text" name="list" autofocus>
        <button type="submit">create data</button>
    </form>

    <ol style="list-style: none">
        @foreach ($tasks as $index => $task)
            <li>{{ $index + 1  }} - {{ $task->list }}
            <div>
                <a href="/tasks/{{ $task->id }}/edit" style="color: red">edit</a>
                <form action="/tasks/{{ $task->id }}" method="post" style="display: inline-block">
                    @method('delete')
                    @csrf

                    <button type="submit" >Delete</button>
                </form>
            </div>
            </li>
        @endforeach
    </ol>
</x-app-layout>
