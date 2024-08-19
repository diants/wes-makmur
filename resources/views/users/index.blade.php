@extends('layouts.app')

@section('title', 'User Management')

@section('content')
<h1 class="h3 mb-4 text-gray-800">User Management</h1>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit Role</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
