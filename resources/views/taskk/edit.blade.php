@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <div class="w-50 mx-auto bg-white p-4 rounded shadow-sm">

        <h2 class="mb-4 text-center">Edit To-Do List</h2>

        {{-- Show validation errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('taskk.update', $task->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <textarea name="description" class="form-control" placeholder="Description">{{ $task->description }}</textarea>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="is_completed" id="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
                <label class="form-check-label" for="is_completed">Completed</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Update Task</button>
        </form>
    </div>
@endsection
