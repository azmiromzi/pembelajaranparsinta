<x-app-layout title="tasks">


  <div class="container">
    <div class="row my-4">
        <div class="col-md-8">
          <div class="card ">
              <div class="card-header text-center">Create New Task</div>
              <div class="card-body">
@include('tasks._create')

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
