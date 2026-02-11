<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title')</title>
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
    <div class="flex h-screen overflow-hidden bg-background-light dark:bg-background-dark">
        <!-- Backdrop -->
        <div id="sidebar-backdrop" onclick="toggleSidebar()"
            class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden transition-opacity opacity-0"></div>

        <!-- Sidebar -->
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-50 w-72 bg-white dark:bg-slate-900 border-r border-primary/10 flex flex-col transform -translate-x-full lg:translate-x-0 lg:static lg:flex transition-all duration-300 ease-in-out shadow-2xl lg:shadow-none">
            <div class="p-6 flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white">
                        <span class="material-icons-round">health_and_safety</span>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl tracking-tight">Bekam <span class="text-primary">Admin</span></h1>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 uppercase tracking-widest font-bold">
                            Health Center</p>
                    </div>
                </div>
                <!-- Close Button (Mobile) -->
                <button onclick="toggleSidebar()" class="lg:hidden text-slate-400 hover:text-primary transition-colors">
                    <span class="material-icons-round">close</span>
                </button>
            </div>
            <nav class="flex-1 px-4 mt-4 space-y-1 overflow-y-auto">
                <a class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin/dashboard') ? 'text-primary bg-primary/10' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50' }} rounded-xl font-semibold transition-all group"
                    href="/admin/dashboard">
                    <span class="material-icons-round text-primary">dashboard</span>
                    <span>Dashboard</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin/categories*') ? 'text-primary bg-primary/10' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50' }} rounded-xl transition-all group"
                    href="{{ route('categories.index') }}">
                    <span class="material-icons-round group-hover:text-primary">category</span>
                    <span>Manajemen Kategori</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin/articles*') ? 'text-primary bg-primary/10' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50' }} rounded-xl transition-all group"
                    href="{{ route('articles.index') }}">
                    <span class="material-icons-round group-hover:text-primary">newspaper</span>
                    <span>Manajemen Berita</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin/videos*') ? 'text-primary bg-primary/10' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50' }} rounded-xl transition-all group"
                    href="{{ route('videos.index') }}">
                    <span class="material-icons-round group-hover:text-primary">video_library</span>
                    <span>Manajemen Video</span>
                </a>
                <div class="pt-4 pb-2 px-4 text-[10px] font-extrabold text-slate-400 uppercase tracking-widest">Landing
                    Page</div>
                <a class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin/hero*') ? 'text-primary bg-primary/10' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50' }} rounded-xl transition-all group"
                    href="{{ route('hero.index') }}">
                    <span class="material-icons-round group-hover:text-primary">web</span>
                    <span>Hero Section</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin/footer*') ? 'text-primary bg-primary/10' : 'text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50' }} rounded-xl transition-all group"
                    href="{{ route('footer.index') }}">
                    <span class="material-icons-round group-hover:text-primary">view_quilt</span>
                    <span>Footer Settings</span>
                </a>
            </nav>
            <div class="p-4 mt-auto">
                <div class="p-4 bg-primary/5 rounded-xl border border-primary/10">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="w-full flex items-center justify-center gap-2 py-2 bg-red-500/10 text-red-500 hover:bg-red-500/20 rounded-lg text-sm font-bold transition-colors">
                            <span class="material-icons-round text-sm">logout</span>
                            <span>Keluar</span>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 flex flex-col overflow-y-auto relative w-full transition-all duration-300">
            <!-- Header (Mobile & Desktop) -->
            <header
                class="bg-white dark:bg-slate-900 border-b border-primary/10 p-4 sticky top-0 z-30 flex items-center gap-4">
                <button onclick="toggleSidebar()"
                    class="p-2 -ml-2 text-slate-500 hover:text-primary hover:bg-primary/5 rounded-xl transition-all">
                    <span class="material-icons-round">menu</span>
                </button>
                <div class="flex-1">
                    <span class="font-bold text-lg text-slate-800 dark:text-slate-100">Menu Admin</span>
                </div>
            </header>

            <div class="p-8 space-y-8">
                @yield('content')
            </div>
            <!-- Footer -->
            <footer class="mt-auto p-8 border-t border-primary/5 text-center text-slate-400 text-xs font-medium">
                © 2023 Bekam Therapy Center - Admin Panel v1.2.0. All Rights Reserved.
            </footer>
        </main>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const backdrop = document.getElementById('sidebar-backdrop');

            if (window.innerWidth >= 1024) {
                sidebar.classList.toggle('lg:-ml-72');
            } else {
                sidebar.classList.toggle('-translate-x-full');

                if (backdrop.classList.contains('hidden')) {
                    backdrop.classList.remove('hidden');
                    setTimeout(() => {
                        backdrop.classList.remove('opacity-0');
                    }, 10);
                } else {
                    backdrop.classList.add('opacity-0');
                    setTimeout(() => {
                        backdrop.classList.add('hidden');
                    }, 300);
                }
            }
        }
    </script>
</body>

</html>
