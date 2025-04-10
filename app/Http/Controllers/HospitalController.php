<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HospitalController extends Controller
{

    public function getApiGetHospitalByID($id = null){

        $hospital = Hospital::find($id);
        return view('hospital.listado_hospitales')->with($hospital);
    }

    public function getApiListado(){
        $hospital = Hospital::all();
        return view('hospital.listado_hospitales')->with('hospitales', $hospital);
    }
    
    public function addHospitalView($id = null) {
        if ($id) {
            $hospital = Hospital::find($id);
            
        } else {
            $hospital = new Hospital(); 
            
        }
        return view('hospital.formulario_hospital', compact('hospital'));
    }
    

    public function deleteApiEliminar($id) {
        $hospital = Hospital::find($id);
        $hospital->delete();
        return redirect()->route('hospital.getApiListado')->with('success', 'Hospital eliminado correctamente');
    }

    public function postApiAddHospital(Request $request) {
        $data = $request->all();   
        $hospital = new Hospital();
        $hospital->nombre = $data['nombre'];
        $hospital->ubicacion = $data['ubicacion'];

    
        $hospital->save();

        return redirect()->route('hospital.getApiListado')->with('success', 'Hospital registrado correctamente');
    }


    
    public function putApiUpdateHospital($id, Request $request) {
        $hospital = Hospital::find($id);
        $hospital->nombre = $request['nombre'];
        $hospital->ubicacion = $request['ubicacion'];
        $hospital->save();
    
        return redirect()->route('hospital.getApiListado')->with('success', 'Paciente actualizado correctamente');
    }
    
}
