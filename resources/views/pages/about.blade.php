@extends('layouts.app')

@section('title', 'About Us | Nexora Digital')

@section('content')

<!-- PAGE HERO -->
<section class="inner-hero">

    <div class="container narrow-container">

        <span class="section-label">
            ABOUT NEXORA
        </span>

        <h1>
            We build technology
            <span>that helps people.</span>
        </h1>

        <p>
            Nexora Digital is a modern technology company focused
            on creating practical, elegant, and reliable digital
            solutions for growing organizations.
        </p>

    </div>

</section>


<!-- COMPANY STORY -->
<section class="section section-white">

    <div class="container story-layout">

        <div class="story-title">

            <span class="section-label">
                OUR STORY
            </span>

            <h2>
                Small team.
                <span>Big thinking.</span>
            </h2>

        </div>


        <div class="story-content">

            <p>
                Nexora Digital was founded around a simple idea:
                technology should make business easier, not more
                complicated.
            </p>

            <p>
                We work with organizations that want to improve
                their digital presence, streamline their operations,
                and create better experiences for their customers.
            </p>

            <p>
                Our approach combines thoughtful design, dependable
                engineering, and clear communication. Every project
                starts with understanding the problem before deciding
                on the technology.
            </p>

            <p>
                From websites and mobile applications to cloud
                solutions and technology consulting, we aim to
                create products that provide long-term value.
            </p>

        </div>

    </div>

</section>


<!-- MISSION AND VISION -->
<section class="section section-light">

    <div class="container mission-grid">

        <div class="mission-card dark-card">

            <div class="mission-icon">
                <i class="bi bi-bullseye"></i>
            </div>

            <span class="section-label light-label">
                OUR MISSION
            </span>

            <h2>
                Make useful technology accessible
                to growing businesses.
            </h2>

            <p>
                We transform business challenges into practical
                digital solutions through thoughtful design,
                modern technology, and dependable engineering.
            </p>

        </div>


        <div class="mission-card">

            <div class="mission-icon green-icon">
                <i class="bi bi-eye"></i>
            </div>

            <span class="section-label">
                OUR VISION
            </span>

            <h2>
                A future where technology creates
                opportunity, not complexity.
            </h2>

            <p>
                We envision a world where organizations can
                confidently use technology to improve their
                people, processes, and customer experiences.
            </p>

        </div>

    </div>

</section>


<!-- CORE VALUES -->
<section class="section section-white">

    <div class="container">

        <div class="center-heading">

            <span class="section-label">
                OUR VALUES
            </span>

            <h2>
                Principles behind
                <span>our work.</span>
            </h2>

            <p>
                These values guide how we design, develop,
                communicate, and collaborate.
            </p>

        </div>


        <div class="values-grid">

            @foreach($values as $value)

                <article class="value-card">

                    <div class="value-icon">
                        <i class="bi {{ $value['icon'] }}"></i>
                    </div>

                    <span class="value-number">
                        0{{ $loop->iteration }}
                    </span>

                    <h3>
                        {{ $value['title'] }}
                    </h3>

                    <p>
                        {{ $value['description'] }}
                    </p>

                </article>

            @endforeach

        </div>

    </div>

</section>


<!-- TEAM -->
<section class="section section-light">

    <div class="container">

        <div class="section-heading">

            <div>

                <span class="section-label">
                    OUR TEAM
                </span>

                <h2>
                    Curious minds,
                    <span>one direction.</span>
                </h2>

            </div>

            <p>
                Our people bring different perspectives and
                skills together to create better solutions.
            </p>

        </div>


        <div class="team-grid">

            <article class="team-member">

                <div class="team-avatar">
                    AM
                </div>

                <h3>
                    Alex Morgan
                </h3>

                <p>
                    Product Strategy
                </p>

            </article>


            <article class="team-member">

                <div class="team-avatar">
                    JR
                </div>

                <h3>
                    Jamie Reyes
                </h3>

                <p>
                    Lead Developer
                </p>

            </article>


            <article class="team-member">

                <div class="team-avatar">
                    SK
                </div>

                <h3>
                    Sam Kim
                </h3>

                <p>
                    UI/UX Designer
                </p>

            </article>


            <article class="team-member">

                <div class="team-avatar">
                    DL
                </div>

                <h3>
                    Dana Lee
                </h3>

                <p>
                    Cloud Engineer
                </p>

            </article>

        </div>

    </div>

</section>


<!-- ABOUT CTA -->
<section class="dark-cta">

    <div class="container">

        <div class="cta-content">

            <span class="section-label light-label">
                WORK WITH US
            </span>

            <h2>
                Have an idea?
                <span>Let's make it real.</span>
            </h2>

            <p>
                We'd love to learn about your goals and explore
                what we can build together.
            </p>

            <a href="{{ route('contact') }}" class="btn-white">
                Contact Nexora
                <i class="bi bi-arrow-up-right"></i>
            </a>

        </div>

    </div>

</section>

@endsection