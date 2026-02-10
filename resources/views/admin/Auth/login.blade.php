<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Portal - Bekam Clinic Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ecda",
                        "background-light": "#f6f8f8",
                        "background-dark": "#102220",
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
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col items-center justify-center p-4">
    <!-- Login Container -->
    <div class="w-full max-w-md">
        <!-- Logo & Branding -->
        <div class="flex flex-col items-center mb-8">
            <h1 class="text-2xl font-extrabold text-slate-800 dark:text-white font-display">Admin Portal</h1>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1 text-center">Silakan masuk untuk mengelola konten
                dan booking.</p>
        </div>
        <!-- Card Container -->
        <div
            class="bg-white dark:bg-slate-900 shadow-xl rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 relative">
            <!-- Professional Accent Bar -->
            <div class="h-1.5 w-full bg-primary"></div>
            <div class="p-8 lg:p-10">
                <form action="{{ route('login') }}" class="space-y-6" method="POST">
                    @csrf
                    <!-- Username/Email Field -->
                    <div class="space-y-2">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2"
                            for="email">
                            Email Address
                        </label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span
                                    class="material-icons text-slate-400 group-focus-within:text-primary transition-colors text-xl">alternate_email</span>
                            </div>
                            <input
                                class="block w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all text-slate-900 dark:text-white placeholder-slate-400 @error('email') border-red-500 @enderror"
                                id="email" name="email" value="{{ old('email') }}"
                                placeholder="admin@example.com" required="" type="email" />
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Password Field -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label
                                class="text-sm font-semibold text-slate-700 dark:text-slate-300 flex items-center gap-2"
                                for="password">
                                Password
                            </label>
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span
                                    class="material-icons text-slate-400 group-focus-within:text-primary transition-colors text-xl">lock_outline</span>
                            </div>
                            <input
                                class="block w-full pl-10 pr-12 py-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all text-slate-900 dark:text-white placeholder-slate-400 @error('password') border-red-500 @enderror"
                                id="password" name="password" placeholder="••••••••" required="" type="password" />
                            <button
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 dark:hover:text-slate-200"
                                type="button" onclick="togglePassword()">
                                <span class="material-icons text-xl" id="toggleIcon">visibility</span>
                            </button>
                        </div>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Submit Button -->
                    <button
                        class="w-full bg-primary hover:bg-opacity-90 text-slate-900 font-bold py-3.5 px-4 rounded-lg shadow-lg shadow-primary/20 transform active:scale-[0.98] transition-all flex items-center justify-center gap-2"
                        type="submit">
                        <span>Login ke Dashboard</span>
                        <span class="material-icons text-lg">login</span>
                    </button>
                </form>

                <script>
                    function togglePassword() {
                        const passwordInput = document.getElementById('password');
                        const toggleIcon = document.getElementById('toggleIcon');
                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';
                            toggleIcon.textContent = 'visibility_off';
                        } else {
                            passwordInput.type = 'password';
                            toggleIcon.textContent = 'visibility';
                        }
                    }
                </script>
                <!-- Security Indicator -->
                <div
                    class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800 flex items-center justify-center gap-2 text-slate-400">
                    <span class="material-icons text-sm">verified_user</span>
                    <span class="text-[10px] uppercase tracking-widest font-bold">Secure SSL Encrypted Session</span>
                </div>
            </div>
        </div>
        <!-- Footer Link -->
        <!-- Image for context representation (hidden but present as per rules) -->
        <div class="hidden">
            <img alt="background context" data-alt="Modern clinic dashboard data analytics background"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwhcbZmHCWR5aA1HUZM9soJRULLkXkgHnKLEg87MJwwQwElvL9eYejgHIkmZmJ4UD259F45XkCzsBifaZZpwyHtIXIwrXJmux4FqaN55ZQ_AgssfgmFQ2EgwjRTV-Maah5HhB3ZEPQ_LnQP-BJRZdioDnuHU-9S4rMu48XlSi1xJZfkjeny5L6IYfrBPbhwI8LO6J0xZLkP3hOJIAJvYr36GHd5R8Fw3OnlWqOg_Ut1rys9FpvyVhNZoabQxpT5T7IIBk9i3IoVlmL" />
        </div>
    </div>
    <!-- Decorative Elements (Subtle Blobs) -->
    <div
        class="fixed top-0 left-0 -z-10 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
    </div>
    <div
        class="fixed bottom-0 right-0 -z-10 w-96 h-96 bg-primary/5 rounded-full blur-3xl translate-x-1/2 translate-y-1/2">
    </div>
</body>

</html>
