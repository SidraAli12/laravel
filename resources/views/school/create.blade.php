<!DOCTYPE html>
<html>
<head>
    <title>Add School</title>
</head>
<body>
    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('school.store') }}" method="POST">
        @csrf
        <label for="school">School Name:</label>
        <input type="text" name="school" id="school" required><br><br>

        <label for="address">Address:</label>
        <textarea name="address" id="address" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
