@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">Buscar Pokemon</div>
              
                <tbody>
                <form role="form" method="POST" class="navbar-form navbar-left" role = "search" action="{{ url('/Buscar') }}"> 
                {!! csrf_field() !!}
                  <div class="form-group">
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre pokemon']) !!}
                  </div>
               
                  <button type="submit" class="btn btn-default">Buscar</button>
                </form>

                @if ($NoExiste == NULL)

                    <div style="color:#FF0000;"> <h4>El pokemon que buscas no se encuentra en la pokedex</h4>
                        </div>
            @endif

                    <table class="table table-bordered table-striped table-hover" id="dataTable">

                            <thead>
                                <tr>
                                    <th> Nombre</th>
                                    <th> Tipo</th>             
                                    <th class="no-sort" width="5%">Ver</th>
                                </tr>
                            </thead>            
                            <tbody>
                                @foreach($Pokemones as $pokemon)
                                <tr>
                                    <td>{{ $pokemon->name }}</td>
                                    <td>{{ $pokemon->type_first}}</td>
                                    <td>
                                     <center>
                                        <a href="{{ url('/Buscar/show/' . $pokemon->id ) }}" class="btn btn-flat btn-info btn-xs" data-toggle="tooltip" title="Detalle"><span class="fa fa-eye" aria-hidden="true"/></a>
                                    </center>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination pull-right"> {!! $Pokemones->render() !!} </div>

            </div>
        </div>
    </div>
</div>
@endsection
