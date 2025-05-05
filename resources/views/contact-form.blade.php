<!DOCTYPE html>
<html>
<head><title>Contact Us</title></head>
<body>
    <h2>Contact Us</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <input type="text" name="full_name" placeholder="Full Name"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <textarea name="message" placeholder="Your Message"></textarea><br><br>
        <button type="submit">Send</button>
    </form>
</body>
</html>
