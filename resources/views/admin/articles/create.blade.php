@extends('admin.Dashboard.layout.layout')

@section('title', 'Tambah Berita')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white dark:bg-slate-900 rounded-3xl shadow-sm border border-primary/5 overflow-hidden">
            <div class="p-6 border-b border-slate-50 dark:border-slate-800 flex items-center justify-between">
                <div>
                    <h3 class="font-bold text-lg">Tambah Berita Baru</h3>
                    <p class="text-xs text-slate-400 mt-1">Publikasikan konten kesehatan terbaru</p>
                </div>
                <a href="{{ route('articles.index') }}" class="text-slate-400 hover:text-primary transition-colors">
                    <span class="material-icons-round">close</span>
                </a>
            </div>

            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Judul Berita</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" 
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/50 focus:border-primary focus:ring-0 transition-all text-sm @error('title') border-red-500 @enderror" 
                            placeholder="Contoh: Manfaat Bekam untuk Migrain" required>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category_id" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Kategori</label>
                        <select name="category_id" id="category_id" 
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/50 focus:border-primary focus:ring-0 transition-all text-sm @error('category_id') border-red-500 @enderror" required>
                            <option value="">Pilih Kategori</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="image" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Gambar Sampul</label>
                    <div class="relative group">
                        <input type="file" name="image" id="image" accept="image/*"
                            class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition-all cursor-pointer border border-slate-200 dark:border-slate-800 rounded-xl bg-slate-50/50 dark:bg-slate-800/50 p-2">
                    </div>
                    <p class="text-[10px] text-slate-400 mt-1">*Format: JPG, PNG, GIF. Maksimal 2MB.</p>
                    @error('image')
                        <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="content" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">Konten Berita</label>
                    <textarea name="content" id="content" rows="10"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/50 focus:border-primary focus:ring-0 transition-all text-sm @error('content') border-red-500 @enderror" 
                        placeholder="Tulis konten berita di sini..." required>{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-4 flex gap-3">
                    <button type="submit" 
                        class="px-8 py-3 bg-primary text-white rounded-xl font-bold hover:brightness-95 transition-all shadow-lg shadow-primary/20 text-sm">
                        Publikasikan Berita
                    </button>
                    <a href="{{ route('articles.index') }}" 
                        class="px-6 py-3 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-xl font-bold hover:bg-slate-200 dark:hover:bg-slate-700 transition-all text-sm">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
