@extends('layouts.app')

@section('content')
<section class="services-section">
    <div class="container">
        <h1>Our Services</h1>
        <p class="subtitle">
            We provide end-to-end solutions for your digital needs.
        </p>

        <div class="services-grid">
            <div class="service-card">
                <img src="{{ asset('images/1.jpg') }}">
                <h3>Web Development</h3>
                <p>
                    Custom websites and web applications using modern technologies.
                </p>
            </div>

            <div class="service-card">
                <img src="{{ asset('images/2.jpg') }}">
                <h3>UI / UX Design</h3>
                <p>
                    Clean, user-friendly and responsive designs.
                </p>
            </div>

            <div class="service-card">
                <img src="{{ asset('images/3.jpg') }}">
                <h3>Backend Development</h3>
                <p>
                    Secure and scalable backend systems with APIs.
                </p>
            </div>

            <div class="service-card">
                <img src="{{ asset('images/4.jpg') }}">
                <h3>Maintenance</h3>
                <p>
                    Continuous support, updates and performance monitoring.
                </p>
            </div>

            <div class="service-card">
                <img src="{{ asset('images/5.jpg') }}">
                <h3>Database Management</h3>
                <p>
                    Efficient and optimized database solutions.
                </p>
            </div>

            <div class="service-card">
                <img src="{{ asset('images/home.jpg') }}">
                <h3>Deployment</h3>
                <p>
                    Hosting, server setup and deployment support.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
