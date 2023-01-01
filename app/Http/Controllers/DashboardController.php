<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $screenName = 'Dashboard';

        return view('dashboard', [
            'screenName' => $screenName
        ]);
    }
}
