<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $home = Home::select(['title', 'subtitle', 'description_line_one', 'description_line_two', 'image'])->first();
        return view('index', compact('home'));
    }
}
