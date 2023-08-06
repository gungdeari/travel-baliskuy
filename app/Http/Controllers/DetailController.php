<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $items = TravelPackage::with(['galleries'])->where('slug', $slug)->firstOrFail();

        return view('pages.detail', [
            'items' => $items
        ]);
    }
}
