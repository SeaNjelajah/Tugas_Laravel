<?php

namespace App\Http\Controllers;

use App\Models\TabelData;
use Illuminate\Http\Request;

class CommandWeb extends Controller
{
    public function index () {
        return view('models', ['data' => TabelData::all()]);
    }
    
}
