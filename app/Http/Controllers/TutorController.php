<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TutorController extends Controller
{

    public function getApiListado(){
        $tutores = Tutor::all();
        return view('tutor.listado_tutores', compact('tutores'));
    }

    
}
