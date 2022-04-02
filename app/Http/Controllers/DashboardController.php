<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Cache;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Cache::remember('index', 60, function() {
            return Products::limit(20)->get();
        });
        return view('index')->with('products', $data);
    }
}
