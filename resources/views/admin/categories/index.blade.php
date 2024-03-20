@extends('layouts.admin')
@section('title', 'Data Pengurus Komisariat')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                        @if ($categories->isEmpty())
                            <p>No categories found.</p>
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
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                                    method="POST" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        <div class="mt-4">
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Add Category</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
