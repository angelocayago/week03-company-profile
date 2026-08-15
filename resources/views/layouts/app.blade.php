<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Nexora Digital - Modern digital solutions for modern businesses.">

    <title>
        @yield('title', 'Nexora Digital')
    </title>


    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <!-- Google Fonts -->
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >


    <!-- Company CSS -->
    <link
        rel="stylesheet"
        href="{{ asset('css/company.css') }}"
    >

</head>


<body>

    <!-- Navigation -->
    @include('components.navbar')


    <!-- Main Content -->
    <main>

        @yield('content')

    </main>


    <!-- Footer -->
    @include('components.footer')


    <!-- Mobile Navigation Script -->
    <script>

        const menuButton = document.querySelector('.mobile-menu');

        const mobileNav = document.querySelector('.navbar-links');

        if (menuButton && mobileNav) {

            menuButton.addEventListener('click', function () {

                mobileNav.classList.toggle('mobile-open');

            });

        }

    </script>

</body>

</html>