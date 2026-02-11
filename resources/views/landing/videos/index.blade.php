@extends('landing.App')

@section('content')
    <div class="py-24 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-5xl font-bold text-brand-teal dark:text-white mb-6">Video Edukasi</h1>
                <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto text-lg">
                    Pelajari lebih lanjut tentang terapi bekam melalui video edukatif dari para ahli kami.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($videos as $video)
                    <div onclick="openVideoModal('{{ $video->video_url }}', '{{ $video->title }}')"
                        class="group relative rounded-2xl overflow-hidden shadow-lg bg-black cursor-pointer transform hover:-translate-y-1 transition-all duration-300">
                        <div class="relative aspect-video">
                            <iframe src="{{ $video->video_url }}" class="w-full h-full pointer-events-none"
                                frameborder="0"></iframe>
                            <div
                                class="absolute inset-0 bg-transparent group-hover:bg-black/20 transition-all z-10 flex items-center justify-center">
                                <div
                                    class="w-16 h-16 bg-primary rounded-full flex items-center justify-center text-white scale-0 group-hover:scale-100 transition-transform opacity-0 group-hover:opacity-100 delay-100">
                                    <span class="material-icons text-4xl ml-1">play_arrow</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="p-4 bg-white dark:bg-slate-800 absolute bottom-0 left-0 right-0 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-lg font-bold text-brand-teal dark:text-white line-clamp-1 mb-1">
                                {{ $video->title }}</h3>
                            <p class="text-xs text-slate-500 line-clamp-2">{{ $video->description }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <div
                            class="w-20 h-20 bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="material-icons text-slate-400 text-4xl">video_library</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-700 dark:text-slate-300 mb-2">Belum ada video</h3>
                        <p class="text-slate-500">Silakan kembali lagi nanti untuk update terbaru.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $videos->links() }}
            </div>
        </div>
    </div>
@endsection
