@extends('admin.Dashboard.layout.layout')

@section('title', 'Dashboard')

@section('content')
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-primary/5 hover:border-primary/20 transition-all group">
            <div class="flex items-start justify-between">
                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="material-icons-round text-primary">category</span>
                </div>
            </div>
            <div class="mt-4">
                <h4 class="text-slate-400 dark:text-slate-500 text-sm font-medium">Total Kategori</h4>
                <p class="text-2xl font-extrabold mt-1">{{ $stats['categories_count'] }}</p>
            </div>
        </div>
        
        <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-primary/5 hover:border-primary/20 transition-all group">
            <div class="flex items-start justify-between">
                <div class="w-12 h-12 bg-amber-50 dark:bg-amber-500/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="material-icons-round text-amber-500">article</span>
                </div>
            </div>
            <div class="mt-4">
                <h4 class="text-slate-400 dark:text-slate-500 text-sm font-medium">Berita Dipublish</h4>
                <p class="text-2xl font-extrabold mt-1">{{ $stats['articles_count'] }}</p>
            </div>
        </div>
        
        <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl shadow-sm border border-primary/5 hover:border-primary/20 transition-all group">
            <div class="flex items-start justify-between">
                <div class="w-12 h-12 bg-red-50 dark:bg-red-500/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <span class="material-icons-round text-red-500">play_circle_filled</span>
                </div>
            </div>
            <div class="mt-4">
                <h4 class="text-slate-400 dark:text-slate-500 text-sm font-medium">Total Video</h4>
                <p class="text-2xl font-extrabold mt-1">{{ $stats['videos_count'] }}</p>
            </div>
        </div>
    </div>

    <!-- Main Grid: Widgets -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Quick Actions -->
        <div class="bg-white dark:bg-slate-900 p-6 rounded-3xl shadow-sm border border-primary/5">
            <h3 class="font-bold text-lg mb-4">Aksi Cepat</h3>
            <div class="space-y-3">
                <a href="{{ route('articles.create') }}"
                    class="w-full flex items-center gap-3 p-4 bg-primary text-white rounded-2xl font-bold hover:brightness-95 transition-all shadow-lg shadow-primary/20">
                    <span class="material-icons-round">add_circle</span>
                    <span>Tambah Berita Baru</span>
                </a>
                <a href="{{ route('videos.create') }}"
                    class="w-full flex items-center gap-3 p-4 bg-slate-900 dark:bg-slate-800 text-white rounded-2xl font-bold hover:bg-slate-800 transition-all border border-slate-700">
                    <span class="material-icons-round">cloud_upload</span>
                    <span>Upload Video</span>
                </a>
                <a href="{{ route('categories.create') }}"
                    class="w-full flex items-center gap-3 p-4 bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-300 rounded-2xl font-bold border border-slate-200 dark:border-slate-800 hover:border-primary transition-all group">
                    <span class="material-icons-round text-slate-400 group-hover:text-primary">category</span>
                    <span>Tambah Kategori</span>
                </a>
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
                <a href="{{ route('articles.index') }}"
                    class="p-2 border border-slate-100 dark:border-slate-800 rounded-full hover:bg-primary/10 transition-colors">
                    <span class="material-icons-round">article</span>
                </a>
                <a href="{{ route('videos.index') }}"
                    class="p-2 border border-slate-100 dark:border-slate-800 rounded-full hover:bg-primary/10 transition-colors">
                    <span class="material-icons-round">play_circle</span>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($recent_articles as $article)
                <div class="group cursor-pointer">
                    <div class="relative rounded-2xl overflow-hidden aspect-video mb-3 bg-slate-100 dark:bg-slate-800">
                        @if($article->image)
                            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-400">
                                <span class="material-icons-round text-4xl">image</span>
                            </div>
                        @endif
                        <div class="absolute top-2 left-2 bg-white/90 dark:bg-slate-900/90 backdrop-blur px-2 py-1 rounded-lg text-[10px] font-bold uppercase text-primary tracking-tighter">
                            Berita
                        </div>
                    </div>
                    <h4 class="font-bold text-sm leading-tight group-hover:text-primary transition-colors line-clamp-2">
                        {{ $article->title }}
                    </h4>
                    <p class="text-[10px] text-slate-400 mt-1 uppercase font-bold tracking-widest">
                        {{ $article->created_at->diffForHumans() }}
                    </p>
                </div>
            @empty
                <!-- No articles placeholder if needed, or just nothing -->
            @endforelse

            @forelse($recent_videos as $video)
                <div class="group cursor-pointer">
                    <div class="relative rounded-2xl overflow-hidden aspect-video mb-3 bg-black/5 dark:bg-white/5">
                        <iframe src="{{ $video->video_url }}" class="w-full h-full pointer-events-none" frameborder="0"></iframe>
                        <div class="absolute top-2 left-2 bg-slate-900/90 backdrop-blur px-2 py-1 rounded-lg text-[10px] font-bold uppercase text-red-500 tracking-tighter flex items-center gap-1">
                            <span class="material-icons-round text-[12px]">play_circle</span> Video
                        </div>
                    </div>
                    <h4 class="font-bold text-sm leading-tight group-hover:text-primary transition-colors line-clamp-2">
                        {{ $video->title }}
                    </h4>
                    <p class="text-[10px] text-slate-400 mt-1 uppercase font-bold tracking-widest">
                        {{ $video->created_at->diffForHumans() }}
                    </p>
                </div>
            @empty
                <!-- No videos placeholder -->
            @endforelse
            
            @if($recent_articles->isEmpty() && $recent_videos->isEmpty())
                <div class="col-span-full text-center py-8 text-slate-400">
                    Belum ada konten yang ditambahkan.
                </div>
            @endif
        </div>
    </div>
@endsection
