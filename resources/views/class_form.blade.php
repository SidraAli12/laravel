<h2>Add Class</h2>
<form action="{{ route('class.store') }}" method="POST">
    @csrf
    <input type="text" name="class_name" placeholder="Enter class name" required>
    <button type="submit">Save</button>
</form>
