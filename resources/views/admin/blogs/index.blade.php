@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Blogs</div>

                    <div class="card-body">
                        @if ($blogs->isEmpty())
                            <p>No blogs found.</p>
                        @else
                            <table class="table">
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
                                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST"
                                                    style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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
