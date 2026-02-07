@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="left">
        <h1>We Build Modern Web Applications</h1>
        <p>Scalable and secure solutions for your business.</p>
        <button class="btn">Get Started</button>
    </div>

    <div class="right">
        <img src="{{ asset('images/home.jpg') }}" class="home-img">
    </div>
</section>

<section class="services">
    <h2>Our Services</h2>

    <div class="service-grid">
        <div class="card">
            <img src="{{ asset('images/1.jpg') }}">
            <h3>Web Development</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/2.jpg') }}">
            <h3>UI / UX Design</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/3.jpg') }}">
            <h3>Maintenance</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/4.jpg') }}">
            <h3>SEO</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/5.jpg') }}">
            <h3>Support</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/1.jpg') }}">
            <h3>Hosting</h3>
        </div>
    </div>
</section>
<section class="tech">
    <h2>Technologies We Use</h2>
    <p class="tech-sub">
        We use modern and reliable technologies to build scalable applications.
    </p>

    <div class="tech-list">
        <div class="tech-item">Laravel</div>
        <div class="tech-item">PHP</div>
        <div class="tech-item">MySQL</div>
        <div class="tech-item">HTML5</div>
        <div class="tech-item">CSS3</div>
        <div class="tech-item">JavaScript</div>
        <div class="tech-item">Git & GitHub</div>
    </div>
</section>

@endsection
