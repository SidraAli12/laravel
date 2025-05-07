<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
<h2>Edit Student</h2>
<form action="{{ route('student.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- This is important for PUT request -->
    <label>Name:</label>
    <input type="text" name="name" value="{{ $student->name }}" required><br><br>
    <label>Email:</label>
    <input type="email" name="email" value="{{ $student->email }}" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <label>Class:</label>
    <select name="class_id" required>
        @foreach($classes as $class)
            <option value="{{ $class->id }}" {{ $class->id == $student->class_id ? 'selected' : '' }}>{{ $class->name }}</option>
        @endforeach
    </select><br><br>
    <button type="submit">Update</button>
</form>
</body>
</html>