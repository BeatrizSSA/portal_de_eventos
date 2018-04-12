@extends('layouts.app')
@section('title', 'Eventos')
@section('content')

<?php

    public function index($filter = null) {
        
        if (is_null($filter)) {
            $eventos = Eventos::all();
        }
        else {
            
            $eventos = Eventos::where('campo_filtro', $filter)->get();
        }
        return view('eventos.index')->with('eventos', $eventos);
    }

?>

<div class="container">
<div class="panel panel-primary">
    <div class="panel-heading">Eventos</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-11">
                <a class="btn btn-primary" href="{{ route('createEvent') }}" role="button">Novo Evento</a>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-1">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filtrar <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('indexEvent', ['all']) }}">Todos os eventos</a></li>
                    <li><a href="{{ route('indexEvent', ['filter' => 'today']) }}">Eventos de hoje</a></li>
                    <li><a href="{{ route('indexEvent', ['filter' => 'five']) }}">Eventos nos próximos 5 dias</a></li>
                </ul>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Título</th>
            <th>Detalhes</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        @foreach($eventos as $evento)
        <tr>
            <td>{{ $eventos->titulo }}</td>
            <td>
                <a href="{{ route('showEvent', $eventos->id) }}" class="fa fa-file-text-o" aria-hidden="true"></a> 
            </td>         
            <td>
                <a href="{{ route('editEvent', $evento->id) }}" class="fa fa-pencil" aria-hidden="true"></a>
            </td>
            <td>
                <a href="{{ route('destroyEvent', $evento->id) }}" class="fa fa-trash" aria-hidden="true"></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection