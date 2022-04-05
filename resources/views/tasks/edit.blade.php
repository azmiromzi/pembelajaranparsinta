<x-app-layout title="update">


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Edit Data</div>
                <div class="card-body">
                    <form action="/tasks/{{ $task->id }}" method="post" class="d-flex">
                        @method('put')
                        @csrf
                        <input type="text" name="list" value="{{ $task->list }}" autofocus class="form-control">
                        <button type="submit" class="btn btn-primary ms-2">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
