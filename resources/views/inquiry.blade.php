<form method="POST" action="/inquiry">
    @csrf

    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <textarea name="message" placeholder="Message"></textarea><br><br>

    <button type="submit">Send Inquiry</button>
</form>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif
