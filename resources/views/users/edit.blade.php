@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Edit User</h2>

    <form method="POST" action="{{ route('users.update', $user) }}">
        @csrf 
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>New Password <small>(Leave blank to keep current)</small></label>
            <input type="password" name="password" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

index.blade
            form.appendChild(method);