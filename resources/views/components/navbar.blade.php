<nav class="navbar">

    <div class="container navbar-container">


        <!-- Logo -->
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


        <!-- Navigation -->
        <div class="navbar-links">

            <a
                href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'active' : '' }}"
            >
                Home
            </a>


            <a
                href="{{ route('about') }}"
                class="{{ request()->routeIs('about') ? 'active' : '' }}"
            >
                About
            </a>


            <a
                href="{{ route('services') }}"
                class="{{ request()->routeIs('services') ? 'active' : '' }}"
            >
                Services
            </a>


            <a
                href="{{ route('contact') }}"
                class="{{ request()->routeIs('contact') ? 'active' : '' }}"
            >
                Contact
            </a>

        </div>


        <!-- CTA -->
        <a href="{{ route('contact') }}" class="navbar-cta">

            Let's Talk

            <i class="bi bi-arrow-up-right"></i>

        </a>


        <!-- Mobile Menu -->
        <button class="mobile-menu">

            <i class="bi bi-list"></i>

        </button>

    </div>

</nav>