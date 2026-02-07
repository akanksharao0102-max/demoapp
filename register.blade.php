@extends('layouts.app')

@section('content')
<div class="auth-box">
    <h2>Register</h2>

    <form>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button class="btn-primary">Register</button>
    </form>
</div>
@endsection
