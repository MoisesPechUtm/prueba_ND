<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Models\Hospital;
use App\Models\Tutor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PacienteController extends Controller
{

    public function getApiGetPacienteByID($id = null){

        $paciente = Paciente::find($id);
        return view('paciente.listado_pacientes')->with($paciente);
    }
    
    public function getApiListado(){
        $pacientes = Paciente::with(['tutor', 'hospital'])->get();
        return view('paciente.listado_pacientes', compact('pacientes'));

        
    }

    public function addPacienteView($id = null) {

        if ($id) {
            $paciente = Paciente::find($id);
            $tutor = $paciente->tutor; 
        } else {
            $paciente = new Paciente(); 
            $tutor = new Tutor();
        }

        $hospitales = Hospital::all();

        return view('paciente.formulario_paciente', compact('paciente', 'tutor', 'hospitales'));
    }
    
    

    public function deleteApiEliminar($id) {
        $paciente = Paciente::find($id);
        $paciente->delete();
        return redirect()->route('paciente.getApiListado')->with('success', 'Paciente eliminado correctamente');
    }


    public function postApiAddPaciente(Request $request) {
        $data = $request->all();
        
        $fechaNacimiento = new \DateTime($data['fecha_nacimiento']);
        $hoy = new \DateTime();
        $edad = $hoy->diff($fechaNacimiento)->y;

        // Datos del Tutor
        $tutor = new Tutor();
        $tutor->nombre = $data['tutor_nombre'];
        $tutor->numero_tel = $data['numero_tel'];
        $tutor->save();
    
        // Datos del paciente
        $paciente = new Paciente();
        $paciente->nombre = $data['nombre'];
        $paciente->edad = $edad;
        $paciente->sexo = $data['sexo'];
        $paciente->fecha_nacimiento = $data['fecha_nacimiento'];
        $paciente->ciudad_origen = $data['ciudad_origen'];
        $paciente->fecha_inscripcion = $data['fecha_inscripcion'];
        $paciente->hospital_id = $data['hospital_id'];
        $paciente->tutor_id = $tutor->id;
        $paciente->save();
    
        return redirect()->route('paciente.getApiListado')->with('success', 'Paciente registrado correctamente');
    }
    

    public function putApiUpdatePaciente($id, Request $request) {
        $paciente = Paciente::find($id);

        $fechaNacimiento = new \DateTime($request->input('fecha_nacimiento'));
        $hoy = new \DateTime();
        $edad = $hoy->diff($fechaNacimiento)->y;

        $tutor = Tutor::find($request->input('tutor_id'));
    
        $paciente->nombre = $request->input('nombre');
        $paciente->edad = $edad;
        $paciente->sexo = $request->input('sexo');
        $paciente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $paciente->ciudad_origen = $request->input('ciudad_origen');
        $paciente->fecha_inscripcion = $request->input('fecha_inscripcion');
        $paciente->hospital_id = $request->input('hospital_id');
        $paciente->tutor_id = $tutor->id;
        $paciente->save();
    
        return redirect()->route('paciente.getApiListado')->with('success', 'Paciente actualizado correctamente');
    }

    public function generarPDF($id)
    {
        // Obtener los datos del paciente desde la base de datos
        $paciente = Paciente::find($id);
        $paciente->fecha_inscripcion = \Carbon\Carbon::parse($paciente->fecha_inscripcion)->format('d/m/Y H:i');

        // Verificar si el paciente existe
        if (!$paciente) {
            return redirect()->route('paciente.getApiListado')->with('error', 'Paciente no encontrado');
        }

        // Generar el PDF
        $pdf = PDF::loadView('paciente.pdf', compact('paciente'));

        // Retornar el PDF generado al navegador
        return $pdf->download('datos_paciente.pdf');
    }

    
}
