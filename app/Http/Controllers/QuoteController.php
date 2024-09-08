<?php

namespace App\Http\Controllers;

use App\Models\Sentence;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function index(): View
    {
        return view('quote-list', ['sentences' => Sentence::all()]);
    }
}
