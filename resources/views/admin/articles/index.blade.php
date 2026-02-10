@extends('admin.Dashboard.layout.layout')

@section('title', 'Manajemen Berita')

@section('content')
    <div class="bg-white dark:bg-slate-900 rounded-3xl shadow-sm border border-primary/5 overflow-hidden">
        <div class="p-6 border-b border-slate-50 dark:border-slate-800 flex items-center justify-between">
            <div>
                <h3 class="font-bold text-lg">Daftar Berita</h3>
                <p class="text-xs text-slate-400 mt-1">Kelola artikel dan berita kesehatan</p>
            </div>
            <a href="{{ route('articles.create') }}"
                class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl font-bold hover:brightness-95 transition-all shadow-lg shadow-primary/20 text-sm">
                <span class="material-icons-round text-sm">add</span>
                <span>Tambah Berita</span>
            </a>
        </div>
        
        @if(session('success'))
            <div class="p-4 mx-6 mt-4 bg-green-50 dark:bg-green-500/10 text-green-500 rounded-xl text-sm font-bold">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-400 dark:text-slate-500 text-[10px] uppercase tracking-widest font-bold">
                        <th class="px-6 py-4">Gambar</th>
                        <th class="px-6 py-4">Judul</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4">Tanggal Publish</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50 dark:divide-slate-800">
                    @forelse($articles as $article)
                        <tr class="group hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <div class="w-16 h-10 rounded-lg overflow-hidden bg-slate-100 dark:bg-slate-800">
                                    @if($article->image)
                                        <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-slate-400">
                                            <span class="material-icons-round text-sm">image</span>
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-sm font-bold line-clamp-1 block max-w-xs">{{ $article->title }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 rounded-lg bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider">
                                    {{ $article->category->name }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-500">
                                {{ $article->created_at->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('articles.edit', $article) }}" class="p-2 text-slate-400 hover:text-primary transition-colors">
                                        <span class="material-icons-round text-lg">edit</span>
                                    </a>
                                    <form action="{{ route('articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-slate-400 hover:text-red-500 transition-colors">
                                            <span class="material-icons-round text-lg">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-slate-400 text-sm">
                                Belum ada berita yang dipublish.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
