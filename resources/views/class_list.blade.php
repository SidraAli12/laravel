<h2>Class List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Class Name</th>
        <th>Actions</th>
    </tr>
    @foreach($classes as $class)
    <tr>
        <td>{{ $class->id }}</td>
        <td>{{ $class->name }}</td>
        <td>
            <a href="{{ route('class.edit', $class->id) }}">Edit</a>
            <a href="{{ route('class.delete', $class->id) }}">Delete</a>
            <a href="{{ route('student.add', $class->id) }}">Add Student</a>

        </td>
    </tr>
    @endforeach
</table>