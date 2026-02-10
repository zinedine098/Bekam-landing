<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-100 font-display">```html




    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec6d",
                        "background-light": "#f6f8f7",
                        "background-dark": "#102218",
                        "brand-teal": "#0d9488",
                        "brand-wood": "#5d4037",
                    },
                    fontFamily: {
                        "display": ["Manrope"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Manrope', sans-serif;
        }

        .wood-accent {
            border-bottom: 4px solid #5d4037;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }
    </style>
    <!-- Header / Navigation -->
    <header class="fixed top-0 w-full z-50 glass-nav border-b border-primary/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                        <span class="material-icons text-white">medical_services</span>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-brand-teal dark:text-primary">Praktik
                        Bekam</span>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8 items-center">
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="{{ route('home') }}">Beranda</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="{{ route('home') }}#layanan">Layanan</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="{{ route('landing.articles.index') }}">Berita</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="{{ route('landing.videos.index') }}">Video</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors"
                        href="{{ route('home') }}#kontak">Kontak</a>
                    <a class="bg-primary hover:bg-primary/90 text-background-dark px-6 py-2.5 rounded-full font-bold text-sm transition-all shadow-lg shadow-primary/20"
                        href="#">
                        Booking Sekarang
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn"
                        class="p-2 text-slate-800 dark:text-white hover:text-primary transition-colors">
                        <span class="material-icons">menu</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu"
            class="hidden md:hidden bg-white/95 dark:bg-slate-900/95 backdrop-blur-md border-b border-primary/10 absolute w-full left-0 top-20 shadow-lg transition-all duration-300">
            <div class="px-4 py-4 space-y-4 flex flex-col">
                <a class="mobile-link text-sm font-semibold hover:text-primary transition-colors py-2 px-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800"
                    href="{{ route('home') }}">Beranda</a>
                <a class="mobile-link text-sm font-semibold hover:text-primary transition-colors py-2 px-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800"
                    href="{{ route('home') }}#layanan">Layanan</a>
                <a class="mobile-link text-sm font-semibold hover:text-primary transition-colors py-2 px-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800"
                    href="{{ route('landing.articles.index') }}">Berita</a>
                <a class="mobile-link text-sm font-semibold hover:text-primary transition-colors py-2 px-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800"
                    href="{{ route('landing.videos.index') }}">Video</a>
                <a class="mobile-link text-sm font-semibold hover:text-primary transition-colors py-2 px-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800"
                    href="{{ route('home') }}#kontak">Kontak</a>
                <a class="mobile-link bg-primary hover:bg-primary/90 text-background-dark px-4 py-3 rounded-xl font-bold text-sm transition-all shadow-lg shadow-primary/20 text-center"
                    href="#">
                    Booking Sekarang
                </a>
            </div>
        </div>
    </header>
    @yield('content')
    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 pt-20 pb-10 border-t-8 border-brand-wood" id="kontak">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Branding -->
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-primary rounded flex items-center justify-center">
                            <span class="material-icons text-white text-lg">medical_services</span>
                        </div>
                        <span class="text-xl font-bold tracking-tight text-white">Praktik Bekam</span>
                    </div>
                    <p class="text-sm leading-relaxed mb-6">
                        Pelopor terapi bekam modern yang memadukan keahlian medis dan nilai sunnah untuk kesehatan
                        optimal keluarga Indonesia.
                    </p>
                    <div class="flex gap-4">
                        <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all"
                            href="#">
                            <svg class="w-5 h-5 fill-current" viewbox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.332 3.608 1.308.975.975 1.245 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.332 2.633-1.308 3.608-.975.975-2.242 1.245-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.332-3.608-1.308-.975-.975-1.245-2.242-1.308-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.332-2.633 1.308-3.608.975-.975 2.242-1.245 3.608-1.308 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.073 4.948.073s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.058-1.281.072-1.689.072-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.058-1.69-.072-4.949-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                                </path>
                            </svg>
                        </a>
                        <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all"
                            href="#">
                            <svg class="w-5 h-5 fill-current" viewbox="0 0 24 24">
                                <path
                                    d="M19.057 3.5a6.746 6.746 0 0 0-4.741 1.955c-5.071 5.07-5.147 5.17-5.238 5.448h-2.078v4.28h2.078v8.817h4.348v-8.817h3.134l.473-4.28h-3.607v-.509c0-1.145.253-1.924 1.837-1.924h1.934V3.5h-3.138z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Navigation -->
                <div>
                    <h4 class="text-white font-bold mb-6">Menu Utama</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a class="hover:text-primary transition-colors" href="#">Beranda</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Daftar Layanan</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Artikel Kesehatan</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">Galeri Video</a></li>
                        <li><a class="hover:text-primary transition-colors" href="#">FAQ</a></li>
                    </ul>
                </div>
                <!-- Contact Info -->
                <div class="col-span-1 md:col-span-2">
                    <h4 class="text-white font-bold mb-6">Lokasi &amp; Kontak</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex gap-4">
                            <span class="material-icons text-primary">location_on</span>
                            <div class="text-sm">
                                <p class="font-bold text-white mb-1">Klinik Utama Jakarta</p>
                                <p>Jl. Kesehatan No. 123, Jakarta Selatan, 12345</p>
                                <a class="text-primary hover:underline mt-2 inline-block" href="#">Buka di
                                    Google Maps</a>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span class="material-icons text-primary">call</span>
                            <div class="text-sm">
                                <p class="font-bold text-white mb-1">Hubungi Kami</p>
                                <p>WhatsApp: +62 812 3456 7890</p>
                                <p>Email: info@praktikbekam.com</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-8 rounded-xl overflow-hidden border border-slate-700 h-32 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all">
                        <img class="w-full h-full object-cover" data-alt="Map location in Jakarta"
                            data-location="Jakarta"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiisqR1XSuF9shSoAKurbEcIeWCiWafDUSBENH9gFsu-pO5_5wbN0LmXsFmziR2Rav037e_h0AAACPdE_4HkZ7D_z9rZD-v_mMdoosw7GUQkpt_JFJsqxhrOwlCY9BCCrYK-uJ2auaPmB92tDmZkE-wibT5FnLR35OXefi69BFNIEgeKzzKIITpZ0rUaa2vFBbbbQF3Dy26C3s8gXKcYjAfRl5URTqlDXnrYTYoadQu_4V8DbRowzpB962d0kaH3ruEpYTsuwbdsxs" />
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs">
                <p>© 2024 Praktik Bekam Profesional. Seluruh Hak Cipta Dilindungi.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a class="hover:text-white" href="#">Kebijakan Privasi</a>
                    <a class="hover:text-white" href="#">Syarat &amp; Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-link');
            const icon = mobileMenuBtn.querySelector('.material-icons');

            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                if (mobileMenu.classList.contains('hidden')) {
                    icon.textContent = 'menu';
                } else {
                    icon.textContent = 'close';
                }
            });

            // Close mobile menu when link is clicked
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    icon.textContent = 'menu';
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target) && !mobileMenu
                    .classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    icon.textContent = 'menu';
                }
            });
        });
    </script>
</body>

</html><!-- End of File -->
