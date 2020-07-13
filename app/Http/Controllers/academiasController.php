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



    public function edit(Materia $materias, Academia $academias,$id)
    {
        $academias = Academia::all();
        $materias = Materia::findOrFail($id);
        
        
       return view('academiasAssign.edit', compact('materias','academias'));
       
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Materia $materias, StorePostPost $request,$id)
    {

        if ( $materias->findOrFail($id)->update($request->validated() ) ){
            
            return redirect('/academiasAssign');
                //dd($materias->update( $request->all() ));
                //return response()->json(['mensaje' => 'SI jala el update',
                //$materias->find($id),200, $request->all()]);
                

         }else{
                
                return response()->json([401,'mensaje' => 'No jala el update',
                $materias->find($id), $request->all()]); 
         }
                
                
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
