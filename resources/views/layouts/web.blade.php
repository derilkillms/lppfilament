<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Politeknik LPP Yogyakarta')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Merriweather:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a5c2a',
                        'primary-dark': '#0f3d1b',
                        'primary-light': '#2d8a44',
                        accent: '#f0a500',
                        navy: '#1b2e5e',
                        'navy-light': '#2a4080',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        serif: ['Merriweather', 'serif'],
                    },
                }
            }
        }
    </script>
    <style>
        /* Scroll animation */
        .fade-in {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Hero overlay */
        .hero-overlay {
            background: linear-gradient(to bottom, rgba(15, 61, 27, 0.72) 0%, rgba(26, 92, 42, 0.55) 60%, rgba(0, 0, 0, 0.3) 100%);
        }

        /* Nav hover underline */
        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #f0a500;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Service card hover */
        .service-card:hover .service-icon {
            transform: scale(1.15);
            background: #f0a500 !important;
        }

        .service-icon {
            transition: all 0.3s ease;
        }

        /* Partner logo grayscale */
        .partner-logo {
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .partner-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* News card hover */
        .news-card:hover img {
            transform: scale(1.05);
        }

        .news-card img {
            transition: transform 0.4s ease;
        }

        /* Announcement card */
        .ann-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
        }

        .ann-card {
            transition: all 0.3s ease;
        }

        /* Ticker */
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .marquee-inner {
            animation: marquee 30s linear infinite;
        }

        .marquee-inner:hover {
            animation-play-state: paused;
        }

        /* Pulse dot */
        @keyframes pulse-dot {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.4;
            }
        }

        .pulse-dot {
            animation: pulse-dot 1.8s ease-in-out infinite;
        }

        /* Gallery hover */
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay {
            transition: opacity 0.3s ease;
        }
    </style>
</head>

<body class="font-sans text-gray-800 antialiased">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        // Scroll fade-in observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
    </script>
</body>

</html>
