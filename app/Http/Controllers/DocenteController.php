<?php

namespace App\Http\Controllers;
use App\Models\Docente;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index(Request $request)
    {
        
            $data = Docente::orderBy('id', 'asc');
         

            return view('docente.index',['docentes' => $data])
            ->extends('layouts.main')
            ->section('content');
    
      
    }
}
