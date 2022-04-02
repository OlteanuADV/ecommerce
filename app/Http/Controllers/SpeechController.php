<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, DB, Cache\Cache, Storage;
use App\Models\User;
use App\Models\Products;

class SpeechController extends Controller
{
    public function search(Request $request) 
    {
        $search = $request->search;

        $products = Products::where('title', 'like', "%".$search."%")->orWhere('description', 'like', "%".$search."%")->orderBy('price','asc')->limit(3)->get();
        return $products->toArray();
    }
}
