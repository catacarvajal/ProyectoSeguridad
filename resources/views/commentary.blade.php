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

                    {!! Form::open(['url' => '/cargar', 'class' => 'form-horizontal', 'files' => true]) !!}
                                        
                    {!! Form::submit('Visualizar graficos', ['class' => 'btn btn-block btn-primary btn-xs', 'id' => 'cargar', 'style' => 'width:30%; margin-left:3%;margin-top:3%;']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
