<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Materia;
use App\Academia;
use GuzzleHttp\Client;
use App\Http\Requests\StorePostPost;
use DB;
use Auth;


use App\Services\SiiauServices;

class academiasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        //$id = Auth::user()->codigo;
            //$id = '2952399'
            // $id = '2236079'
            
            $id = '2236079';
            $materias = $this->siiauServices->getMateriasPorProfesor($id);
   
            $academias = Academia::all();

            $MATERIAS = Materia::all();

            foreach ($materias as $valore) {
                
                $nrc = $valore->nrc;
                // echo 'Nrc: ' . $nrc . '<br>';
                $findMateria = Materia::where('crn', $nrc)->first();

                if (! $findMateria) {
                    $materia = new Materia;
                    $materia->crn = $nrc;
                    $materia->save();
                }
            }

        return view('academiasAssign.choice')->with([
            'materias' => $materias,
            'academias' => $academias,
            'MATERIAS' => $MATERIAS,
        ]);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materias, Academia $academias,$id)
    {
        $academias = Academia::all();

        $materias = $this->siiauServices->getMateriasPorProfesor($id);
        $MATERIAS = Materia::findOrFail($id);
        
       return view('academiasAssign.edit', compact('MATERIAS','academias', 'materias'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Materia $materias, Request $request,$id)
    {
        
        $academiaUpdate = Materia::findOrfail($id);
        
        $request->validate([
            'academia' => 'required',
        ]);

        $academiaUpdate->update([
            'academias_id' => $request->input('academia'),
        ]);

        return redirect('/academiasAssign'); 
    }

    public function Home(Request $request)
    {
        
        $id = '2236079';
        $foto = 'http://148.202.89.89/Fotos/2236079.jpg';
        
        $materias = $this->siiauServices->getMateriasPorProfesor($id); 
        $academias = Academia::all();
        
        $nombreAcademia = $request->get('buscarpor');
        $dbMaterias = Materia::where('academias_id', 'like', "%$nombreAcademia%")->get();
        
        return view('home')->with([
            'materias' => $materias,
            'academias' => $academias,
            'dbMaterias' => $dbMaterias,
        ]); 
    }
}
