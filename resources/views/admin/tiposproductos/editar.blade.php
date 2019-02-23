@extends('admin.template')
@section('contenido')
	<div class="container">
		<h1 class="text-center">Editar {{$tipoproducto->nombre}}</h1>
		@include('admin.secciones.errores')
		<form action="{{route('tiposproductos.update',$tipoproducto->id)}}" method="post">
			<!-- crsf es el token de laravel -->
			@csrf
			<input type="hidden" name="_method" value="put">
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="nombre" class="form-control" required value="{{$tipoproducto->nombre}}">
			</div>
			<div class="text-center">
				<a class="btn btn-danger" href="{{route('tiposproductos.index')}}">Cancelar</a>
				<button type="submit" class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
			</div>				
		</form>
	</div>
@endsection