<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Materia;
use App\Academia;
use Auth;

class EvidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $id = '2236079';
        //$id = Auth::user()->codigo;
        //$id = '2952399'
        // $id = '2236079'
        // 2709139
        // $foto = 'http://148.202.89.89/Fotos/' . Auth::user()->codigo . 'jpg';
        $foto = 'http://148.202.89.89/Fotos/2236079.jpg';
        
        $materias = $this->siiauServices->getMateriasPorProfesor($id); 
        $academias = Academia::all();
        
        $nombreAcademia = $request->get('buscarpor');
        $dbMaterias = Materia::where('academias_id', 'like', "%$nombreAcademia%")->get();
        
        return view('evidencias.index')->with([
            'materias' => $materias,
            'academias' => $academias,
            'dbMaterias' => $dbMaterias,
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


    public function ShowUploadEvidencias(Request $request){
        
        // return "link para subir: "public/evidencias/" . $request->idacademia . "/" . $request->idmateria . "/2020A" . "/" .$request->tipo; 
        // $materiaID, $academiaID;
        // $materias = $this->siiauServices->getMateriasPorProfesor($id);
        
        return view('evidencias.upload')->with([
            'idmateria' => $request->idmateria,
            'idacademia' => $request->idacademia,
            'tipo' => $request->tipo,
        ]); 
        
    }

    public function uploadEvidencias(Request $request){

        // $uploadUrl = "public/Evidencias/" . $request->academia . "/" . $request->idmateria . "/" . $request->ciclo . "/" . $request->tipo;
        // $url = "storage/public/evidencias/" . $request->academia . "/" . $request->materia . "/" . $request->ciclo . "/" .$request->tipo; 

        $url = $request->academia . "/" . $request->materia . "/" . $request->ciclo . "/" .$request->tipo; 

        $request->file('archivo')->store($url);

        return redirect()->back();
    }

    public function choice()
    {
        return view('evidencias.choice');
    }
}
