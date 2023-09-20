<form method="POST" action="{{ route('items.update', $item->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="description">Description:</label>
        <input type="text" name="description" value="{{ $item->description }}">
    </div>
    <div>
        <label for="done">Done:</label>
        <input type="checkbox" name="done" value="1" {{ $item->done ? 'checked' : '' }}>
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>
