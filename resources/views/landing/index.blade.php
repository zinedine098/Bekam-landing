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
    <title>Praktik Bekam - Kesehatan Alami Profesional</title>
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
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#">Beranda</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#layanan">Layanan</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#berita">Berita</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#video">Video</a>
                    <a class="text-sm font-semibold hover:text-primary transition-colors" href="#kontak">Kontak</a>
                    <a class="bg-primary hover:bg-primary/90 text-background-dark px-6 py-2.5 rounded-full font-bold text-sm transition-all shadow-lg shadow-primary/20"
                        href="#">
                        Booking Sekarang
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="p-2 text-slate-800 dark:text-white hover:text-primary transition-colors">
                        <span class="material-icons">menu</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-white/95 dark:bg-slate-900/95 backdrop-blur-md border-b border-primary/10 absolute w-full left-0 top-20 shadow-lg transition-all duration-300">
            <div class="px-4 py-4 space-y-4 flex flex-col">
                <a class="mobile-link text-sm font-semibold hover:text-primary transition-colors py-2 px-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800" href="#">Beranda</a>
                <a class="mobile-link text-sm font-semibold hover:text-primary transition-colors py-2 px-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800" href="#layanan">Layanan</a>
                <a class="mobile-link text-sm font-semibold hover:text-primary transition-colors py-2 px-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800" href="#berita">Berita</a>
                <a class="mobile-link text-sm font-semibold hover:text-primary transition-colors py-2 px-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800" href="#video">Video</a>
                <a class="mobile-link text-sm font-semibold hover:text-primary transition-colors py-2 px-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800" href="#kontak">Kontak</a>
                <a class="mobile-link bg-primary hover:bg-primary/90 text-background-dark px-4 py-3 rounded-xl font-bold text-sm transition-all shadow-lg shadow-primary/20 text-center"
                    href="#">
                    Booking Sekarang
                </a>
            </div>
        </div>
    </header>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-40 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover opacity-20 dark:opacity-10"
                data-alt="Clean and professional modern therapy clinic room"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhs7MiVM7vQ4HZl4HIaqm0KWpuO2Fqgk44Cvwmn79uXkpvA6Ltp1KEZzF6J7Tm7A6aXaBId4CCxBX3Z97Ea6VvRsWJkYIe9UK5F46k5WQMp7MWzlVs1LzhuVrq0VFsMJiHiNT-rlkud_Mp2AS9OeogbtdnpUfEaHhuQY9lhgWnrLvUF3oXXfYawh3MYHzjzUnpmJuQEQMiVkxx58C6Q9vv7KUkdQpPjB__9CUWxtDJjFCawTowTHS2ZefLUFHQqTTIKMPv3KVaJRHa" />
            <div
                class="absolute inset-0 bg-gradient-to-b from-background-light/0 via-background-light to-background-light dark:from-background-dark/0 dark:to-background-dark">
            </div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-teal dark:text-primary">Terapi
                        Bersertifikat</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-extrabold text-brand-teal dark:text-white mb-6 leading-tight">
                    Kesehatan Alami dengan <span class="text-primary">Bekam Profesional</span>
                </h1>
                <p class="text-lg lg:text-xl text-slate-600 dark:text-slate-400 mb-10 leading-relaxed">
                    Kami menghadirkan terapi sunnah dengan standar klinis modern. Mengutamakan sterilitas, kenyamanan,
                    dan hasil maksimal untuk pemulihan kesehatan Anda secara holistik.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button
                        class="bg-primary hover:bg-primary/90 text-background-dark px-10 py-4 rounded-xl font-bold text-lg transition-all flex items-center justify-center gap-2">
                        <span class="material-icons">calendar_today</span>
                        Booking Sekarang
                    </button>
                    <button
                        class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-10 py-4 rounded-xl font-bold text-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-all">
                        Konsultasi Gratis
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Overview -->
    <section class="py-24 bg-white dark:bg-slate-900/50" id="layanan">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-brand-teal dark:text-white mb-4">Layanan Unggulan Kami
                </h2>
                <div class="w-24 h-1.5 bg-primary mx-auto rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1: Hijama -->
                <div
                    class="bg-background-light dark:bg-slate-800 p-8 rounded-xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:border-primary/30 transition-all group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-icons text-primary group-hover:text-white text-3xl">spa</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Hijama Sunnah</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">Terapi bekam klasik
                        mengikuti titik-titik sunnah untuk detoksifikasi tubuh dan meningkatkan imun.</p>
                    <a class="text-primary font-bold text-sm flex items-center gap-1 group-hover:gap-2 transition-all"
                        href="#">
                        Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                </div>
                <!-- Card 2: Bekam Kering -->
                <div
                    class="bg-background-light dark:bg-slate-800 p-8 rounded-xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:border-primary/30 transition-all group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-icons text-primary group-hover:text-white text-3xl">air</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Bekam Kering</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">Fokus pada relaksasi otot
                        dan melancarkan aliran darah tanpa pengeluaran darah, cocok untuk pegal-pegal.</p>
                    <a class="text-primary font-bold text-sm flex items-center gap-1 group-hover:gap-2 transition-all"
                        href="#">
                        Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                </div>
                <!-- Card 3: Bekam Basah -->
                <div
                    class="bg-background-light dark:bg-slate-800 p-8 rounded-xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:border-primary/30 transition-all group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-icons text-primary group-hover:text-white text-3xl">opacity</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Bekam Basah</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">Proses pengeluaran darah
                        kotor (oksidan) dengan teknik steril untuk penyembuhan berbagai penyakit kronis.</p>
                    <a class="text-primary font-bold text-sm flex items-center gap-1 group-hover:gap-2 transition-all"
                        href="#">
                        Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                </div>
                <!-- Card 4: Bekam Listrik -->
                <div
                    class="bg-background-light dark:bg-slate-800 p-8 rounded-xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:border-primary/30 transition-all group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-icons text-primary group-hover:text-white text-3xl">bolt</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Bekam Listrik</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">Inovasi modern yang
                        menggabungkan terapi bekam dengan stimulasi saraf elektrik untuk rehabilitasi saraf.</p>
                    <a class="text-primary font-bold text-sm flex items-center gap-1 group-hover:gap-2 transition-all"
                        href="#">
                        Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest News -->
    <section class="py-24" id="berita">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-brand-teal dark:text-white mb-4">Update Terkini &amp;
                        Tips</h2>
                    <p class="text-slate-600 dark:text-slate-400">Wawasan kesehatan untuk hidup yang lebih baik</p>
                </div>
                <a class="hidden md:flex items-center gap-2 font-bold text-primary hover:text-primary/80 transition-all"
                    href="#">
                    Lihat Semua Berita <span class="material-icons">chevron_right</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Health and wellness flat lay with essential oils"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKVBSAJX08XqRuH6oiQ4YVo19L8iPKJH2KHwDMfby5wR_Un2bvnEMJS0bnx9wjOMhIO7U0HVFkTz61yTKk8LeHOnwRthPErbyy31bPKJ_56S0C-D3nNLpax1lXGo87YR11hP4B7EIxoYYoRavwE9L6y7ScyFTwPtGuJ3zXQTo8rvbSJ6ZD0ZmcdAkuZxRr4x1U1Nj24ZTGDadA7-auFl6p5lKkT4wu_CZnEVYigDx7t4POPeGVyMoUUbIc2eJ8fhbDcILAYk6Gd8HO" />
                        <div
                            class="absolute top-4 left-4 bg-primary text-background-dark px-3 py-1 rounded-md text-xs font-bold uppercase tracking-wider">
                            Tips Sehat</div>
                    </div>
                    <p class="text-xs text-slate-500 mb-2 font-semibold">12 Mei 2024 • Oleh Dr. Ahmad</p>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors">5 Manfaat Bekam untuk
                        Kesehatan Jantung</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4 line-clamp-2">Bekam tidak hanya sekedar
                        mengeluarkan darah, namun memiliki efek signifikan dalam menurunkan tekanan darah...</p>
                    <a class="text-brand-teal dark:text-primary font-bold text-sm underline underline-offset-4"
                        href="#">Read More</a>
                </div>
                <!-- Article 2 -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Healthy organic meal and fresh vegetables"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3NhByQ0-78RZC5oVeq1zfDSOtLR4FQ1G6PKRpfkHEfPU0IIm9gpGo-bhB0tznX6j3KsF1wrn11n3XGjbb5QG6tdKh4ZyB1m8DL9f_S_2tjp4DD51DmTYqryzQtIh0cFw-D5EntZEs0NLZLFWI8EC6aSdFkhKYMcT4kpbPmY_IgtL2H8HhRi3eFZ3wIhcPwEzIna7UWug8Pu66gnxbP4-nFFfr3fFYBeL10LoGmtgFvEUQ0s6acgR4pekYWiqlQwVztZ_5y44HAscr" />
                        <div
                            class="absolute top-4 left-4 bg-primary text-background-dark px-3 py-1 rounded-md text-xs font-bold uppercase tracking-wider">
                            Lifestyle</div>
                    </div>
                    <p class="text-xs text-slate-500 mb-2 font-semibold">10 Mei 2024 • Oleh Tim Medis</p>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors">Pola Makan yang Tepat
                        Sebelum &amp; Sesudah Bekam</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4 line-clamp-2">Untuk mendapatkan hasil
                        maksimal, ada beberapa pantangan dan anjuran makanan yang perlu Anda perhatikan...</p>
                    <a class="text-brand-teal dark:text-primary font-bold text-sm underline underline-offset-4"
                        href="#">Read More</a>
                </div>
                <!-- Article 3 -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-xl mb-6">
                        <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="Modern medical tools and cupping equipment"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEfGYkIcaQDhc3GZw0uWa5-nWP8TBfU5VhXNrd9AwZWFOYKP6vO5T_lL2rdVt6xlEcoKangsJtSUeVhBxkkx0VuCg_TcRnXnSYzK3WPikdftmsngxHJYIrge3_T3lt3xi37kJqCGbA1vuU-COQ4T7Znl0jpA26KCEMH0D5_21EXjyAslNCQPtGjSjnDzX_tMX0RdngRn2uQ8EknR5-nb6WV2Fu-_k5ESlDdsQ4CV8Wvvt3kawVoeqN9tH9gNu-s8NE2S2sgb4SlfSu" />
                        <div
                            class="absolute top-4 left-4 bg-primary text-background-dark px-3 py-1 rounded-md text-xs font-bold uppercase tracking-wider">
                            Edukasi</div>
                    </div>
                    <p class="text-xs text-slate-500 mb-2 font-semibold">08 Mei 2024 • Oleh Dr. Ahmad</p>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors">Standar Sterilisasi
                        Alat Bekam di Klinik Kami</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4 line-clamp-2">Keamanan pasien adalah
                        prioritas utama. Mengenal proses sterilisasi autoclave yang kami terapkan setiap hari...</p>
                    <a class="text-brand-teal dark:text-primary font-bold text-sm underline underline-offset-4"
                        href="#">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Educational Videos -->
    <section class="py-24 bg-brand-teal/5 dark:bg-slate-800/20" id="video">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-brand-teal dark:text-white mb-4">Video Edukasi</h2>
                <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Tonton penjelasan mendalam mengenai
                    prosedur dan manfaat bekam langsung dari para ahli kami.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="relative group aspect-video rounded-2xl overflow-hidden shadow-lg">
                    <img class="w-full h-full object-cover" data-alt="Close up of medical expert explaining therapy"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCH3eCFhvgjpWuNMbedvZTrhxPhrg8U9qR7a6d35tG3slLliwzH1vKGyFlTCHYY-8nnNm4RmSAsYOubeoMAMqqIjyJbpxYnpxqjrJXRmxuDkKYMtjabS-_RKFqKt-_haPq4sdQ43FlUjczbu9GPPEBkjfTMqkqVw08FWHhtG24xnPrgvsT1TTrlFjmg8ZMb31BGcMOH8meG8C2mKXElXYzwqQ7hrnOM33GZ7wcuoXYF7jhdW8llN8wLd9yufKZAPty9aOVB7ZVryqPM" />
                    <div
                        class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-all flex items-center justify-center">
                        <div
                            class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white scale-90 group-hover:scale-100 transition-transform">
                            <span class="material-icons text-4xl">play_arrow</span>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                        <h4 class="text-white font-bold">Prosedur Bekam yang Benar</h4>
                    </div>
                </div>
                <!-- Video 2 -->
                <div class="relative group aspect-video rounded-2xl overflow-hidden shadow-lg">
                    <img class="w-full h-full object-cover"
                        data-alt="Professional laboratory and research environment"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpPwJpvzrgcU1FTGpy6s2Th9vMHnup4IF8IpPDBYHLFkw9Mcqz2681eCiymEvzXDMWCM-pkzGcgTHCFoNpn5Dr6zQ7Q0--zUJTtOMTvc0eIfHgP1XGFDQe-OlOulhNTQj7Agu4v07cVgVuPuo-5ltJ7_6Yqb7ggRPutEvJ9I8QTdivhKWGfie12emngkJrrnHqkRwVIzI169VYAqjkci9MSuY0WQtY1OhQ2LI9jJY1CIbAHkmZvQnuPvLymDUHCfhtmRTaqRIrRHpH" />
                    <div
                        class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-all flex items-center justify-center">
                        <div
                            class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white scale-90 group-hover:scale-100 transition-transform">
                            <span class="material-icons text-4xl">play_arrow</span>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                        <h4 class="text-white font-bold">Analisa Darah Statis (Oksidan)</h4>
                    </div>
                </div>
                <!-- Video 3 -->
                <div class="relative group aspect-video rounded-2xl overflow-hidden shadow-lg">
                    <img class="w-full h-full object-cover" data-alt="Wellness therapy session with wooden accents"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuASDy0iUvwKCG73QGNl9qWaL3SD6Jy118IrYpho0A8OPoy29lnDBz9TU1zhDSVTWz7JMaYUoAWYeR34fdChyAcTPe8QdDfuDwU0LTYF8NUGpQXfWpx2PvzHzX4eEO9FoyiQ2M9adZe8NTKr7r2icUjVcM3EuY8UFqeIwi_oaAtySCzI8V4JkG5Yot6PJojPFYhCgyQ9ruQT-M5UPyl28xXSPG-I4x11bpva0BoS1mr9sOPVEVgmIlxI2icxsPSRM8Bl085dWtve7trt" />
                    <div
                        class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-all flex items-center justify-center">
                        <div
                            class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white scale-90 group-hover:scale-100 transition-transform">
                            <span class="material-icons text-4xl">play_arrow</span>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                        <h4 class="text-white font-bold">Testimoni: Sembuh dari Migrain</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                if (!mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target) && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    icon.textContent = 'menu';
                }
            });
        });
    </script>
</body>

</html><!-- End of File -->
