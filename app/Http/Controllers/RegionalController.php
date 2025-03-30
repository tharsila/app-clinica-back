<?php

namespace App\Http\Controllers;

use App\Regional;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    public function index () 
    {
        $regional = Regional::all();

        return response()->json($regional, 200);
    }

}
