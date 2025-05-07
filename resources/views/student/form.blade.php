<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
</head>

<body>
    <h2>Add New Student</h2>
    <form action="{{ route('student.save') }}" method="POST">
        @csrf


        <input type="hidden" name="class_id" value="{{$classId}}"><br><br>


        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Save Student</button>
    </form>
</body>

</html>