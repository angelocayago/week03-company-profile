@extends('layouts.app')

@section('title', 'Contact Us | Nexora Digital')

@section('content')

<!-- PAGE HERO -->
<section class="inner-hero">

    <div class="container narrow-container">

        <span class="section-label">
            GET IN TOUCH
        </span>

        <h1>
            Let's start a
            <span>conversation.</span>
        </h1>

        <p>
            Have a project, question, or idea?
            Tell us what you're working on and let's explore
            how we can help.
        </p>

    </div>

</section>


<!-- CONTACT -->
<section class="section section-white">

    <div class="container contact-layout">

        <!-- CONTACT INFORMATION -->
        <div class="contact-information">

            <span class="section-label">
                CONTACT INFORMATION
            </span>

            <h2>
                Let's talk about
                <span>your next project.</span>
            </h2>

            <p>
                Whether you need a new website, mobile application,
                cloud solution, or technology strategy, our team
                would be happy to hear from you.
            </p>


            <div class="contact-details">

                <a href="mailto:hello@nexoradigital.test"
                   class="contact-detail">

                    <div class="contact-detail-icon">
                        <i class="bi bi-envelope"></i>
                    </div>

                    <div>
                        <small>Email</small>

                        <strong>
                            hello@nexoradigital.test
                        </strong>
                    </div>

                </a>


                <a href="tel:+639171234567"
                   class="contact-detail">

                    <div class="contact-detail-icon">
                        <i class="bi bi-telephone"></i>
                    </div>

                    <div>
                        <small>Phone</small>

                        <strong>
                            +63 917 123 4567
                        </strong>
                    </div>

                </a>


                <div class="contact-detail">

                    <div class="contact-detail-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>

                    <div>
                        <small>Office</small>

                        <strong>
                            Cavinti, Laguna, Philippines
                        </strong>
                    </div>

                </div>


                <div class="contact-detail">

                    <div class="contact-detail-icon">
                        <i class="bi bi-clock"></i>
                    </div>

                    <div>
                        <small>Business Hours</small>

                        <strong>
                            Monday – Friday, 9:00 AM – 5:00 PM
                        </strong>
                    </div>

                </div>

            </div>


            <!-- SOCIAL MEDIA -->
            <div class="contact-socials">

                <span>
                    Follow us
                </span>

                <div>

                    <a href="#">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-github"></i>
                    </a>

                </div>

            </div>

        </div>


        <!-- FORM -->
        <div class="contact-form-container">

            <div class="form-header">

                <span class="section-label">
                    SEND A MESSAGE
                </span>

                <h2>
                    Tell us about
                    <span>your project.</span>
                </h2>

            </div>


            <form action="#"
                  method="POST"
                  class="professional-form"
                  onsubmit="return false;">

                <div class="form-grid">

                    <div class="form-group">

                        <label for="name">
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Juan Dela Cruz">

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="juan@example.com">

                    </div>

                </div>


                <div class="form-group">

                    <label for="company">
                        Company
                    </label>

                    <input
                        type="text"
                        id="company"
                        name="company"
                        placeholder="Your company name">

                </div>


                <div class="form-group">

                    <label for="service">
                        Service Needed
                    </label>

                    <select id="service"
                            name="service">

                        <option value="">
                            Select a service
                        </option>

                        <option value="web-development">
                            Web Development
                        </option>

                        <option value="mobile-development">
                            Mobile Development
                        </option>

                        <option value="ui-ux">
                            UI/UX Design
                        </option>

                        <option value="cloud">
                            Cloud Solutions
                        </option>

                        <option value="cybersecurity">
                            Cybersecurity
                        </option>

                        <option value="consulting">
                            IT Consulting
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label for="message">
                        Message
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        placeholder="Tell us about your project..."></textarea>

                </div>


                <button type="submit"
                        class="btn-primary form-submit">

                    Send Message

                    <i class="bi bi-arrow-up-right"></i>

                </button>


                <p class="form-disclaimer">

                    <i class="bi bi-info-circle"></i>

                    This contact form is for UI demonstration
                    only. Form processing is not included in
                    this laboratory activity.

                </p>

            </form>

        </div>

    </div>

</section>


<!-- LOCATION -->
<section class="section section-light">

    <div class="container">

        <div class="location-header">

            <span class="section-label">
                OUR LOCATION
            </span>

            <h2>
                Find us in
                <span>Cavinti, Laguna.</span>
            </h2>

        </div>


        <div class="map-placeholder">

            <div class="map-pattern"></div>

            <div class="map-marker">

                <div class="map-marker-icon">

                    <i class="bi bi-geo-alt-fill"></i>

                </div>

                <div class="map-marker-info">

                    <strong>
                        Nexora Digital
                    </strong>

                    <span>
                        Cavinti, Laguna, Philippines
                    </span>

                </div>

            </div>

            <div class="map-road map-road-one"></div>
            <div class="map-road map-road-two"></div>
            <div class="map-road map-road-three"></div>

        </div>

    </div>

</section>


<!-- CONTACT CTA -->
<section class="dark-cta">

    <div class="container">

        <div class="cta-content">

            <span class="section-label light-label">
                NEXORA DIGITAL
            </span>

            <h2>
                Your next idea could be
                <span>the next big thing.</span>
            </h2>

            <p>
                Let's turn that idea into a digital experience
                people will remember.
            </p>

        </div>

    </div>

</section>

@endsection