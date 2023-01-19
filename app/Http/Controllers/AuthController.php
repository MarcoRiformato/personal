<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    
public function index()
{
    $user = Auth::user();

    return Inertia::render('Home', [
        'user' => $user
    ]);
}
}
