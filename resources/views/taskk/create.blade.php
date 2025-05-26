<h2>Create To do List</h2>
<form method="POST" action="{{ route('taskk.store') }}">
    @csrf
    <input type="text" name="title" placeholder="To do list " required><br><br>
     <input type="text" name="title" placeholder="To do list" required><br><br>
 <input type="text" name="title" placeholder="To do list" required><br><br>

    <textarea name="description" placeholder="To do list description"></textarea><br><br>
    <button type="submit">Create</button>
</form>
