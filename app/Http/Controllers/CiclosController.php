<?php

namespace App\Http\Controllers;

use App\Ciclo;
use App\Http\Requests\CiclosRequest;
use Illuminate\Http\Request;

class CiclosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
      $ciclos = Ciclo::all();
      return view('ciclos.show')->with(['ciclos' => $ciclos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        //
      $ciclos = new Ciclo();
      return view ('ciclos.create')->with(['ciclos' => $ciclos, 'isEdit' => false]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CiclosRequest $request): \Illuminate\Http\RedirectResponse
    {
        //
      Ciclo::create($request->validated());
      return redirect()->route('ciclos.index')->with('status','Ciclo creado con exito');
    }

  /**
   * Display the specified resource.
   *
   * @param Ciclo $ciclo
   * @return \Illuminate\Http\Response
   */
    public function show(Ciclo $ciclo)
    {
        //
    }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Ciclo $ciclos
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
   */
    public function edit(Ciclo $ciclo)
    {
        //
      $isEdit = TRUE;
      //dd($ciclo);
      return view('ciclos.edit',compact('ciclo','isEdit'));
    }

  /**
   * Update the specified resource in storage.
   *
   * @param CiclosRequest $request
   * @param Ciclo $ciclo
   * @return \Illuminate\Http\RedirectResponse
   */
    public function update(CiclosRequest $request, Ciclo $ciclo)
    {
        //
      if ($ciclo->update($request->all())){
        return redirect()->route('ciclos.index')->with('status', 'ciclo editado correctamente');
      }else{
        return redirect()->route('ciclos.index')->with('status', 'ciclo no se pudo editar');

      }
    }

  /**
   * Remove the specified resource from storage.
   *
   * @param Ciclo $ciclo
   * @return \Illuminate\Http\RedirectResponse
   * @throws \Exception
   */
    public function destroy(Ciclo $ciclo): \Illuminate\Http\RedirectResponse
    {
        //
      $ciclo->delete();
      return back()->with('status','Ciclo eliminado con exito');
    }
}
