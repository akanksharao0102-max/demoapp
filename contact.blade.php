@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="success-msg">
        {{ session('success') }}
    </div>
@endif

<div class="auth-box">
    <h2>Contact Us</h2>

    {{-- success message --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf

        <input type="text" name="name" placeholder="Name" required>

        <input type="email" name="email" placeholder="Email" required>

        <textarea name="message" placeholder="Message" required></textarea>

        <button type="submit" class="btn-primary">Send</button>
    </form>
</div>

@endsection
