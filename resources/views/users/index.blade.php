@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">User List</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('users.create') }}" class="btn btn-success mb-3">Add User</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th style="width: 150px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form method="POST" action="{{ route('users.destroy', $user) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete user?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

{{-- ✅ Use a separate section for scripts --}}
@section('scripts')
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function editUser(id, name, email) {
    Swal.fire({
        title: 'Edit User',
        html: `
            <input id="swal-input1" class="swal2-input" placeholder="Name" value="${name}">
            <input id="swal-input2" class="swal2-input" placeholder="Email" type="email" value="${email}">
            <input id="swal-input3" class="swal2-input" placeholder="New Password (optional)" type="password">
        `,
        focusConfirm: false,
        showCancelButton: true,
        confirmButtonText: 'Update',
        preConfirm: () => {
            const name = document.getElementById('swal-input1').value;
            const email = document.getElementById('swal-input2').value;
            const password = document.getElementById('swal-input3').value;

            if (!name || !email) {
                Swal.showValidationMessage('Name and Email are required');
                return false;
            }

            const form = document.createElement('form');
            form.action = `/users/${id}`;
            form.method = 'POST';

            const csrf = document.createElement('input');
            csrf.type = 'hidden';
            csrf.name = '_token';
            csrf.value = '{{ csrf_token() }}';
            form.appendChild(csrf);

            const method = document.createElement('input');
            method.type = 'hidden';
            method.name = '_method';
            method.value = 'PUT';
            form.appendChild(method);

            const nameInput = document.createElement('input');
            nameInput.type = 'hidden';
            nameInput.name = 'name';
            nameInput.value = name;
            form.appendChild(nameInput);

            const emailInput = document.createElement('input');
            emailInput.type = 'hidden';
            emailInput.name = 'email';
            emailInput.value = email;
            form.appendChild(emailInput);

            if (password) {
                const passwordInput = document.createElement('input');
                passwordInput.type = 'hidden';
                passwordInput.name = 'password';
                passwordInput.value = password;
                form.appendChild(passwordInput);
            }

            document.body.appendChild(form);
            form.submit();
        }
    });
}

function confirmDelete(userId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'This action will permanently delete the user.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = `/users/${userId}`;

            const csrf = document.createElement('input');
            csrf.type = 'hidden';
            csrf.name = '_token';
            csrf.value = '{{ csrf_token() }}';
            form.appendChild(csrf);

            const method = document.createElement('input');
            method.type = 'hidden';
            method.name = '_method';
            method.value = 'DELETE';
            form.appendChild(method);

            document.body.appendChild(form);
            form.submit();
        }
    });
}
</script>
@endsection
