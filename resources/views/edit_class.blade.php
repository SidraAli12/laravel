<h2>Edit Class</h2>
<form action="{{ route('class.update', $class->id) }}" method="POST">
    @csrf
    <input type="text" name="class_name" value="{{ $class->name }}" required>
    <button type="submit">Update</button>
</form>
