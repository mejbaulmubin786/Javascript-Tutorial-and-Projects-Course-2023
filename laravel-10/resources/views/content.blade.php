@extends('layouts.app')

@section('title', 'Welcome to My Website')

@section('content')
    <div class="container">
        <div class="hero-section">
            <h1>Welcome to MyWebsite</h1>
            <p>Your one-stop solution for all your needs. Explore our services and know more about us.</p>
            <a href="{{ url('/services') }}" class="btn-primary">Explore Services</a>
        </div>

        <div class="services-section">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service-item">
                    <h3>Web Development</h3>
                    <p>We provide top-notch web development services to build robust and scalable websites.</p>
                </div>
                <div class="service-item">
                    <h3>Mobile Apps</h3>
                    <p>Our team designs and develops high-quality mobile applications for all platforms.</p>
                </div>
                <div class="service-item">
                    <h3>SEO Optimization</h3>
                    <p>Optimize your website for search engines with our expert SEO services.</p>
                </div>
            </div>
        </div>

        <div class="about-section">
            <h2>About Us</h2>
            <p>At MyWebsite, we are committed to delivering the best services to our clients. Our team of experts works hard to ensure your success in the digital world. From web development to SEO, we offer a wide range of services designed to help you grow your business.</p>
        </div>

        <div class="contact-section">
            <h2>Get in Touch</h2>
            <p>If you have any queries or would like to know more about our services, feel free to contact us.</p>
            <a href="{{ url('/contact') }}" class="btn-secondary">Contact Us</a>
        </div>
    </div>

    {{-- Custom CSS for Content --}}
    <style>
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .hero-section {
            text-align: center;
            padding: 50px 0;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn-primary, .btn-secondary {
            display: inline-block;
            padding: 10px 20px;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #495057;
        }

        .services-section, .about-section, .contact-section {
            margin-bottom: 40px;
        }

        .services-grid {
            display: flex;
            gap: 20px;
        }

        .service-item {
            flex: 1;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }

        .service-item h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .service-item p {
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .services-grid {
                flex-direction: column;
            }
        }
    </style>
@endsection
