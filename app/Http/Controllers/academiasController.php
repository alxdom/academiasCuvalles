<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Materia;
use App\Academia;
use App\Http\Requests\StorePostPost;
class academiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $materias = Materia::with('academia')->get();
                
                $academias = Academia::all();
                return view('academiasAssign.choice',compact('materias','academias')); 
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
        //dd($request->all());
        //dd($id_academia);
        //dd($request->input('academias_id'));
        Materia::create($request->all());
        return redirect('/academiasAssign');
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
        $materias = Materia::findOrFail($id);
        $academias = Academia::all();
        
       return view('academiasAssign.edit', compact('materias','academias'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, $id)
    {
        
        //$materias = Materia::findOrFail($id);
        dd('hola dd');
        $materias->update($request->validated());
        
        return back();
        
        
        //$materias->update($request->only('academias_id'));
        //return redirect()->route('academias.index', $materias);
        //$materias->update($request->all());
        //return redirect('/academiasAssign');
        //$materias = Input::get('academias_id');
        //$request->only('academias_id');
        //$data = $request->input('academias_id');
        //$materias->update($data);
        // return 'se completo el update de la materia '.$materias['nombre']. ' y su academia '.$materias['academias_id'];
        
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
