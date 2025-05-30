@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h2 class="mb-4">Login</h2>

    <form method="POST" action="{{ url('/user/auth') }}" class="w-50 mx-auto">
        @csrf

        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
