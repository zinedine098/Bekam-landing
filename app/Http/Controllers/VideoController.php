<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::latest()->get();
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video_url' => 'required|url',
            'description' => 'nullable|string',
        ]);

        Video::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'video_url' => $this->convertYoutubeUrl($request->video_url),
            'description' => $request->description,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video_url' => 'required|url',
            'description' => 'nullable|string',
        ]);

        $video->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'video_url' => $this->convertYoutubeUrl($request->video_url),
            'description' => $request->description,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video berhasil dihapus.');
    }

    /**
     * Convert YouTube URL to Embed URL
     */
    private function convertYoutubeUrl($url)
    {
        // Pattern to match YouTube video ID from various URL formats
        // Supports: youtube.com/watch?v=ID, youtu.be/ID, youtube.com/embed/ID, etc.
        // Also handles additional query parameters (e.g. &t=1s) by not anchoring to end of string
        $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i';
        
        if (preg_match($pattern, $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }

        return $url;
    }
}
