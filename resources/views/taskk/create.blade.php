@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <div class="w-50 mx-auto bg-white p-4 rounded shadow-sm">

        <h2 class="mb-4 text-center">Create To-Do List</h2>

        {{-- Show Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('taskk.store') }}">
            @csrf

            <input type="text" name="titles[]" class="form-control mb-2" placeholder="To-do item 1" required>
            <input type="text" name="titles[]" class="form-control mb-2" placeholder="To-do item 2" required>
            <input type="text" name="titles[]" class="form-control mb-2" placeholder="To-do item 3" required>

            <textarea name="description" class="form-control mb-3" placeholder="Description (optional)"></textarea>

            <button type="submit" class="btn btn-primary w-100">Create Task(s)</button>
        </form>
    </div>
@endsection
