<!DOCTYPE html>
<html>
<head>
    <title>Edit School</title>
</head>
<body>
    <h2>Edit School</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('school.update', $school->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>School Name:</label><br>
        <input type="text" name="school" value="{{ $school->school }}"><br><br>

        <label>Address:</label><br>
        <input type="text" name="address" value="{{ $school->address }}"><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
