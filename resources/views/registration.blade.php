<x-layout>
    @section('content')

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <div class="g-recaptcha" data-sitekey="your-site-key"></div>
    <button type="submit">Register</button>
</form>

    @endsection

</x-layout>
