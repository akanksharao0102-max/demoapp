@extends('layouts.app')

@section('content')

<section class="auth-section">
    <div class="auth-card">
        <h2>Create Account</h2>
        <p>Join us today 🚀</p>

        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Create password">
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" placeholder="Confirm password">
            </div>

            <button class="btn-primary">Register</button>
        </form>

        <p class="auth-link">
            Already have an account?
            <a href="/login">Login</a>
        </p>
    </div>
</section>

@endsection
