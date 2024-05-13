@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">@yield('title')</div>

                    <div class="card-body">
                        <!-- Search Bar -->
                        @if ($blogs->isEmpty())
                            <p>No blogs found.</p>
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
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        <th>Tags</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->author }}</td>
                                            <td>{{ $blog->category->name }}</td>
                                            <td>
                                                @foreach ($blog->tags as $tag)
                                                    <span class="badge badge-secondary">{{ $tag->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                <a href="#" onclick="deleteData({{ $blog->id }})" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash mr-1"></i>
                                                    Delete
                                                </a>
                                                <form id="delete-form-{{ $blog->id }}"
                                                    action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-sm btn-info">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        <div class="mt-4">
                            <a href="{{ route('admin.blogs.create') }}" class="btn btn-success">Add Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
