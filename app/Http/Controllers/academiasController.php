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
    {
        //$id = Auth::user()->codigo;
       
        $id =  Auth::user()->codigo;
        // $id = '2952399'
        $materias = $this->siiauServices->getMateriasPorProfesor($id);

        

        //$encode = json_encode($materias , JSON_FORCE_OBJECT);
        //$decode = json_decode($encode, true);
        //$porciones = explode(":", $encode);
        //dd($encode);



        /*$count = count($decode);
            for ($i = 0; $i < $count; $i++) {
                $NRCS = $decode[$i]['nrc'];

                $ncrEncode = json_encode($NRCS);
                $ncrDecode = json_decode($ncrEncode);

                echo $ncrDecode;
            }*/

       

       
            
                

        /*foreach($materias as $materia)
        {
            foreach($materia as $materiaItem)
                {
                    json_encode($materiaItem, JSON_FORCE_OBJECT);
                    $myJSON = json_encode($materiaItem);
                    json_decode($myJSON);
                    
                }
            echo "<br>";
        }*/
       


        
        //$pluckedMaterias = $decode->pluck('materia')->toJson();
        
        /*$count = count($decode);
        for ($i = 0; $i < $count; $i++) {
            return $decode[$i]['nrc'];
        }*/

        

        /*foreach ($materias as $materia) {
            echo $materia;
        }*/


        //$pluckedMaterias = $materias->pluck('materia')->toArray();


        
        //dd($pluckedMaterias->all());
        
        //$RegisterNRC = Materia::firstOrCreate(['crn' => $request->codigo]);

        //$materiasData = $this->siiauServices->getMateriasNRC($id);
        $materiasBD     = DB::table('materias')->pluck('crn')->toArray();

            /*if (in_array($materiasBD,$materiasData['*']->crn)){
                dd('ya existe materia');
            }else{
                dd('no existe materia');
            }*/
        
        return view('academiasAssign.choice')->with([
            'materias' => $materias,
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

    public function logeo(){
        try {
            $client = new Client([
                'base_uri' => 'http://148.202.89.11/d_alum/api/',
                'timeout'  => 2.0,001
            ]);
        } catch (\Throwable $th) {
            
    }
        $response = $client->request('POST', 'login?codigo=214332855&pass=alextintor');
        $siiau = json_decode( $response->getBody()->getContents());
        return $siiau;
        //return view('materias');
    }
}
