<!-- resources/views/admin/members/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Members List</h2>

        @if ($members->isEmpty())
            <p>No members found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->created_at->format('M d, Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Example usage of nav-link component -->
    <x-nav-link href="{{ route('admin.members.index') }}" :active="true">
        Members
    </x-nav-link>
@endsection
