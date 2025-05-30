@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
    <div class="w-50 mx-auto p-4 bg-white shadow rounded">
        <h2 class="mb-4 text-center">Create Account</h2>

        <form action="{{ url('/user/save') }}" method="POST">
            @csrf

            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            </div>

            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Sign Up</button>
        </form>
    </div>
@endsection
