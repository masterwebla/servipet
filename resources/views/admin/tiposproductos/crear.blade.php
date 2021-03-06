@extends('admin.template')

@section('contenido')
	<div class="container">
		<h1>Crear un nuevo Tipo de Producto</h1>
		@include('admin.secciones.errores')
		<form action="{{route('tiposproductos.store')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="nombre" class="form-control" required>
			</div>
			<div class="text-center">
				<a class="btn btn-danger" href="{{route('tiposproductos.index')}}">Cancelar</a>
				<button type="submit" class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
			</div>				
		</form>
	</div>
@endsection