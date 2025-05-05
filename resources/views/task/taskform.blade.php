<!DOCTYPE html>
<html>
<head>
    <title>Task Form</title>
</head>
<body>

    <h2>Enter a Task</h2>

    <form action="save-task" method="GET">
        @csrf
        <label for="task">Task:</label><br>
        <input type="text" id="task" name="task" required><br><br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
