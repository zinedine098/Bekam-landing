@extends('landing.App')

@section('content')
    <div class="py-24 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-4 text-sm text-slate-500 mb-8 border-b border-brand-teal/10 pb-4">
                <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
                <span class="material-icons text-xs">chevron_right</span>
                <a href="{{ route('landing.articles.index') }}" class="hover:text-primary transition-colors">Berita</a>
                <span class="material-icons text-xs">chevron_right</span>
                <span class="text-brand-teal font-bold truncate max-w-xs">{{ $article->title }}</span>
            </div>

            <article
                class="max-w-4xl mx-auto bg-white dark:bg-slate-800 rounded-3xl shadow-xl overflow-hidden animate-fade-in-up">
                <div class="relative aspect-video w-full">
                    @if ($article->image)
                        <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                            class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-slate-100 flex items-center justify-center">
                            <span class="material-icons text-slate-400 text-6xl">article</span>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12">
                        <div
                            class="inline-flex items-center gap-2 mb-4 bg-primary text-background-dark px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-lg">
                            <span class="material-icons text-sm">local_offer</span>
                            {{ $article->category->name }}
                        </div>
                        <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight drop-shadow-lg mb-4">
                            {{ $article->title }}
                        </h1>
                        <div class="flex items-center gap-6 text-sm text-slate-300 font-medium">
                            <div class="flex items-center gap-2">
                                <span class="material-icons text-primary">calendar_today</span>
                                {{ $article->created_at->format('d M Y') }}
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-icons text-primary">person</span>
                                Admin
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="p-8 md:p-12 prose prose-lg prose-slate dark:prose-invert max-w-none text-justify leading-relaxed">
                    {!! nl2br(e($article->content)) !!}
                </div>

                <div class="p-8 md:p-12 border-t border-slate-100 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50">
                    <h3 class="text-xl font-bold mb-6 text-brand-teal dark:text-white flex items-center gap-2">
                        <span class="material-icons text-primary">share</span> Bagikan Artikel
                    </h3>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"
                            class="w-12 h-12 rounded-full bg-[#1877F2] text-white flex items-center justify-center hover:-translate-y-1 transition-transform shadow-lg shadow-blue-500/30">
                            <i class="fab fa-facebook-f text-xl">F</i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?text={{ $article->title }}&url={{ url()->current() }}"
                            target="_blank"
                            class="w-12 h-12 rounded-full bg-[#1DA1F2] text-white flex items-center justify-center hover:-translate-y-1 transition-transform shadow-lg shadow-blue-400/30">
                            <i class="fab fa-twitter text-xl">T</i>
                        </a>
                        <a href="https://wa.me/?text={{ $article->title }}%20{{ url()->current() }}" target="_blank"
                            class="w-12 h-12 rounded-full bg-[#25D366] text-white flex items-center justify-center hover:-translate-y-1 transition-transform shadow-lg shadow-green-500/30">
                            <i class="fab fa-whatsapp text-xl">W</i>
                        </a>
                    </div>
                </div>
            </article>

            <div class="mt-16 max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold mb-8 text-brand-teal dark:text-white border-l-4 border-primary pl-4">Artikel
                    Lainnya</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach ($related_articles ?? [] as $related)
                        <!-- Related articles loop here if passed from controller -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
