@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Pokedex -- Pokemon -- {{$pokemon->name}}</h3></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <section class="invoice margin-bottom-10 padding-10">
                                <div class="box-header with-border">
                                    <h1 class="lead without-margin"><i class="fa fa-building"></i>  Información Pokemon </h1>
                                </div> 
                                <div class="box-body">
                                    <div class="row invoice-info">
                                        <div class="col-md-12">
                                            <address class="without-margin">
                                                <strong>Nombre</strong>
                                                <br>
                                                    {{$pokemon->name}}
                                                <br>
                                                <strong>Evolución</strong>
                                                <br>
                                                    {{$pokemon->before_evo}}
                                                <br>

                                            </address>
                                        </div>
                                    </div>
                            </section>
                        </div>
                        <div class="col-md-6">
                            <section class="invoice margin-bottom-10 padding-10">
                                <div class="box-header with-border">
                                    <h1 class="lead without-margin"><i class="fa fa-briefcase" ></i> Tipo</h1>
                                </div> 
                                <div class="box-body">
                                    <div class="row invoice-info">
                                        <div class="col-md-12">
                                            <address class="without-margin">
                                                <strong>Tipo Primario</strong>
                                                <br>
                                                    {{$pokemon->type_first}}
                                                <br>
                                                <strong>Tipo Secundario</strong>
                                                <br>
                                                    {{$pokemon->type_second}}
                                                <br>
                                            </address>
                                        </div>
                                    </div>
                            </section>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped table-hover" id="dataTable">
                                <thead>
                                    <tr>
                                        <th> Comentarios</th>
                                    </tr>
                                </thead>            
                                <tbody>
                                    @foreach($comentarios as $comentario)
                                        <tr>
                                            <td>{{ $comentario->commentary}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination pull-right"> {!! $comentarios->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
