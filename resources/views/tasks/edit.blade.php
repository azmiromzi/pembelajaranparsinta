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
                        <input type="text" name="list" value="{{ $task->list }}" autofocus class="form-control @error('list')
                            is-invalid
                        @enderror">
                        <button type="submit" class="btn btn-primary ms-2">update</button>
                        @error('list')
                            <span class="invalid-feedback d-flex">{{ $message }}</span>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
