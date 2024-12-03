<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLogout extends Controller
{
    public function __invoke(Request $request)
    {
        \Illuminate\Support\Facades\Auth::logout();
        return to_route('login');
    }
}
