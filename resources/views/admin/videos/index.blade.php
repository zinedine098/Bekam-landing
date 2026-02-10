@extends('admin.Dashboard.layout.layout')

@section('title', 'Manajemen Video')

@section('content')
    <div class="bg-white dark:bg-slate-900 rounded-3xl shadow-sm border border-primary/5 overflow-hidden">
        <div class="p-6 border-b border-slate-50 dark:border-slate-800 flex items-center justify-between">
            <div>
                <h3 class="font-bold text-lg">Daftar Video</h3>
                <p class="text-xs text-slate-400 mt-1">Kelola galeri video kesehatan</p>
            </div>
            <a href="{{ route('videos.create') }}"
                class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl font-bold hover:brightness-95 transition-all shadow-lg shadow-primary/20 text-sm">
                <span class="material-icons-round text-sm">add</span>
                <span>Tambah Video</span>
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
                        <th class="px-6 py-4">Video</th>
                        <th class="px-6 py-4">Judul & Deskripsi</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50 dark:divide-slate-800">
                    @forelse($videos as $video)
                        <tr class="group hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4 w-48">
                                <div class="rounded-xl overflow-hidden aspect-video bg-black/5 dark:bg-white/5">
                                    <iframe src="{{ $video->video_url }}" class="w-full h-full" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <h4 class="text-sm font-bold mb-1">{{ $video->title }}</h4>
                                <p class="text-xs text-slate-500 line-clamp-2 max-w-md">{{ $video->description }}</p>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('videos.edit', $video) }}" class="p-2 text-slate-400 hover:text-primary transition-colors">
                                        <span class="material-icons-round text-lg">edit</span>
                                    </a>
                                    <form action="{{ route('videos.destroy', $video) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus video ini?')">
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
                            <td colspan="3" class="px-6 py-8 text-center text-slate-400 text-sm">
                                Belum ada video yang ditambahkan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
