<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view('bookcast.news.index');
    }

    public function create(Request $request)
    {
        return view('bookcast.news.create');
    }

    public function show(Request $request, News $item)
    {
        return view('bookcast.news.show', compact('item'));
    }

    public function edit(Request $request, News $item)
    {
        return view('bookcast.news.edit', compact('item'));
    }

    public function update(Request $request, News $item)
    {
        return back();
    }
}
