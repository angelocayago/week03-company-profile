@extends('layouts.app')

@section('title', 'Nexora Digital | Technology That Moves Business Forward')

@section('content')

<!-- HERO SECTION -->
<section class="hero-section">

    <div class="container hero-container">

        <div class="hero-content">

            <div class="eyebrow">
                <span class="eyebrow-dot"></span>
                DIGITAL SOLUTIONS FOR MODERN BUSINESS
            </div>

            <h1>
                Building the
                <span>digital future</span>
                of ambitious businesses.
            </h1>

            <p class="hero-description">
                Nexora Digital creates modern websites, applications,
                and technology solutions that help businesses grow,
                connect, and compete in a digital-first world.
            </p>

            <div class="hero-buttons">

                <a href="{{ route('services') }}" class="btn-primary">
                    Explore Our Services
                    <i class="bi bi-arrow-up-right"></i>
                </a>

                <a href="{{ route('about') }}" class="btn-secondary">
                    Discover Nexora
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>

            <div class="hero-stats">

                <div class="hero-stat">
                    <strong>6+</strong>
                    <span>Core Services</span>
                </div>

                <div class="stat-divider"></div>

                <div class="hero-stat">
                    <strong>100%</strong>
                    <span>Client Focused</span>
                </div>

                <div class="stat-divider"></div>

                <div class="hero-stat">
                    <strong>24/7</strong>
                    <span>Innovation</span>
                </div>

            </div>

        </div>


        <!-- HERO VISUAL -->
        <div class="hero-visual">

            <div class="hero-glow"></div>

            <div class="dashboard-card">

                <div class="dashboard-header">

                    <div>
                        <span class="dashboard-label">
                            DIGITAL PERFORMANCE
                        </span>

                        <h3>
                            Growth Overview
                        </h3>
                    </div>

                    <div class="dashboard-menu">
                        <i class="bi bi-three-dots"></i>
                    </div>

                </div>


                <div class="growth-number">

                    <strong>+84.6%</strong>

                    <span>
                        <i class="bi bi-arrow-up"></i>
                        12.4%
                    </span>

                </div>


                <div class="chart">

                    <div class="chart-line chart-line-1"></div>
                    <div class="chart-line chart-line-2"></div>
                    <div class="chart-line chart-line-3"></div>

                    <div class="chart-bars">

                        <span style="height: 35%"></span>
                        <span style="height: 48%"></span>
                        <span style="height: 42%"></span>
                        <span style="height: 61%"></span>
                        <span style="height: 55%"></span>
                        <span style="height: 70%"></span>
                        <span style="height: 67%"></span>
                        <span style="height: 88%"></span>

                    </div>

                </div>


                <div class="dashboard-footer">

                    <span>
                        <i class="bi bi-check-circle-fill"></i>
                        Systems optimized
                    </span>

                    <span>
                        2026
                    </span>

                </div>

            </div>


            <div class="floating-card floating-card-top">

                <div class="floating-icon">
                    <i class="bi bi-lightning-charge-fill"></i>
                </div>

                <div>
                    <strong>Fast Delivery</strong>
                    <small>Optimized workflow</small>
                </div>

            </div>


            <div class="floating-card floating-card-bottom">

                <div class="floating-icon">
                    <i class="bi bi-shield-check"></i>
                </div>

                <div>
                    <strong>Secure by Design</strong>
                    <small>Built with best practices</small>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- INTRODUCTION -->
<section class="section section-white">

    <div class="container">

        <div class="two-column-heading">

            <div>

                <span class="section-label">
                    WHO WE ARE
                </span>

                <h2>
                    Technology with
                    <span>purpose.</span>
                </h2>

            </div>

            <div>

                <p class="large-text">
                    Nexora Digital is a technology-focused company
                    dedicated to helping organizations turn ideas
                    into meaningful digital experiences.
                </p>

                <a href="{{ route('about') }}" class="inline-link">
                    Learn more about us
                    <i class="bi bi-arrow-up-right"></i>
                </a>

            </div>

        </div>

    </div>

</section>


<!-- SERVICES PREVIEW -->
<section class="section section-light">

    <div class="container">

        <div class="section-heading">

            <div>

                <span class="section-label">
                    WHAT WE DO
                </span>

                <h2>
                    Solutions designed
                    <span>to move you forward.</span>
                </h2>

            </div>

            <p>
                We combine technology, creativity, and strategy
                to build digital solutions that solve real
                business problems.
            </p>

        </div>


        <div class="service-grid">

            @foreach($services as $service)

                <article class="service-card">

                    <div class="service-card-top">

                        <div class="service-icon">
                            <i class="bi {{ $service['icon'] }}"></i>
                        </div>

                        <span class="service-number">
                            0{{ $loop->iteration }}
                        </span>

                    </div>

                    <h3>
                        {{ $service['title'] }}
                    </h3>

                    <p>
                        {{ $service['description'] }}
                    </p>

                    <a href="{{ route('services') }}">
                        Learn more
                        <i class="bi bi-arrow-up-right"></i>
                    </a>

                </article>

            @endforeach

        </div>


        <div class="center-button">

            <a href="{{ route('services') }}" class="btn-outline">
                View All Services
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="dark-cta">

    <div class="container">

        <div class="cta-content">

            <span class="section-label light-label">
                HAVE A PROJECT IN MIND?
            </span>

            <h2>
                Let's build something
                <span>worth remembering.</span>
            </h2>

            <p>
                Tell us what you're working on and let's explore
                how technology can help bring your vision to life.
            </p>

            <a href="{{ route('contact') }}" class="btn-white">
                Start a Conversation
                <i class="bi bi-arrow-up-right"></i>
            </a>

        </div>

    </div>

</section>

@endsection