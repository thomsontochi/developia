<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('meta_description', 'Austin Opia - Experienced Full Stack Developer specializing in PHP and Laravel. Transforming complex ideas into sleek web solutions.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Full Stack Developer, Laravel Developer, PHP Developer, Web Developer, Freelance Developer, Austin Opia')">
    <meta name="author" content="Austin Opia">
    <meta property="og:title" content="@yield('og_title', 'Austin Opia - Full Stack Developer')">
    <meta property="og:description" content="@yield('og_description', 'Transforming complex ideas into sleek web solutions. Available for freelance work.')">
    <meta property="og:image" content="{{ asset('images/mebright.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Austin Opia - Full Stack Developer')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Experienced Full Stack Developer specializing in PHP and Laravel. Available for freelance work.')">
    <meta name="twitter:image" content="{{ asset('images/mebright.webp') }}">

    <title>@yield('title', 'Austin Opia - Full Stack Developer | PHP & Laravel Expert')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/developia.css" rel="stylesheet">

    <link rel="canonical" href="{{ url()->current() }}" />
    {{-- <link rel="canonical" href="@yield('canonical', url()->current())" /> --}}

    {{-- {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body>
    {{-- 
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section> --}}

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/custom.js"></script>

    <script src="{{ mix('js/app.js') }}"></script>

    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Person",
          "name": "Austin Opia",
          "jobTitle": "Full Stack Developer",
          "url": "{{ url('/') }}",
          "sameAs": [
            "https://x.com/SirAlexthomson",
            "https://www.instagram.com/austinopia/",
            "https://www.linkedin.com/in/developia/",
            "https://www.threads.net/@austinopia"
          ],
          "description": "Experienced Full Stack Developer specializing in PHP and Laravel, and web 3.0"
        }
        </script>


</body>

</html>
