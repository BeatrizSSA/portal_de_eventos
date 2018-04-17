<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($filter = null) {
        $eventos = Eventos::getEventos($filter)->get();
        return view('eventos.index')->with('eventos', $eventos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('eventos.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventos = new Eventos;
        $eventos->titulo        = $request->titulo;
        $eventos->conteudo = $request->conteudo;
        $eventos->save();
        return redirect()->route('indexEvent.php')->with('message', 'Eventos created successfully!');
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
        $eventos = Eventos::findOrFail($id);
        return view('editEvent.php',compact('eventos'));
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
        $eventos = Eventos::findOrFail($id);
        $eventos->titulo        = $request->titulo;
        $eventos->conteudo = $request->conteudo;
        $eventos->save();
        return redirect()->route('indexEvent.php')->with('message', 'Eventos updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventos = Eventos::findOrFail($id);
        $eventos->delete();
        return redirect()->route('indexEvent.php')->with('alert-success','Eventos hasbeen deleted!');
    }
}
