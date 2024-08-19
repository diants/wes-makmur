@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<h1 class="h3 mb-4 text-gray-800">All Posts</h1>
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Create New Post</a>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->content, 50) }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
