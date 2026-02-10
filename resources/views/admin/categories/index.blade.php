@extends('admin.Dashboard.layout.layout')

@section('title', 'Kategori')

@section('content')
    <div class="bg-white dark:bg-slate-900 rounded-3xl shadow-sm border border-primary/5 overflow-hidden">
        <div class="p-6 border-b border-slate-50 dark:border-slate-800 flex items-center justify-between">
            <div>
                <h3 class="font-bold text-lg">Daftar Kategori</h3>
                <p class="text-xs text-slate-400 mt-1">Kelola kategori untuk artikel dan video</p>
            </div>
            <a href="{{ route('categories.create') }}"
                class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-xl font-bold hover:brightness-95 transition-all shadow-lg shadow-primary/20 text-sm">
                <span class="material-icons-round text-sm">add</span>
                <span>Tambah Kategori</span>
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
                        <th class="px-6 py-4">Nama Kategori</th>
                        <th class="px-6 py-4">Slug</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50 dark:divide-slate-800">
                    @forelse($categories as $category)
                        <tr class="group hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <span class="text-sm font-bold">{{ $category->name }}</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-500">
                                {{ $category->slug }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('categories.edit', $category) }}" class="p-2 text-slate-400 hover:text-primary transition-colors">
                                        <span class="material-icons-round text-lg">edit</span>
                                    </a>
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
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
                                Belum ada kategori.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
