<!-- resources/views/studentss/edit.blade.php -->

<h2>Edit Student</h2>

<form action="{{ route('studentss.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $student->name }}" required>
    <input type="email" name="email" value="{{ $student->email }}" required>
    <input type="text" name="course" value="{{ $student->course }}" required>

    <button type="submit">Update Student</button>
</form>

<br>
<a href="{{ url('/studentss') }}">⬅ Back to Student List</a>
