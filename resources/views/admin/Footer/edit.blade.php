@extends('admin.Dashboard.layout.layout')

@section('title', 'Footer Settings')

@section('content')
    <div class="bg-white dark:bg-slate-900 p-8 rounded-3xl shadow-sm border border-primary/5">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h3 class="font-bold text-xl text-slate-800 dark:text-white">Footer Settings</h3>
                <p class="text-sm text-slate-500">Manage footer information and contact details</p>
            </div>
        </div>

        @if (session('success'))
            <div class="mb-6 p-4 bg-primary/10 border border-primary/20 text-primary rounded-xl font-bold text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('footer.update') }}" method="POST" class="space-y-6">
            @csrf

            <div class="space-y-2">
                <label class="text-sm font-bold text-slate-600 dark:text-slate-400">About Description</label>
                <textarea name="about_description" rows="3"
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                    placeholder="Briefly describe your clinic...">{{ old('about_description', $footer->about_description ?? '') }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Clinic Name</label>
                    <input type="text" name="clinic_name" value="{{ old('clinic_name', $footer->clinic_name ?? '') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                        placeholder="e.g. Praktik Bekam">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Address</label>
                    <input type="text" name="address" value="{{ old('address', $footer->address ?? '') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                        placeholder="e.g. Jl. Kesehatan No. 123, Jakarta">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-slate-400">WhatsApp</label>
                    <input type="text" name="whatsapp" value="{{ old('whatsapp', $footer->whatsapp ?? '') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                        placeholder="e.g. +62 812 3456 7890">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Email</label>
                    <input type="email" name="email" value="{{ old('email', $footer->email ?? '') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                        placeholder="e.g. info@praktikbekam.com">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Instagram Link</label>
                    <input type="text" name="instagram_link"
                        value="{{ old('instagram_link', $footer->instagram_link ?? '') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                        placeholder="https://instagram.com/yourprofile">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Facebook Link</label>
                    <input type="text" name="facebook_link"
                        value="{{ old('facebook_link', $footer->facebook_link ?? '') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                        placeholder="https://facebook.com/yourpage">
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Copyright Text</label>
                <input type="text" name="copyright_text"
                    value="{{ old('copyright_text', $footer->copyright_text ?? '') }}"
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                    placeholder="e.g. © 2024 Praktik Bekam Profesional. All Rights Reserved.">
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="px-8 py-4 bg-primary text-slate-900 font-bold rounded-2xl hover:brightness-95 transition-all shadow-lg shadow-primary/20">
                    Update Footer Settings
                </button>
            </div>
        </form>
    </div>
@endsection
