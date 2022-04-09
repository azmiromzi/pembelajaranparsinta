<form action="{{ route('tasks.store') }}" method="post" class="d-flex my-4 align-items-center">
    @csrf
    @include('tasks._form')
</form>

