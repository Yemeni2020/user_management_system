<x-layout>
    @section('content')

<table>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Roles</th>
        <th>Actions</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @foreach ($user->roles as $role)
            {{ $role->role_name }}
            @endforeach
        </td>
        <td>
            <a href="{{ route('admin.edit', $user->id) }}">Edit</a>
            <form method="POST" action="{{ route('admin.delete', $user->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection

</x-layout>
