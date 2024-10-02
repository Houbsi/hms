<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Show the Page with the slug
     */
    public function index(): View
    {
        return view('page.index', [
            'pages' => Page::all()
        ]);
    }

    /**
     * Show the Page with the slug
     */
    public function show(string $language, string $slug): view
    {
        $data = Page::where('language', $language)->where('slug', $slug)->firstOrFail();

        return view('page.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the Page with the slug
     */
    public function show1(string $slug): string
    {
        $language = env('APP_LOCALE');

        return redirect()->action(
            [__CLASS__, 'show'], ["language" => $language, "slug" => $slug]
        );
    }
}
