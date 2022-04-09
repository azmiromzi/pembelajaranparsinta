<x-app-layout title="update">


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Edit Data</div>
                <div class="card-body">
                    <form action="{{ route('tasks.update', $task->id) }}" method="post" class="d-flex ">
                        @method('put')
                        @csrf
                       @include('tasks._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
