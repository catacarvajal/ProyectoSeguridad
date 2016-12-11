@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    {!! $pokemon->id !!}
                    {!! $pokemon->name !!}
                    {!! $pokemon->before_evo !!}
                    {!! $pokemon->type_first !!}
                    {!! $pokemon->type_second !!}

                    {!! Form::open(['url' => '/crearComentario', 'class' => 'form-horizontal', 'files' => true]) !!}
                                        
                    {!! Form::textarea('comentario', null, ['class' => 'form-control', 'placeholder' => 'Comentario de pokemon', 'type' => 'textArea', 'id' => 'textComentario', 'style' => 'resize:none; margin-top:8px; margin-bottom:8px;' ]) !!}

                    {!! Form::submit('Crear comentario', ['class' => 'btn', 'id' => 'cargar']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
