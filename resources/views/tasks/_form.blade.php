<input type="text" name="list" class="form-control @error('list') is-invalid @enderror"
    value="{{ old('list', $task->list) }}" id="" placeholder="isi name tasks">
@error('list')
    {{ $message }}
@enderror
<button type="submit" class="btn btn-primary mt-2">{{ $submit }}</button>
