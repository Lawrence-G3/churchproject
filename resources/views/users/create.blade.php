<!-- resources/views/users/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create User</h1>
    <form method="POST" action="/users">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Create User</button>
    </form>
@endsection
