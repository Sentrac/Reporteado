@extends('layout.layout')
@section('content')

<div class="Row">
	<div class="col-lg-12">
		<div class="card card-outline-inverse">
		  <div class="card-header">
		    <h4 class="m-b-0 text-white">Editar Cliente</h4>
		  </div>
		  <div class="card-body">

		  	@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
		    <form method="POST" action="{{ route('clientes.update',$cliente->idcliente) }}" class="form-horizontal form-bordered" role="form">
		    @csrf
		    @method('PUT')
		      <div class="form-body">
		        <h4 class="card-title">Datos</h4>
		        <hr>
		        <div class="form-group row">
		          <label class="control-label text-center col-md-2">Nombre</label>
		          <div class="col-md-9">
		            <input type="text" placeholder="Nombre completo" class="form-control" id="nombre" name="nombre" value="{{$cliente->nombre}}">
		            <small class="form-control-feedback"> </small>
		          </div>
		        </div>
		        <div class="form-group row">
		          <label class="control-label text-center col-md-2">Nombre (<small>Alias</small>)</label>
		          <div class="col-md-9">
		            <input type="text" placeholder="Alias" class="form-control" id="alias" name="alias" value="{{$cliente->alias}}">
		            <small class="form-control-feedback"> </small>
		          </div>
		        </div>
		        <div class="form-group row">
		          <label class="control-label text-center col-md-2">RFC</label>
		          <div class="col-md-9">
		            <input type="text" placeholder="RFC" class="form-control" id="rfc" name="rfc" value="{{$cliente->rfc}}">
		            <small class="form-control-feedback">Ejemplo: POI1624345QWE</small>
		          </div>
		        </div>
		        <div class="form-group row">
		          <label class="control-label text-center col-md-2">Descripción</label>
		          <div class="col-md-9">
		            <textarea rows="5" placeholder="Descripción" class="form-control" id="descripcion" name="descripcion">{{$cliente->descripcion}}</textarea>
		            <small class="form-control-feedback"> </small>
		          </div>
		        </div>
		        <!--<h3 class="card-title">Contacto</h3>
		        <hr>
		        <div class="form-group row">
		          <label class="control-label text-center col-md-2">Nombre</label>
		          <div class="col-md-9">
		            <input type="text" placeholder="Nombre completo" class="form-control">
		            <small class="form-control-feedback"> </small>
		          </div>
		        </div>
		        <div class="form-group row">
		          <label class="control-label text-center col-md-2">Número</label>
		          <div class="col-md-9">
		            <input type="number" placeholder="Número telefónico" class="form-control">
		            <small class="form-control-feedback"> </small>
		          </div>
		        </div>
		        <div class="form-group row">
		          <label class="control-label text-center col-md-2">Correo</label>
		          <div class="col-md-9">
		            <input type="email" placeholder="Correo" class="form-control">
		            <small class="form-control-feedback"> </small>
		          </div>
		        </div>
		      </div>-->
		      <div class="form-actions">
		        <div class="row">
		          <div class="col-md-12">
		            <div class="row">
		              <div class="offset-sm-4 col-md-8">
		                <button type="submit" class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
		                <a href="{{ route('clientes.index') }}" type="button" class="btn btn-inverse"> <i class="mdi mdi-close-circle"></i> Cancel</a>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </form>
		  </div>
		</div>
	</div>
</div>

@endsection