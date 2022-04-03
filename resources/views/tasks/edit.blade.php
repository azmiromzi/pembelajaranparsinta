<x-app-layout title="update">


    <form action="/tasks/{{ $task->id }}" method="post" style="margin-left: 2rem">
        @method('put')
        @csrf
        <input type="text" name="list" value="{{ $task->list }}" autofocus>
        <button type="submit">update</button>
    </form>

</x-app-layout>
