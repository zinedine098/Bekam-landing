@extends('admin.Dashboard.layout.layout')

@section('title', 'Hero Section Settings')

@section('content')
    <div class="bg-white dark:bg-slate-900 p-8 rounded-3xl shadow-sm border border-primary/5">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h3 class="font-bold text-xl text-slate-800 dark:text-white">Hero Section Settings</h3>
                <p class="text-sm text-slate-500">Manage the main hero section of your landing page</p>
            </div>
        </div>

        @if (session('success'))
            <div class="mb-6 p-4 bg-primary/10 border border-primary/20 text-primary rounded-xl font-bold text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-500/10 border border-red-500/20 text-red-500 rounded-xl font-bold text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('hero.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Badge Text</label>
                    <input type="text" name="badge_text" value="{{ old('badge_text', $hero->badge_text ?? '') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                        placeholder="e.g. Terapi Bersertifikat">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Title</label>
                    <input type="text" name="title" value="{{ old('title', $hero->title ?? '') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                        placeholder="e.g. Kesehatan Alami dengan Bekam Profesional">
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Description</label>
                <textarea name="description" rows="4"
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                    placeholder="Describe your service...">{{ old('description', $hero->description ?? '') }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Button Text</label>
                    <input type="text" name="button_text" value="{{ old('button_text', $hero->button_text ?? '') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                        placeholder="e.g. Hubungi Sekarang">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Button Link</label>
                    <input type="text" name="button_link" value="{{ old('button_link', $hero->button_link ?? '') }}"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                        placeholder="e.g. #contact">
                </div>
            </div>

            <div class="space-y-4">
                <label class="text-sm font-bold text-slate-600 dark:text-slate-400">Background Image</label>
                <div class="flex items-start gap-6">
                    @if ($hero && $hero->image)
                        <div class="w-40 h-24 rounded-xl overflow-hidden border border-slate-200">
                            <img src="{{ Storage::url($hero->image) }}" class="w-full h-full object-cover">
                        </div>
                    @endif
                    <div class="flex-1">
                        <input type="file" name="image"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-transparent focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
                        <p class="text-[10px] text-slate-400 mt-2 italic">Recommended size: 1920x1080px. Max: 2MB</p>
                    </div>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="px-8 py-4 bg-primary text-slate-900 font-bold rounded-2xl hover:brightness-95 transition-all shadow-lg shadow-primary/20">
                    Update Hero Section
                </button>
            </div>
        </form>
    </div>
@endsection
