<x-app-layout title="tasks">


  <div class="container">
    <div class="row my-4">
        <div class="col-md-8">
          <div class="card ">
              <div class="card-header text-center">Create New Task</div>
              <div class="card-body">
                <form action="{{ route('tasks.store') }}" method="post" class="d-flex my-4 align-items-center">
                    @csrf
                    <input type="text" class="form-control me-2 w-75 @error('list')
                        is-invalid
                    @enderror " name="list" autofocus placeholder="your data">
                    <button type="submit" class="btn btn-primary me-2">ADD</button>
                </form>
                @error('list')
                <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror

                <ol class="list-group">
                    @foreach ($tasks as $index => $task)
                        <li class="list-group-item d-flex justify-content-between aign-items-center mt-2 border-1 rounded shadow-sm bg-body">{{ $index + 1  }} - {{ $task->list }}
                        <div>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}}}" method="post" style="display: inline-block">
                                @method('delete')
                                @csrf

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        </li>
                    @endforeach
                </ol>
              </div>
          </div>

        </div>
    </div>




  </div>


</x-app-layout>
