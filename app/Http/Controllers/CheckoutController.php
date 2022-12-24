<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.checkout');
    }

    public function success(Request $request)
    {
        return view('pages.success');
    }
}
