<h2>Edit To do list</h2>
<form method="POST" action="{{ route('taskk.update', $task->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $task->title }}" required><br><br>
    <textarea name="description">{{ $task->description }}</textarea><br><br>
    <label><input type="checkbox" name="is_completed" {{ $task->is_completed ? 'checked' : '' }}> Completed</label><br><br>
    <button type="submit">Update</button>
</form>
