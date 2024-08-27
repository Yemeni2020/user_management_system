<x-layout>
    @section('content')
<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    <input type="text" name="username" value="{{ Auth::user()->username }}" required>
    <input type="email" name="email" value="{{ Auth::user()->email }}" required>
    <button type="submit">Update Profile</button>
</form>

<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="password" name="current_password" placeholder="Current Password" required>
    <input type="password" name="new_password" placeholder="New Password" required>
    <input type="password" name="new_password_confirmation" placeholder="Confirm New Password" required>
    <button type="submit">Change Password</button>
</form>
    @endsection

</x-layout>
