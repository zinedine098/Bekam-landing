<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Dashboard - Bekam Therapy</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec6d",
                        "background-light": "#f6f8f7",
                        "background-dark": "#102218",
                        "neutral-light": "#e2e8f0",
                        "neutral-dark": "#1e293b",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
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
</head>

<body
    class="font-display bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-100 transition-colors duration-200">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-72 bg-white dark:bg-slate-900 border-r border-primary/10 flex flex-col hidden lg:flex">
            <div class="p-6 flex items-center gap-3">
                <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
                    <span class="material-icons-round">health_and_safety</span>
                </div>
                <div>
                    <h1 class="font-bold text-xl tracking-tight">Bekam <span class="text-primary">Admin</span></h1>
                    <p class="text-[10px] text-slate-400 dark:text-slate-500 uppercase tracking-widest font-bold">Health
                        Center</p>
                </div>
            </div>
            <nav class="flex-1 px-4 mt-4 space-y-1">
                <a class="flex items-center gap-3 px-4 py-3 text-primary bg-primary/10 rounded-xl font-semibold transition-all group"
                    href="#">
                    <span class="material-icons-round text-primary">dashboard</span>
                    <span>Dashboard</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-xl transition-all group"
                    href="#">
                    <span class="material-icons-round group-hover:text-primary">newspaper</span>
                    <span>Manajemen Berita</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-xl transition-all group"
                    href="#">
                    <span class="material-icons-round group-hover:text-primary">video_library</span>
                    <span>Manajemen Video</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-xl transition-all group"
                    href="#">
                    <span class="material-icons-round group-hover:text-primary">medical_services</span>
                    <span>Manajemen Layanan</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-xl transition-all group"
                    href="#">
                    <span class="material-icons-round group-hover:text-primary">calendar_today</span>
                    <span>Booking</span>
                    <span class="ml-auto bg-amber-500 text-white text-[10px] px-2 py-0.5 rounded-full">4 Baru</span>
                </a>
            </nav>
            <div class="p-4 mt-auto">
                <div class="p-4 bg-primary/5 rounded-xl border border-primary/10">
                    <p class="text-xs text-slate-500 dark:text-slate-400 mb-2">Punya pertanyaan?</p>
                    <button
                        class="w-full py-2 bg-primary/20 text-primary hover:bg-primary/30 rounded-lg text-sm font-bold transition-colors">
                        Bantuan Support
                    </button>
                </div>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col overflow-y-auto">
            <!-- Top Bar -->
            <header
                class="h-20 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-primary/5 flex items-center justify-between px-8 sticky top-0 z-10">
                <div>
                    <h2 class="text-sm text-slate-400 dark:text-slate-500 font-medium">Overview</h2>
                    <h3 class="text-lg font-bold text-slate-800 dark:text-white">Welcome back, Admin 👋</h3>
                </div>
                <div class="flex items-center gap-6">
                    <div
                        class="hidden md:flex items-center bg-slate-100 dark:bg-slate-800 px-4 py-2 rounded-full border border-slate-200 dark:border-slate-700">
                        <span class="material-icons-round text-slate-400 text-lg mr-2">search</span>
                        <input
                            class="bg-transparent border-none text-sm focus:ring-0 p-0 w-48 text-slate-600 dark:text-slate-300"
                            placeholder="Search data..." type="text" />
                    </div>
                    <button class="relative p-2 text-slate-400 hover:text-primary transition-colors">
                        <span class="material-icons-round">notifications</span>
                        <span
                            class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-900"></span>
                    </button>
                    <div class="h-8 w-[1px] bg-slate-200 dark:bg-slate-700 mx-1"></div>
                    <div class="flex items-center gap-3 group cursor-pointer">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-bold leading-none">Admin Klinik</p>
                            <p
                                class="text-[10px] text-slate-400 dark:text-slate-500 mt-1 uppercase font-bold tracking-tighter">
                                Superadmin Access</p>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full overflow-hidden border-2 border-primary/20 group-hover:border-primary transition-colors">
                            <img alt="Admin Profile Picture" class="w-full h-full object-cover"
                                data-alt="Doctor portrait for admin profile"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8vmd2LZWOxF6c-0N8P2kezNq61Hx4679MYBmf50zuYl_Fy6y-KzmedtOefkrWfsdVmxjlUjEu7W_o550K7GltAXwcGQEp_40gZXkYO8KOAWXFpkwLAcrGZufX4oXfZ_imE_F0kU3BsbdTtuj-ROAR1VcM6-A2K_TfcmjLFmtKaNXkWB-WRuGifONsQTiZ9tfiq12HyCfaYYRG0QMAcKWqK3bIDQNpvORE3Toe9F5nTK5ZozHUmB71-8tO_tiD8JIzyVEgIcgUx0BK" />
                        </div>
                    </div>
                </div>
            </header>
            <div class="p-8 space-y-8">
                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-primary/5 hover:border-primary/20 transition-all group">
                        <div class="flex items-start justify-between">
                            <div
                                class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-icons-round text-blue-500">trending_up</span>
                            </div>
                            <span
                                class="text-xs font-bold text-green-500 bg-green-50 dark:bg-green-500/10 px-2 py-1 rounded-lg">+12.5%</span>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-slate-400 dark:text-slate-500 text-sm font-medium">Total Kunjungan</h4>
                            <p class="text-2xl font-extrabold mt-1">12,842</p>
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-primary/5 hover:border-primary/20 transition-all group">
                        <div class="flex items-start justify-between">
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-icons-round text-primary">event_available</span>
                            </div>
                            <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-1 rounded-lg">High</span>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-slate-400 dark:text-slate-500 text-sm font-medium">Booking Aktif</h4>
                            <p class="text-2xl font-extrabold mt-1">84</p>
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-primary/5 hover:border-primary/20 transition-all group">
                        <div class="flex items-start justify-between">
                            <div
                                class="w-12 h-12 bg-amber-50 dark:bg-amber-500/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-icons-round text-amber-500">article</span>
                            </div>
                            <span class="text-xs font-bold text-slate-400 px-2 py-1 rounded-lg">Last 30d</span>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-slate-400 dark:text-slate-500 text-sm font-medium">Berita Dipublish</h4>
                            <p class="text-2xl font-extrabold mt-1">156</p>
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-primary/5 hover:border-primary/20 transition-all group">
                        <div class="flex items-start justify-between">
                            <div
                                class="w-12 h-12 bg-red-50 dark:bg-red-500/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <span class="material-icons-round text-red-500">play_circle_filled</span>
                            </div>
                            <span
                                class="text-xs font-bold text-red-500 bg-red-50 dark:bg-red-500/10 px-2 py-1 rounded-lg">42
                                New</span>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-slate-400 dark:text-slate-500 text-sm font-medium">Total Video</h4>
                            <p class="text-2xl font-extrabold mt-1">82</p>
                        </div>
                    </div>
                </div>
                <!-- Main Grid: Tables and Widgets -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Activity Table -->
                    <div
                        class="lg:col-span-2 bg-white dark:bg-slate-900 rounded-3xl shadow-sm border border-primary/5 overflow-hidden">
                        <div
                            class="p-6 border-b border-slate-50 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <h3 class="font-bold text-lg">Booking Terbaru</h3>
                                <p class="text-xs text-slate-400 mt-1">Pantau permintaan booking dari pasien secara
                                    real-time</p>
                            </div>
                            <button class="text-primary text-sm font-bold hover:underline">Lihat Semua</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr
                                        class="bg-slate-50 dark:bg-slate-800/50 text-slate-400 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold">
                                        <th class="px-6 py-4">Nama Pasien</th>
                                        <th class="px-6 py-4">Layanan</th>
                                        <th class="px-6 py-4">Tanggal &amp; Waktu</th>
                                        <th class="px-6 py-4 text-center">Status</th>
                                        <th class="px-6 py-4"></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-50 dark:divide-slate-800">
                                    <tr
                                        class="group hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-xs font-bold text-slate-600 dark:text-slate-300">
                                                    AS</div>
                                                <span class="text-sm font-bold">Andi Saputra</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-500">Bekam Sunnah</td>
                                        <td class="px-6 py-4 text-sm text-slate-500">24 Okt, 09:00 WIB</td>
                                        <td class="px-6 py-4">
                                            <div class="flex justify-center">
                                                <span
                                                    class="px-2 py-1 rounded-lg bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider">Confirmed</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="p-1 hover:text-primary"><span
                                                    class="material-icons-round text-lg">more_vert</span></button>
                                        </td>
                                    </tr>
                                    <tr
                                        class="group hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-xs font-bold text-slate-600 dark:text-slate-300">
                                                    RN</div>
                                                <span class="text-sm font-bold">Rina Natalia</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-500">Terapi Syaraf</td>
                                        <td class="px-6 py-4 text-sm text-slate-500">24 Okt, 13:30 WIB</td>
                                        <td class="px-6 py-4">
                                            <div class="flex justify-center">
                                                <span
                                                    class="px-2 py-1 rounded-lg bg-amber-100 text-amber-600 dark:bg-amber-500/10 text-[10px] font-bold uppercase tracking-wider">Pending</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="p-1 hover:text-primary"><span
                                                    class="material-icons-round text-lg">more_vert</span></button>
                                        </td>
                                    </tr>
                                    <tr
                                        class="group hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-xs font-bold text-slate-600 dark:text-slate-300">
                                                    BW</div>
                                                <span class="text-sm font-bold">Bambang Wijaya</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-500">Bekam Medis</td>
                                        <td class="px-6 py-4 text-sm text-slate-500">25 Okt, 10:00 WIB</td>
                                        <td class="px-6 py-4">
                                            <div class="flex justify-center">
                                                <span
                                                    class="px-2 py-1 rounded-lg bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider">Confirmed</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="p-1 hover:text-primary"><span
                                                    class="material-icons-round text-lg">more_vert</span></button>
                                        </td>
                                    </tr>
                                    <tr
                                        class="group hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-xs font-bold text-slate-600 dark:text-slate-300">
                                                    SK</div>
                                                <span class="text-sm font-bold">Siti Khadijah</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-500">Bekam Sunnah</td>
                                        <td class="px-6 py-4 text-sm text-slate-500">25 Okt, 15:45 WIB</td>
                                        <td class="px-6 py-4">
                                            <div class="flex justify-center">
                                                <span
                                                    class="px-2 py-1 rounded-lg bg-amber-100 text-amber-600 dark:bg-amber-500/10 text-[10px] font-bold uppercase tracking-wider">Pending</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="p-1 hover:text-primary"><span
                                                    class="material-icons-round text-lg">more_vert</span></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Sidebar Widgets -->
                    <div class="space-y-6">
                        <!-- Quick Actions -->
                        <div class="bg-white dark:bg-slate-900 p-6 rounded-3xl shadow-sm border border-primary/5">
                            <h3 class="font-bold text-lg mb-4">Aksi Cepat</h3>
                            <div class="space-y-3">
                                <button
                                    class="w-full flex items-center gap-3 p-4 bg-primary text-white rounded-2xl font-bold hover:brightness-95 transition-all shadow-lg shadow-primary/20">
                                    <span class="material-icons-round">add_circle</span>
                                    <span>Tambah Berita Baru</span>
                                </button>
                                <button
                                    class="w-full flex items-center gap-3 p-4 bg-slate-900 dark:bg-slate-800 text-white rounded-2xl font-bold hover:bg-slate-800 transition-all border border-slate-700">
                                    <span class="material-icons-round">cloud_upload</span>
                                    <span>Upload Video</span>
                                </button>
                                <button
                                    class="w-full flex items-center gap-3 p-4 bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-300 rounded-2xl font-bold border border-slate-200 dark:border-slate-800 hover:border-primary transition-all group">
                                    <span
                                        class="material-icons-round text-slate-400 group-hover:text-primary">settings</span>
                                    <span>Pengaturan Klinik</span>
                                </button>
                            </div>
                        </div>
                        <!-- Calendar Summary -->
                        <div class="bg-white dark:bg-slate-900 p-6 rounded-3xl shadow-sm border border-primary/5">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="font-bold text-lg">Jadwal Hari Ini</h3>
                                <span class="text-xs text-slate-400">24 Okt 2023</span>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-start gap-4">
                                    <div class="text-xs font-bold text-slate-400 pt-1">09:00</div>
                                    <div class="flex-1 p-3 bg-primary/5 border-l-4 border-primary rounded-r-xl">
                                        <p class="text-sm font-bold">Sesi Bekam Pagi</p>
                                        <p class="text-[10px] text-slate-500">4 Pasien Terdaftar</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4">
                                    <div class="text-xs font-bold text-slate-400 pt-1">13:00</div>
                                    <div class="flex-1 p-3 bg-amber-500/5 border-l-4 border-amber-500 rounded-r-xl">
                                        <p class="text-sm font-bold">Terapi Khusus</p>
                                        <p class="text-[10px] text-slate-500">2 Pasien Terdaftar</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-4 opacity-50">
                                    <div class="text-xs font-bold text-slate-400 pt-1">16:00</div>
                                    <div
                                        class="flex-1 p-3 bg-slate-100 dark:bg-slate-800 border-l-4 border-slate-300 dark:border-slate-600 rounded-r-xl">
                                        <p class="text-sm font-bold">Konsultasi Dokter</p>
                                        <p class="text-[10px] text-slate-500">Belum Ada Pasien</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bottom Content: Recent Media -->
                <div class="bg-white dark:bg-slate-900 p-8 rounded-3xl shadow-sm border border-primary/5">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h3 class="font-bold text-xl">Berita &amp; Video Terakhir</h3>
                            <p class="text-sm text-slate-500">Konten terbaru yang dipublikasikan di website</p>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="p-2 border border-slate-100 dark:border-slate-800 rounded-full hover:bg-primary/10 transition-colors">
                                <span class="material-icons-round">chevron_left</span>
                            </button>
                            <button
                                class="p-2 border border-slate-100 dark:border-slate-800 rounded-full hover:bg-primary/10 transition-colors">
                                <span class="material-icons-round">chevron_right</span>
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="group cursor-pointer">
                            <div class="relative rounded-2xl overflow-hidden aspect-video mb-3">
                                <img alt="News Image 1"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    data-alt="Herbal medicine and cupping equipment tools"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuO1wJS8WajDzTcbX1N-9a2B8C-wgVrWKBHyAKV_Oymmt64LU_zWmreLvq7pnbku32GhxtJpbKIGvQWTYQx9ZmlZhRlZpkUPwBjpTBFCtrlXOEVMMV4QDaBxVK20h4docUipttfAC-MDRCPcjayPq48EKYaADyIZ5_5Smj9cEzpqagdcARIn2w4-3uMJHcSx1t1h_NP_YydacdxnmIh37aDyNnTH0wKi4sADfHCnd7ZrALg31KzRcXMy5wgDgVnt-SU2UiG8AdwKBF" />
                                <div
                                    class="absolute top-2 left-2 bg-white/90 dark:bg-slate-900/90 backdrop-blur px-2 py-1 rounded-lg text-[10px] font-bold uppercase text-primary tracking-tighter">
                                    Berita</div>
                            </div>
                            <h4 class="font-bold text-sm leading-tight group-hover:text-primary transition-colors">
                                Manfaat Bekam Sunnah Bagi Kesehatan Jantung</h4>
                            <p class="text-[10px] text-slate-400 mt-1 uppercase font-bold tracking-widest">2 Hari Yang
                                Lalu</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div class="relative rounded-2xl overflow-hidden aspect-video mb-3">
                                <img alt="News Image 2"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    data-alt="Relaxing massage and therapy session room"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuASWj7Udb1iJwPib158P2eYm_8xZMW3d1idHWnUz_IXTkzqQh_CAbUhhACynhx58DQOj5267ODY818X1NNEpRn-n6brEk0HyI9LfWqV777W2QdN2gIvmUwAnFWaZ9w816_vMjXG8WJJoGOIzrsxEjprbJdiU_Top2bZa8mh_KX7R5GuAWq12goVQbwc4w_Jr5-BEG_8Fbjyz7px2EhpaLnCArncogPWhQquBEz8vuK1ON8HbLxQ9NbnErc3M8iA2P7e_RB3RU4VHt3p" />
                                <div
                                    class="absolute top-2 left-2 bg-slate-900/90 backdrop-blur px-2 py-1 rounded-lg text-[10px] font-bold uppercase text-red-500 tracking-tighter flex items-center gap-1">
                                    <span class="material-icons-round text-[12px]">play_circle</span> Video
                                </div>
                            </div>
                            <h4 class="font-bold text-sm leading-tight group-hover:text-primary transition-colors">
                                Teknik Bekam Medis untuk Atasi Nyeri Sendi</h4>
                            <p class="text-[10px] text-slate-400 mt-1 uppercase font-bold tracking-widest">3 Hari Yang
                                Lalu</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div class="relative rounded-2xl overflow-hidden aspect-video mb-3">
                                <img alt="News Image 3"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    data-alt="Professional health consultation in modern clinic"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWqi_m2FiaMn8x5wgZvkBBYFdV4E9TN0qH6nGTcKphMFxk5OFTyIncqkRce8SAGEKJ7DuERBIeDbnVt8qOcyaiSOmyUZOlwmsIupvgIaF3tww-uwF-Vv2wkGPMpZPh3HxeFvWgAxTCuCzPgIH2mXrIX5AJuAabgRCxOI_LDNLOSN8QL6ehubT7lt6xl9l3HE2zbrLsuzuCTvmyIlW4dGbPwh5szC48CFooRY0cCwssBsLSIZBoJFnNP0jcj5x_af9UV6eW91hjMQ0r" />
                                <div
                                    class="absolute top-2 left-2 bg-white/90 dark:bg-slate-900/90 backdrop-blur px-2 py-1 rounded-lg text-[10px] font-bold uppercase text-primary tracking-tighter">
                                    Berita</div>
                            </div>
                            <h4 class="font-bold text-sm leading-tight group-hover:text-primary transition-colors">
                                Persiapan Sebelum Menjalani Terapi Bekam</h4>
                            <p class="text-[10px] text-slate-400 mt-1 uppercase font-bold tracking-widest">5 Hari Yang
                                Lalu</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div class="relative rounded-2xl overflow-hidden aspect-video mb-3">
                                <img alt="News Image 4"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    data-alt="Traditional therapy and wellness ritual setup"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZIEaiJs9COEkRAzTLpFwJYSuOAEZX94cjBaGmPEAfeUHYNH0U_bybktBv-hL1Z3yXSOY-Dix6winCESRHq_7geGCCoNpmHhpCTFIwiaRFM8ZmdJGZjz7SJDhYv7TQrf4J5yCKkCNwCWz5oF57MG7bwvZmzcRqTUIQJvOLFE8Wi11f2OiNi_hVwiVmFgGI8O0WA6Fh1BOpqQnpmY8tvg-hyCRQWgIdR5YYYU-JeJqPL5C2BG8hdS_aAwyMGfWV3iQJHtg5_vKF6WTE" />
                                <div
                                    class="absolute top-2 left-2 bg-slate-900/90 backdrop-blur px-2 py-1 rounded-lg text-[10px] font-bold uppercase text-red-500 tracking-tighter flex items-center gap-1">
                                    <span class="material-icons-round text-[12px]">play_circle</span> Video
                                </div>
                            </div>
                            <h4 class="font-bold text-sm leading-tight group-hover:text-primary transition-colors">
                                Testimoni Pasien Pasca Bekam Teratur 6 Bulan</h4>
                            <p class="text-[10px] text-slate-400 mt-1 uppercase font-bold tracking-widest">1 Minggu
                                Yang Lalu</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="mt-auto p-8 border-t border-primary/5 text-center text-slate-400 text-xs font-medium">
                © 2023 Bekam Therapy Center - Admin Panel v1.2.0. All Rights Reserved.
            </footer>
        </main>
    </div>
</body>

</html>
