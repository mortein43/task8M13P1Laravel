<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        return view('addNew');
    }

    public function index()
    {
        $news = News::all();
        return view('start', compact('news'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'summary' => 'required|string|max:50',
            'short_description' => 'required|string|max:150',
            'full_text' => 'required|string|max:5000',
        ]);

        News::create($validatedData);

        return redirect('/');
    }
}
//123456789101112131415161718192021222324252627282930
