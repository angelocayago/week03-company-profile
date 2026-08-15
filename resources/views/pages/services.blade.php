@extends('layouts.app')

@section('title', 'Our Services | Nexora Digital')

@section('content')

<!-- PAGE HERO -->
<section class="inner-hero">

    <div class="container narrow-container">

        <span class="section-label">
            OUR SERVICES
        </span>

        <h1>
            Digital solutions built
            <span>around your goals.</span>
        </h1>

        <p>
            From websites and mobile applications to cloud
            infrastructure and cybersecurity, we provide the
            technology services modern businesses need.
        </p>

    </div>

</section>


<!-- SERVICES -->
<section class="section section-white">

    <div class="container">

        <div class="services-intro">

            <span class="section-label">
                WHAT WE OFFER
            </span>

            <h2>
                Technology that works
                <span>for your business.</span>
            </h2>

            <p>
                Every service is designed to solve a specific
                business challenge while creating a strong
                foundation for future growth.
            </p>

        </div>


        <div class="services-list">

            @foreach($services as $service)

                <article class="large-service-card">

                    <div class="large-service-number">
                        0{{ $loop->iteration }}
                    </div>


                    <div class="large-service-icon">

                        <i class="bi {{ $service['icon'] }}"></i>

                    </div>


                    <div class="large-service-content">

                        <h2>
                            {{ $service['title'] }}
                        </h2>

                        <p>
                            {{ $service['description'] }}
                        </p>

                        <span class="technology-tag">
                            {{ $service['tag'] }}
                        </span>

                    </div>


                    <div class="large-service-arrow">

                        <i class="bi bi-arrow-up-right"></i>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>


<!-- PROCESS -->
<section class="section section-light">

    <div class="container">

        <div class="center-heading">

            <span class="section-label">
                HOW WE WORK
            </span>

            <h2>
                Simple process.
                <span>Strong results.</span>
            </h2>

            <p>
                We keep our process straightforward so you always
                understand where your project stands.
            </p>

        </div>


        <div class="process-grid">

            <div class="process-step">

                <span class="process-number">
                    01
                </span>

                <div class="process-icon">
                    <i class="bi bi-chat-square-text"></i>
                </div>

                <h3>
                    Discover
                </h3>

                <p>
                    We understand your business, goals,
                    users, and technical requirements.
                </p>

            </div>


            <div class="process-step">

                <span class="process-number">
                    02
                </span>

                <div class="process-icon">
                    <i class="bi bi-pencil-square"></i>
                </div>

                <h3>
                    Design
                </h3>

                <p>
                    We create the structure, user experience,
                    and visual direction for your solution.
                </p>

            </div>


            <div class="process-step">

                <span class="process-number">
                    03
                </span>

                <div class="process-icon">
                    <i class="bi bi-code-slash"></i>
                </div>

                <h3>
                    Build
                </h3>

                <p>
                    Our developers transform the approved
                    solution into reliable working software.
                </p>

            </div>


            <div class="process-step">

                <span class="process-number">
                    04
                </span>

                <div class="process-icon">
                    <i class="bi bi-rocket-takeoff"></i>
                </div>

                <h3>
                    Launch
                </h3>

                <p>
                    We test, refine, deploy, and help your
                    digital solution move forward.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- SERVICES CTA -->
<section class="dark-cta">

    <div class="container">

        <div class="cta-content">

            <span class="section-label light-label">
                READY TO START?
            </span>

            <h2>
                Let's create something
                <span>meaningful.</span>
            </h2>

            <p>
                Have a project, idea, or business challenge?
                Let's discuss how technology can help.
            </p>

            <a href="{{ route('contact') }}" class="btn-white">

                Get In Touch

                <i class="bi bi-arrow-up-right"></i>

            </a>

        </div>

    </div>

</section>

@endsection