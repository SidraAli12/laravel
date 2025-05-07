<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
<h2>Students List</h2>
<a href="{{ route('student.create') }}">Add New Student</a><br><br>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Class</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->class ? $student->class->name : 'N/A' }}</td>
            <td>
                <a href="{{ route('student.edit', $student->id) }}">Edit</a> |
                <form action="{{ route('student.delete', $student->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE') <!-- This ensures the DELETE request is sent -->
            <button type="submit">Delete</button>
        </form>
                    </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>