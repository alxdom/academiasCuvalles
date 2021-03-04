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

    // public function __construct(){

    //     $this->middleware('permission:academiasAssign.index')->only(['index']);
    //     $this->middleware('permission:academiasAssign.edit')->only(['edit', 'update']);
        
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = '2236079')
    {        //$id = Auth::user()->codigo;
            //$id = '2952399'
            // $id = '2236079'
            

            //Error al meter el constructor para proteger las rutasdd
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

    // public function logeo(){
    //     try {
    //         $client = new Client([
    //             'base_uri' => 'http://148.202.89.11/d_alum/api/',
    //             'timeout'  => 2.0,001
    //         ]);
    //     } catch (\Throwable $th) {
            
    // }
    //     $response = $client->request('POST', 'login?codigo=214332855&pass=alextintor');
    //     $siiau = json_decode( $response->getBody()->getContents());
    //     return $siiau;
    //     //return view('materias');
    // }
}
