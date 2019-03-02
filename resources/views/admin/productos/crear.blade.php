@extends('admin.template')
@section('contenido')
	<div class="container">
		<h1 class="text-center">Crear Producto</h1>
		@include('admin.secciones.errores')
		{!!Form::open(['route'=>'productos.store','method'=>'post'])!!}
			@include('admin.productos.form')
		{!!Form::close()!!}
	</div>
@endsection