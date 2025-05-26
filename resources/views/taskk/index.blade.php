<h2>Your To do list</h2>
<a href="{{ route('taskk.create') }}">Create New Task</a>
<ul>
    @foreach($tasks as $task)
        <li>
            <strong>{{ $task->title }}</strong> - {{ $task->is_completed ? 'Completed' : 'Pending' }}
            <a href="{{ route('taskk.edit', $task->id) }}">Edit</a>
            <form action="{{ route('taskk.destroy', $task->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
