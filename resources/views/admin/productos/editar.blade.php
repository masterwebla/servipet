@extends('admin.template')
@section('contenido')
	<div class="container">
		<h1 class="text-center">Editar Producto {{$producto->nombre}}</h1>
		{!!Form::model($producto,['route'=>['productos.update',$producto->id],'method'=>'put'])!!}
			@include('admin.productos.form')
		{!!Form::close()!!}
	</div>
@endsection