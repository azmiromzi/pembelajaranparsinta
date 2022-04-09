<input type="text" name="list" value="{{ old('list', $task->list ) }}" autofocus class="form-control @error('list')
is-invalid
@enderror">
<button type="submit" class="btn btn-primary ms-2">{{ $submit }}</button>
@error('list')
<span class="invalid-feedback d-flex">{{ $message }}</span>
@enderror
