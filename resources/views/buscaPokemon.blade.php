@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Buscar Pokemon</div>
                <tbody>
                    {{ Form::open(array( 'method' => 'POST'), array('role' => 'form')) }}

                      <div class="row">
                        <div class="form-group col-md-4">
                          {{ Form::label('email', 'Dirección de E-mail') }}
                          {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
                        </div>
                      </div>
                      {{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
                      
                    {{ Form::close() }}

                    </form>
                    
                           <table class="table table-bordered table-striped table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th> Nombre</th>
                                    <th> Evolucion</th>
                                    <th> Tipo</th> 
                                    <th> 2do Tipo</th>              
                                    <th class="no-sort" width="5%">Ver</th>
                                </tr>
                            </thead>            
                            <tbody>
                                @foreach($Pokemones as $pokemon)
                                <tr>
                                    <td>{{ $pokemon->name }}</td>
                                    <td>{{ $pokemon->before_evo}}</td>
                                    <td>{{ $pokemon->type_first}}</td>
                                    <td>{{ $pokemon->type_second}}</td>
                                    <td></td>
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
