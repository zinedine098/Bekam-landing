@extends('landing.App')

@section('content')
    <div class="py-24 bg-brand-teal/5 dark:bg-slate-800/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-5xl font-bold text-brand-teal dark:text-white mb-6">Berita & Artikel</h1>
                <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto text-lg">
                    Dapatkan informasi terbaru seputar kesehatan, terapi bekam, dan gaya hidup sehat dari para ahli kami.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($articles as $article)
                    <div
                        class="bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all group">
                        <div class="relative aspect-video overflow-hidden">
                            @if ($article->image)
                                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            @else
                                <div class="w-full h-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
                                    <span class="material-icons text-slate-400 text-6xl">image</span>
                                </div>
                            @endif
                            <div
                                class="absolute top-4 left-4 bg-primary text-background-dark px-3 py-1 rounded-lg text-xs font-bold uppercase tracking-wider shadow-lg">
                                {{ $article->category->name }}
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 text-xs text-slate-500 mb-3 font-semibold">
                                <span class="material-icons text-sm">calendar_today</span>
                                {{ $article->created_at->format('d M Y') }}
                            </div>
                            <h3
                                class="text-xl font-bold mb-3 text-brand-teal dark:text-white group-hover:text-primary transition-colors line-clamp-2">
                                <a href="{{ route('landing.articles.show', $article) }}">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm mb-6 line-clamp-3">
                                {{ Str::limit(strip_tags($article->content), 120) }}
                            </p>
                            <a href="{{ route('landing.articles.show', $article) }}"
                                class="inline-flex items-center gap-2 text-brand-teal dark:text-primary font-bold text-sm group-hover:gap-3 transition-all">
                                Baca Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <div
                            class="w-20 h-20 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="material-icons text-slate-400 text-4xl">article</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-700 dark:text-slate-300 mb-2">Belum ada artikel</h3>
                        <p class="text-slate-500">Silakan kembali lagi nanti untuk update terbaru.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
