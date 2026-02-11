<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function index()
    {
        $hero = HeroSection::first();
        return view('admin.Hero.edit', compact('hero'));
    }

    public function update(Request $request)
    {
        $hero = HeroSection::first() ?? new HeroSection();

        $request->validate([
            'title' => 'required|string|max:255',
            'badge_text' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            if ($hero->image) {
                Storage::delete('public/' . $hero->image);
            }
            $data['image'] = $request->file('image')->store('hero', 'public');
        }

        $hero->fill($data);
        $hero->save();

        return redirect()->back()->with('success', 'Hero section updated successfully.');
    }
}
