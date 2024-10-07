<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bridge;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {        
        $bridges = Bridge::all();

        return view('pages.index', compact('bridges'));
    }
}
