@extends('landing.App')

@section('content')
    <div class="pt-28 pb-12 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Breadcrumb --}}
            <div class="flex items-center gap-2 text-sm text-slate-500 mb-8">
                <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
                <span class="material-icons text-xs text-slate-400">chevron_right</span>
                <a href="{{ route('landing.articles.index') }}" class="hover:text-primary transition-colors">Berita</a>
                <span class="material-icons text-xs text-slate-400">chevron_right</span>
                <span class="text-slate-800 dark:text-slate-200 font-medium truncate max-w-xs">{{ $article->title }}</span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                {{-- Main Content --}}
                <div class="lg:col-span-8">
                    {{-- Article Header --}}
                    <div class="mb-8">
                        <div class="flex items-center gap-3 mb-4">
                            <span
                                class="px-3 py-1 bg-brand-light/20 text-brand-teal text-xs font-bold uppercase tracking-wider rounded-full">
                                {{ $article->category->name }}
                            </span>
                        </div>

                        <h1 class="text-3xl md:text-5xl font-bold text-slate-900 dark:text-white leading-tight mb-6">
                            {{ $article->title }}
                        </h1>

                        <div class="flex items-center gap-6 text-sm text-slate-500 dark:text-slate-400">

                            <div class="flex items-center gap-2">
                                <span class="material-icons text-xs">calendar_today</span>
                                {{ $article->created_at->format('d M Y') }}
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-icons text-xs">schedule</span>
                                5 min baca
                            </div>
                        </div>
                    </div>

                    {{-- Featured Image --}}
                    <div class="rounded-3xl overflow-hidden mb-10 shadow-lg">
                        @if ($article->image)
                            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                                class="w-full h-auto object-cover">
                        @else
                            <div class="w-full aspect-video bg-slate-100 flex items-center justify-center">
                                <span class="material-icons text-slate-400 text-6xl">image</span>
                            </div>
                        @endif
                        <div class="bg-slate-50 dark:bg-slate-800 p-3 text-center text-xs text-slate-500 italic">
                            Ilustrasi terapi bekam (cupping therapy) yang dilakukan oleh tenaga ahli di klinik kami.
                        </div>
                    </div>

                    {{-- Article Content --}}
                    <div class="prose prose-lg prose-slate dark:prose-invert max-w-none mb-12">
                        {{--  Since the content is HTML from a rich text editor --}}
                        {!! nl2br(e($article->content)) !!}
                    </div>

                    {{-- Quote Box Example (If content doesn't have it, we manually add one for demo or handle in content) --}}
                    <div class="my-10 p-8 bg-brand-light/10 border-l-4 border-brand-teal rounded-r-xl">
                        <p class="text-xl font-medium text-brand-teal italic mb-4">
                            "Sebaik-baik pengobatan yang kalian lakukan adalah bekam."
                        </p>
                        <p class="text-sm font-bold text-slate-600 dark:text-slate-400">
                            — HR. Bukhari & Muslim
                        </p>
                    </div>


                    {{-- Tags & Share --}}
                    <div
                        class="flex flex-col sm:flex-row items-center justify-between border-t border-b border-slate-200 dark:border-slate-700 py-6 mb-12 gap-4">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="text-sm font-bold text-slate-700 dark:text-slate-300 mr-2 uppercase tracking-wide">Bacaan
                                Artikel:</span>
                            {{-- Placeholder Tags --}}
                            <a href="#"
                                class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs rounded-full hover:bg-brand-teal hover:text-white transition-colors">#BekamSunnah</a>
                            <a href="#"
                                class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs rounded-full hover:bg-brand-teal hover:text-white transition-colors">#Detox</a>
                            <a href="#"
                                class="px-3 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs rounded-full hover:bg-brand-teal hover:text-white transition-colors">#KesehatanAlami</a>
                        </div>
                        <div class="flex gap-2">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"
                                class="w-10 h-10 rounded bg-[#1877F2] text-white flex items-center justify-center hover:opacity-90 transition-opacity">
                                <i class="fab fa-facebook-f">F</i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text={{ $article->title }}&url={{ url()->current() }}"
                                target="_blank"
                                class="w-10 h-10 rounded bg-[#1DA1F2] text-white flex items-center justify-center hover:opacity-90 transition-opacity">
                                <i class="fab fa-twitter">T</i>
                            </a>
                            <a href="https://wa.me/?text={{ $article->title }}%20{{ url()->current() }}" target="_blank"
                                class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center hover:opacity-90 transition-opacity">
                                <span class="font-bold">X</span>
                            </a>
                        </div>
                    </div>

                    {{-- CTA Section --}}
                    <div class="bg-slate-900 rounded-3xl p-8 md:p-12 text-white relative overflow-hidden">
                        <div class="relative z-10 max-w-2xl">
                            <h3 class="text-2xl md:text-3xl font-bold mb-4">Ingin merasakan manfaat Bekam?</h3>
                            <p class="text-slate-300 mb-8">
                                Jadwalkan konsultasi gratis dengan terapis ahli kami untuk menentukan titik bekam yang tepat
                                sesuai kondisi kesehatan Anda.
                            </p>
                            <a href="#"
                                class="inline-block px-8 py-3 bg-brand-teal hover:bg-brand-dark text-white font-bold rounded-lg transition-colors shadow-lg shadow-brand-teal/30">
                                Konsultasi Sekarang
                            </a>
                        </div>
                        {{-- Decorative elements can go here --}}
                        <div
                            class="absolute top-0 right-0 w-64 h-64 bg-brand-teal/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-4 space-y-10">
                    {{-- Search Widget --}}


                    {{-- Related Articles Widget --}}
                    <div>
                        <h3 class="font-bold text-slate-900 dark:text-white mb-6">Berita Terkait</h3>
                        <div class="space-y-6">
                            @foreach ($related_articles ?? [] as $related)
                                <a href="{{ route('landing.articles.show', $related->slug) }}" class="flex gap-4 group">
                                    <div class="w-20 h-20 rounded-xl overflow-hidden flex-shrink-0 bg-slate-200">
                                        @if ($related->image)
                                            <img src="{{ Storage::url($related->image) }}" alt="{{ $related->title }}"
                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center text-slate-400">
                                                <span class="material-icons text-sm">image</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <h4
                                            class="text-sm font-bold text-slate-800 dark:text-slate-200 group-hover:text-brand-teal transition-colors line-clamp-2 mb-2">
                                            {{ $related->title }}
                                        </h4>
                                        <div class="text-xs text-slate-500">
                                            {{ $related->created_at->format('d M Y') }}
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                            {{-- Fallback mock data if empty for visualization --}}
                            @if (empty($related_articles) || count($related_articles) == 0)
                                <div class="flex gap-4 group cursor-pointer">
                                    <div class="w-20 h-20 rounded-xl overflow-hidden flex-shrink-0 bg-slate-200 relative">
                                        <div class="absolute inset-0 bg-slate-400"></div> {{-- Placeholder --}}
                                    </div>
                                    <div>
                                        <h4
                                            class="text-sm font-bold text-slate-800 dark:text-slate-200 group-hover:text-brand-teal transition-colors line-clamp-2 mb-2">
                                            Persiapan Penting Sebelum Menjalani Bekam
                                        </h4>
                                        <div class="text-xs text-slate-500">12 Mei 2024</div>
                                    </div>
                                </div>
                                <div class="flex gap-4 group cursor-pointer">
                                    <div class="w-20 h-20 rounded-xl overflow-hidden flex-shrink-0 bg-slate-200 relative">
                                        <div class="absolute inset-0 bg-slate-300"></div> {{-- Placeholder --}}
                                    </div>
                                    <div>
                                        <h4
                                            class="text-sm font-bold text-slate-800 dark:text-slate-200 group-hover:text-brand-teal transition-colors line-clamp-2 mb-2">
                                            Jadwal Bekam Sunnah Terbaik di Tahun 2024
                                        </h4>
                                        <div class="text-xs text-slate-500">05 Mei 2024</div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- Newsletter Widget --}}


                </div>
            </div>
        </div>
    </div>
@endsection
