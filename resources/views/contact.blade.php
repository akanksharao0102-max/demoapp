@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')

<div class="contact-section">
    <h2>Contact Us</h2>

    <form method="POST" action="/contact" class="contact-form">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea name="message" placeholder="Enter your message"></textarea>
        </div>

        <button type="submit">Send Message</button>
    </form>
</div>

@endsection
