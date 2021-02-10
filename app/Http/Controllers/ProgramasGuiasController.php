<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Materia;
use App\Academia;

class ProgramasGuiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = '2952399', Request $request)
    {
        $materias = $this->siiauServices->getMateriasPorProfesor($id);
        
        $academias = Academia::all();
        
        $nombreAcademia = $request->get('buscarpor');
        $dbMaterias = Materia::where('academias_id', 'like', "%$nombreAcademia%")->get();
        
        return view('guias.index')->with([
            'materias' => $materias,
            'academias' => $academias,
            'dbMaterias' => $dbMaterias,
        ]); 
    }

    public function ShowUploadGuias(Request $request){
        
        // return "link para subir: "public/evidencias/" . $request->idacademia . "/" . $request->idmateria . "/2020A" . "/" .$request->tipo; 
        // $materiaID, $academiaID;
        // $materias = $this->siiauServices->getMateriasPorProfesor($id);
        
        return view('guias.upload')->with([
            'idmateria' => $request->idmateria,
            'idacademia' => $request->idacademia,
            'tipo' => $request->tipo,
        ]); 
        
    }





















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
