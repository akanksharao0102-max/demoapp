@extends('layouts.app')

@section('content')

<section class="auth-section">
    <div class="auth-card">
        <h2>Login</h2>
        <p>Welcome back 👋</p>

        <form>
            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Enter your password">
            </div>

            <button class="btn-primary">Login</button>
        </form>

        <p class="auth-link">
            Don’t have an account?
            <a href="/register">Register</a>
        </p>
    </div>
</section>

@endsection
