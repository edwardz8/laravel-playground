<?php

namespace App\Http\Controllers;

use App\Models\Quarterback;
use Inertia\Inertia;

class QuarterbackController extends Controller
{
    public function index()
    {
        return Inertia::render('Quarterbacks/Index', [
            'quarterbacks' => Quarterback::latest()->get(),
        ]);
    }
}
