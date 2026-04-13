<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->user_type === 'admin') {
            return view('admin-dashboard');
        }
        
        return view('admin-dashboard');
    }
}