@extends('layouts.admin')

@section('title', 'User Management')

@section('content')
<div class="container">
    <h1>User Management</h1>
    <div class="mb-3">
        <a href="{{ route('admin.users.create') }}" class="btn btn-success">Create User</a>
    </div>
    @if ($users->isEmpty())
    <p>No users found.</p>
    @else
    <table class="table">
        <form action="{{ route('admin.blogs.index') }}" method="GET" class="d-flex">
            <div class="form-group flex-grow-1 mr-2">
                <input type="text" name="search" class="form-control" placeholder="Search...">
            </div>
        </form>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
