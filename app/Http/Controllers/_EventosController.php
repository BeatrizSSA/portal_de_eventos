<?php
 
class EventosController extends BaseController {
 
    public function getIndex()
    {
        $eventos = Eventos::get();
        return View::make('eventos', compact('eventos'));
    }
 
    public function getInserir()
    {
        return View::make('eventos_inserir');
    }
 
    public function postInserir()
    {
        $eventos = new Eventos();
 
        $eventos->titulo   = Input::get('titulo');
        $eventos->conteudo = Input::get('conteudo');
 
        $eventos->save();
 
        return Redirect::to('/eventos');
    }

    public function getEditar($id)
    {
        $eventos = Eventos::find($id);
        return View::make('eventos_editar', compact('eventos'));
    }
 
    public function postEditar()
    {
        $eventos = Eventos::find(Input::get('id'));
 
        $eventos->titulo   = Input::get('titulo');
        $eventos->conteudo = Input::get('conteudo');
 
        $eventos->save();
 
        return Redirect::to('/eventos');
    }
 
    public function getRemover($id)
    {
        $eventos = Eventos::find($id);
        $eventos->delete();
 
        return Redirect::to('/eventos');
    }
}

?>