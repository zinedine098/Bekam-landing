<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::first();
        return view('admin.Footer.edit', compact('footer'));
    }

    public function update(Request $request)
    {
        $footer = Footer::first() ?? new Footer();

        $request->validate([
            'about_description' => 'nullable|string',
            'clinic_name' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'whatsapp' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'instagram_link' => 'nullable|string|max:255',
            'facebook_link' => 'nullable|string|max:255',
            'copyright_text' => 'nullable|string|max:255',
        ]);

        $footer->fill($request->all());
        $footer->save();

        return redirect()->back()->with('success', 'Footer updated successfully.');
    }
}
