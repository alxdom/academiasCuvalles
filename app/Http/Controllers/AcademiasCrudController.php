<?php

namespace App\Http\Controllers;

use App\Academia;
use App\Http\Requests\AcademiasCrudRequest;
use Illuminate\Http\Response;

class AcademiasCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function index()
    {
      $academias = Academia::all();
      return view('academias.show')->with(['academias' => $academias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function create()
    {
        //
      $academia = new Academia();
      return view('academias.create')->with(['academia' => $academia, 'isEdit' => false]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AcademiasCrudRequest $request)
    {
        //
      // Patient::create($request->validated());

      Academia::create($request->validated());
      return redirect()->route('Academias.index')->with('status', 'Academias creada con exito');
    }

  /**
   * Display the specified resource.
   *
   * @param Academia $academia
   * @return Response
   */
    public function show(Academia $academia)
    {
        //
    }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Academia $academia
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
   */
    public function edit(Academia $academia)
    {
        //
      //$academia = Academia::findOrFail($id);
       $isEdit =true;
      return view('academias.edit', compact('academia','isEdit'));
    }

  /**
   * Update the specified resource in storage.
   *
   * @param AcademiasCrudRequest $request
   * @param Academia $academia
   * @return \Illuminate\Http\RedirectResponse
   */
    public function update(AcademiasCrudRequest $request, Academia $academia)
    {
        //
      //$academia = Academia::findOrFail($id);
      if ($academia->update($request->all())){
        //return back()->with('status', 'Academia editada con exito');
        return redirect()->route('academias.index')->with('status','Academia editada con exito');
      }else{
        return redirect()->route('academias.index')->with('status','Academia editada sin exito');
      }
     // return redirect()->route('academias.show');
    }

  /**
   * Remove the specified resource from storage.
   *
   * @param Academia $academia
   * @return \Illuminate\Http\RedirectResponse
   * @throws \Exception
   */
    public function destroy(Academia $academia)
    {
        //
      $academia->delete();
      return back()->with('status', 'Academia eliminada con exito');
    }
}
