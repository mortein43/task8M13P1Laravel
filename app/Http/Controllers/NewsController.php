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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'summary' => 'required|string|max:50',
            'short_description' => 'required|string|max:150',
            'full_text' => 'required|string|max:5000',
        ]);

        News::create($validatedData);

        return redirect('/start');
    }
}
