<footer class="footer">

    <div class="container">


        <div class="footer-main">


            <!-- Brand -->
            <div class="footer-brand">

                <a href="{{ route('home') }}" class="navbar-logo">

                    <div class="logo-mark">
                        N
                    </div>

                    <div class="logo-text">

                        <strong>
                            NEXORA
                        </strong>

                        <span>
                            DIGITAL
                        </span>

                    </div>

                </a>


                <p>
                    Building digital experiences and technology
                    solutions that help modern businesses move forward.
                </p>


                <div class="footer-socials">

                    <a href="#" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="#" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#" aria-label="GitHub">
                        <i class="bi bi-github"></i>
                    </a>

                </div>

            </div>


            <!-- Navigation -->
            <div class="footer-column">

                <h4>
                    Navigation
                </h4>

                <a href="{{ route('home') }}">
                    Home
                </a>

                <a href="{{ route('about') }}">
                    About
                </a>

                <a href="{{ route('services') }}">
                    Services
                </a>

                <a href="{{ route('contact') }}">
                    Contact
                </a>

            </div>


            <!-- Services -->
            <div class="footer-column">

                <h4>
                    Services
                </h4>

                <a href="{{ route('services') }}">
                    Web Development
                </a>

                <a href="{{ route('services') }}">
                    Mobile Development
                </a>

                <a href="{{ route('services') }}">
                    UI/UX Design
                </a>

                <a href="{{ route('services') }}">
                    Cloud Solutions
                </a>

            </div>


            <!-- Contact -->
            <div class="footer-column">

                <h4>
                    Contact
                </h4>

                <a href="mailto:hello@nexoradigital.test">
                    hello@nexoradigital.test
                </a>

                <a href="tel:+639171234567">
                    +63 917 123 4567
                </a>

                <span>
                    Cavinti, Laguna
                </span>

                <span>
                    Philippines
                </span>

            </div>

        </div>


        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} Nexora Digital.
                All rights reserved.
            </p>

            <p>
                ITST 302 — Client-Server Technologies
            </p>

        </div>

    </div>

</footer>