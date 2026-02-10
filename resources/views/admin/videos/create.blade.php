@extends('admin.Dashboard.layout.layout')

@section('title', 'Tambah Video')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white dark:bg-slate-900 rounded-3xl shadow-sm border border-primary/5 overflow-hidden">
            <div class="p-6 border-b border-slate-50 dark:border-slate-800 flex items-center justify-between">
                <div>
                    <h3 class="font-bold text-lg">Tambah Video Baru</h3>
                    <p class="text-xs text-slate-400 mt-1">Tambahkan video dari YouTube</p>
                </div>
                <a href="{{ route('videos.index') }}" class="text-slate-400 hover:text-primary transition-colors">
                    <span class="material-icons-round">close</span>
                </a>
            </div>

            <form action="{{ route('videos.store') }}" method="POST" class="p-6 space-y-4">
                @csrf
                <div>
                    <label for="title" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Judul Video</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" 
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/50 focus:border-primary focus:ring-0 transition-all text-sm @error('title') border-red-500 @enderror" 
                        placeholder="Contoh: Tutorial Bekam Mandiri" required>
                    @error('title')
                        <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="video_url" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Link YouTube</label>
                    <input type="url" name="video_url" id="video_url" value="{{ old('video_url') }}" 
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/50 focus:border-primary focus:ring-0 transition-all text-sm @error('video_url') border-red-500 @enderror" 
                        placeholder="Contoh: https://youtube.com/watch?v=..." required>
                    <p class="text-[10px] text-slate-400 mt-1">*Masukkan link lengkap video YouTube</p>
                    @error('video_url')
                        <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="description" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Deskripsi (Opsional)</label>
                    <textarea name="description" id="description" rows="3"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/50 focus:border-primary focus:ring-0 transition-all text-sm @error('description') border-red-500 @enderror" 
                        placeholder="Deskripsi singkat tentang video...">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-4 flex gap-3">
                    <button type="submit" 
                        class="flex-1 px-6 py-3 bg-primary text-white rounded-xl font-bold hover:brightness-95 transition-all shadow-lg shadow-primary/20 text-sm">
                        Simpan Video
                    </button>
                    <a href="{{ route('videos.index') }}" 
                        class="px-6 py-3 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-xl font-bold hover:bg-slate-200 dark:hover:bg-slate-700 transition-all text-sm">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
