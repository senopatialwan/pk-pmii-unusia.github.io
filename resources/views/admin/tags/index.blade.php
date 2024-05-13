@extends('layouts.admin')
@section('title', 'Data Tags')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tags</div>

                <div class="card-body">
                    @if ($tags->isEmpty())
                        <p>No tags found.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <div class="mt-4">
                        <a href="{{ route('admin.tags.create') }}" class="btn btn-success">Add Tag</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
