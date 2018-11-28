@extends('layout.layout')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="card card-outline-inverse">
			<div class="card-header">
				<h2 class="float-left m-b-0 text-white"><i class="mdi mdi-server-security"></i> {{$cliente->nombre}}</h2>
				<a href="{{ route('clientes.index') }}" class="float-right btn btn-sm btn-rounded btn-success txt-blanco"><i class="mdi mdi-arrow-left"></i> Regresar</a>
			</div>
			<div class="card-body">
				<h4>Datos</h4>
				<hr>
				<div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-4">Nombre:</label>
                            <div class="col-md-8">
                                <p class="form-control-static"> {{$cliente->nombre}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">Alias:</label>
                            <div class="col-md-9">
                                <p class="form-control-static"> {{$cliente->alias}} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-4">RFC:</label>
                            <div class="col-md-8">
                                <p class="form-control-static"> {{$cliente->rfc}} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-4">Descripción:</label>
                            <div class="col-md-8">
                                <p class="form-control-static"> {{$cliente->descripcion}} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Contactos</h4>
				<hr>
			</div>
		</div>
	</div>
</div>

@endsection