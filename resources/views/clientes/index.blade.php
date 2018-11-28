@extends('layout.layout')
@section('content')

@if (Session::has('message'))
	<div class="alert alert-info">
		{{ Session::get('message') }}
	</div>
@endif

<div class="row">
	<div class="col-lg-12">
		<div class="card card-outline-inverse">
			<div class="card-header">
				<h4 class="float-left m-b-0 text-white"><i class="mdi mdi-account-multiple"></i> Clientes</h4>
				<a href="{{ route('clientes.create') }}" class="float-right btn btn-sm btn-rounded btn-success txt-blanco"><i class="mdi mdi-plus"></i> Agregar equipo</a>
			</div>
			<div class="card-body">
				<h4>Clientes actuales</h4>
			</div>
		</div>
	</div>
</div>

<div class="row">
	@if($clientes->count())
	@foreach($clientes as $cliente)
	<div class="col-lg-3 col-md-6">
		<div class="card text-center">
			<img class="card-img-top img-responsive" src="/Material/assets/images/big/mac.jpg" alt="Card image cap">
			<div class="card-body">
				<a href="{{ route('clientes.show', $cliente->idcliente) }}"><h4 class="card-title">{{$cliente->nombre}}</h4></a>
				<p class="card-text">{{$cliente->alias}}</p>
				<p class="card-text">{{$cliente->rfc}}</p>
				<p class="card-text">{{$cliente->descipcion}}</p>
				<a href="#" class="btn btn-info"><i class="mdi mdi-monitor" title="Equipos"></i></a>
				<a href="{{ route('clientes.edit', $cliente->idcliente) }}" class="btn btn-success" title="Editar"><i class="mdi mdi-pencil"></i></a>
				<form action="{{ route('clientes.destroy', $cliente->idcliente) }}" method="POST" class="formwit">
					@csrf
					@method('DELETE')
					<button class="btn btn-danger" title="Eliminar" id="eliminar" type="submit"><i class="mdi mdi-delete"></i></button>
				</form>
			</div>
		</div>
	</div>
	@endforeach
	@else
	<div class="col-lg-12 col-md-12">
		<div class="card text-center">
			<div class="card-body">
				<h1 class="card-title">No tienes clientes registrados.</h1>
			</div>
		</div>
	</div>
	@endif

	<div class="col-lg-12 col-md-12">
		{{$clientes->links()}}
	</div>
		
</div>

@endsection