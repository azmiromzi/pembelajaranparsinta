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
