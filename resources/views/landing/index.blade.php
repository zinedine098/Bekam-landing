@extends('landing.App')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-40 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover opacity-20 dark:opacity-10"
                data-alt="Clean and professional modern therapy clinic room"
                src="{{ $hero && $hero->image ? Storage::url($hero->image) : 'https://lh3.googleusercontent.com/aida-public/AB6AXuAhs7MiVM7vQ4HZl4HIaqm0KWpuO2Fqgk44Cvwmn79uXkpvA6Ltp1KEZzF6J7Tm7A6aXaBId4CCxBX3Z97Ea6VvRsWJkYIe9UK5F46k5WQMp7MWzlVs1LzhuVrq0VFsMJiHiNT-rlkud_Mp2AS9OeogbtdnpUfEaHhuQY9lhgWnrLvUF3oXXfYawh3MYHzjzUnpmJuQEQMiVkxx58C6Q9vv7KUkdQpPjB__9CUWxtDJjFCawTowTHS2ZefLUFHQqTTIKMPv3KVaJRHa' }}" />
            <div
                class="absolute inset-0 bg-gradient-to-b from-background-light/0 via-background-light to-background-light dark:from-background-dark/0 dark:to-background-dark">
            </div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span
                        class="text-xs font-bold uppercase tracking-wider text-brand-teal dark:text-primary">{{ $hero->badge_text ?? 'Terapi Bersertifikat' }}</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-extrabold text-brand-teal dark:text-white mb-6 leading-tight">
                    {!! $hero->title ?? 'Kesehatan Alami dengan <span class="text-primary">Bekam Profesional</span>' !!}
                </h1>
                <p class="text-lg lg:text-xl text-slate-600 dark:text-slate-400 mb-10 leading-relaxed">
                    {{ $hero->description ?? 'Kami menghadirkan terapi sunnah dengan standar klinis modern. Mengutamakan sterilitas, kenyamanan, dan hasil maksimal untuk pemulihan kesehatan Anda secara holistik.' }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ $hero->button_link ?? '#' }}"
                        class="bg-primary hover:bg-primary/90 text-background-dark px-10 py-4 rounded-xl font-bold text-lg transition-all flex items-center justify-center gap-2">
                        <span class="material-icons">calendar_today</span>
                        {{ $hero->button_text ?? 'Hubungi Sekarang' }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Overview -->
    <section class="py-24 bg-white dark:bg-slate-900/50" id="layanan">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-brand-teal dark:text-white mb-4">Layanan Unggulan Kami
                </h2>
                <div class="w-24 h-1.5 bg-primary mx-auto rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1: Hijama -->
                <div
                    class="bg-background-light dark:bg-slate-800 p-8 rounded-xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:border-primary/30 transition-all group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-icons text-primary group-hover:text-white text-3xl">spa</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Hijama Sunnah</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">Terapi bekam klasik
                        mengikuti titik-titik sunnah untuk detoksifikasi tubuh dan meningkatkan imun.</p>
                </div>
                <!-- Card 2: Bekam Kering -->
                <div
                    class="bg-background-light dark:bg-slate-800 p-8 rounded-xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:border-primary/30 transition-all group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-icons text-primary group-hover:text-white text-3xl">air</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Bekam Kering</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">Fokus pada relaksasi otot
                        dan melancarkan aliran darah tanpa pengeluaran darah, cocok untuk pegal-pegal.</p>
                </div>
                <!-- Card 3: Bekam Basah -->
                <div
                    class="bg-background-light dark:bg-slate-800 p-8 rounded-xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:border-primary/30 transition-all group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-icons text-primary group-hover:text-white text-3xl">opacity</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Bekam Basah</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">Proses pengeluaran darah
                        kotor (oksidan) dengan teknik steril untuk penyembuhan berbagai penyakit kronis.</p>
                </div>
                <!-- Card 4: Bekam Listrik -->
                <div
                    class="bg-background-light dark:bg-slate-800 p-8 rounded-xl border border-slate-100 dark:border-slate-700 hover:shadow-xl hover:border-primary/30 transition-all group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
                        <span class="material-icons text-primary group-hover:text-white text-3xl">bolt</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Bekam Listrik</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">Inovasi modern yang
                        menggabungkan terapi bekam dengan stimulasi saraf elektrik untuk rehabilitasi saraf.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest News -->
    <section class="py-24" id="berita">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-brand-teal dark:text-white mb-4">Update Terkini
                        &amp;
                        Tips</h2>
                    <p class="text-slate-600 dark:text-slate-400">Wawasan kesehatan untuk hidup yang lebih baik</p>
                </div>
                <a class="hidden md:flex items-center gap-2 font-bold text-primary hover:text-primary/80 transition-all"
                    href="{{ route('landing.articles.index') }}">
                    Lihat Semua Berita <span class="material-icons">chevron_right</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($articles as $article)
                    <div class="group cursor-pointer">
                        <div class="relative overflow-hidden rounded-xl mb-6 aspect-[4/3]">
                            @if ($article->image)
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" />
                            @else
                                <div class="w-full h-full bg-slate-100 flex items-center justify-center">
                                    <span class="material-icons text-slate-400 text-5xl">image</span>
                                </div>
                            @endif
                            <div
                                class="absolute top-4 left-4 bg-primary text-background-dark px-3 py-1 rounded-md text-xs font-bold uppercase tracking-wider">
                                {{ $article->category->name }}</div>
                        </div>
                        <p class="text-xs text-slate-500 mb-2 font-semibold">
                            {{ $article->created_at->format('d M Y') }} • Oleh Admin</p>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-primary transition-colors line-clamp-2">
                            <a href="{{ route('landing.articles.show', $article) }}">{{ $article->title }}</a>
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4 line-clamp-2">
                            {{ Str::limit(strip_tags($article->content), 100) }}</p>
                        <a class="text-brand-teal dark:text-primary font-bold text-sm underline underline-offset-4"
                            href="{{ route('landing.articles.show', $article) }}">Read More</a>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 text-slate-500">
                        Belum ada berita yang tersedia.
                    </div>
                @endforelse
            </div>
            <div class="mt-8 text-center md:hidden">
                <a class="inline-flex items-center gap-2 font-bold text-primary hover:text-primary/80 transition-all"
                    href="{{ route('landing.articles.index') }}">
                    Lihat Semua Berita <span class="material-icons">chevron_right</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Educational Videos -->
    <section class="py-24 bg-brand-teal/5 dark:bg-slate-800/20" id="video">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-brand-teal dark:text-white mb-4">Video Edukasi</h2>
                <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Tonton penjelasan mendalam mengenai
                    prosedur dan manfaat bekam langsung dari para ahli kami.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($videos as $video)
                    <div onclick="openVideoModal('{{ $video->video_url }}', '{{ $video->title }}')"
                        class="relative group aspect-video rounded-2xl overflow-hidden shadow-lg bg-black cursor-pointer transform hover:-translate-y-1 transition-all duration-300">
                        <iframe src="{{ $video->video_url }}" class="w-full h-full pointer-events-none"
                            frameborder="0"></iframe>
                        <div
                            class="absolute inset-0 bg-transparent group-hover:bg-black/40 transition-all z-10 flex items-center justify-center">
                            <div
                                class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white scale-0 group-hover:scale-100 transition-transform opacity-0 group-hover:opacity-100 delay-100">
                                <span class="material-icons text-4xl ml-1">play_arrow</span>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent z-20">
                            <h4 class="text-white font-bold line-clamp-1">{{ $video->title }}</h4>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 text-slate-500">
                        Belum ada video yang tersedia.
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
