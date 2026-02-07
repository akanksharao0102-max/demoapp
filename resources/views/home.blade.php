@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero-text">
        <h1>We Build<br>Modern Web Applications</h1>
        <p>Scalable and secure solutions for your business.</p>
        <a href="/contact" class="btn-primary">Get Started</a>
    </div>

    <div class="hero-image">
        <img src="{{ asset('images/1.jpg') }}" alt="Hero Image">
    </div>
</section>

<section class="services">
    <h2>Our Services</h2>

    <div class="service-cards">
        <div class="card">
            <img src="{{ asset('images/2.jpg') }}">
            <h3>Web Development</h3>
            <p>Custom websites & applications.</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/3.jpg') }}">
            <h3>UI / UX Design</h3>
            <p>Clean and user-friendly design.</p>
        </div>

        <div class="card">
            <img src="{{ asset('images/4.jpg') }}">
            <h3>Maintenance</h3>
            <p>Continuous support & updates.</p>
        </div>
    </div>
</section>
<section class="cta">
  <h2>Ready to Start Your Project?</h2>
  <p>Contact us today and let’s build something amazing.</p>
  <a href="/contact" class="cta-btn">Contact Us</a>
</section>

<section class="why-us">
  <h2>Why Choose Us</h2>
  <p class="section-subtitle">We deliver quality solutions that help your business grow</p>

  <div class="why-grid">
    <div class="why-card">
      <h3>Experienced Team</h3>
      <p>Professional developers with real-world project experience.</p>
    </div>

    <div class="why-card">
      <h3>Clean Code</h3>
      <p>Maintainable, scalable and well-documented code.</p>
    </div>

    <div class="why-card">
      <h3>On-Time Delivery</h3>
      <p>We respect deadlines and deliver projects on time.</p>
    </div>
  </div>
</section>
<section class="process">
  <h2>Our Process</h2>
  <p class="section-subtitle">Simple and transparent workflow</p>

  <div class="process-steps">
    <div class="step">Planning</div>
    <div class="step">Design</div>
    <div class="step">Development</div>
    <div class="step">Testing</div>
    <div class="step">Launch</div>
  </div>
</section>
<section class="testimonials">
  <h2>What Clients Say</h2>

  <div class="testimonial-grid">
    <div class="testimonial">
      <p>"Great service and very professional team."</p>
      <h4>- Client A</h4>
    </div>

    <div class="testimonial">
      <p>"Our website performance improved a lot."</p>
      <h4>- Client B</h4>
    </div>

    <div class="testimonial">
      <p>"Highly recommended for web development."</p>
      <h4>- Client C</h4>
    </div>
  </div>
</section>

@endsection
