@extends('layouts.app')

@section('title', 'Your Tasks')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Your Tasks</h2>
        <a href="{{ route('taskk.create') }}" class="btn btn-primary">+ Create New Task</a>
    </div>

    {{-- ✅ Flash Success Message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- ✅ Task List --}}
    @if($tasks->count())
        <ul class="list-group">
            @foreach($tasks as $task)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $task->title }}</strong>
                        <span class="badge bg-{{ $task->is_completed ? 'success' : 'warning' }} ms-2">
                            {{ $task->is_completed ? 'Completed' : 'Pending' }}
                        </span>
                    </div>

                    <div>
                        <a href="{{ route('taskk.edit', $task->id) }}" class="btn btn-sm btn-secondary me-2">Edit</a>

                        <form action="{{ route('taskk.destroy', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this task?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-info">No tasks available. Start by creating one!</div>
    @endif

@endsection
