<!-- resources/views/studentss/index.blade.php -->

<h2>Add New Student</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ url('/studentss') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="course" placeholder="Course" required>
    <button type="submit">Add Student</button>
</form>

<h3>Students (Course = Laravel)</h3>
<ul>
    @foreach($students as $student)
        <li>
            {{ $student->name }} ({{ $student->email }}) - {{ $student->course }}
            |
            <a href="{{ route('studentss.edit', $student->id) }}">Edit</a>
        </li>
    @endforeach
</ul>
