@extends('layouts.app')

@section('content')
<div class="auth-box">
    <h2>Login</h2>

    <form>
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button class="btn-primary">Login</button>
    </form>
</div>
@endsection
