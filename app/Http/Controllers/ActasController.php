<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Materia;
use App\Academia;

class ActasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
      $id = '2952399';
        $materias = $this->siiauServices->getMateriasPorProfesor($id);
        
        $academias = Academia::all();
        
        $nombreAcademia = $request->get('buscarpor');
        $dbMaterias = Materia::where('academias_id', 'like', "%$nombreAcademia%")->get();
        
        return view('actas.index')->with([
            'materias' => $materias,
            'academias' => $academias,
            'dbMaterias' => $dbMaterias,
        ]); 
    }

    public function ShowUploadActas(Request $request){
        
        // return "link para subir: "public/evidencias/" . $request->idacademia . "/" . $request->idmateria . "/2020A" . "/" .$request->tipo; 
        // $materiaID, $academiaID;
        // $materias = $this->siiauServices->getMateriasPorProfesor($id);
        
        return view('actas.upload')->with([
            'idmateria' => $request->idmateria,
            'idacademia' => $request->idacademia,
            'tipo' => $request->tipo,
        ]); 
        
    }
}
