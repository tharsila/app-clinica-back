<?php

namespace App\Http\Controllers;

use App\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{

    public function index () 
    {
        $specialty = Specialty::all();

        return response()->json($specialty, 200);
    }
}
