@extends('admin.template')
@section('contenido')

	<div class="container">
		<h1>Tipos de Productos <a class="btn btn-success" href="{{route('tiposproductos.create')}}"><i class="fa fa-plus"></i></a></h1>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fecha</th>
					<th>Editar</th>
					<th>Borrar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tipos as $tipo)
					<tr>
						<td>{{$tipo->nombre}}</td>
						<td>{{$tipo->created_at}}</td>
						<td><a class="btn btn-warning" href="#"><i class="fa fa-edit"></i></a></td>
						<td><a class="btn btn-danger" href="#"><i class="fa fa-trash"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>		
@endsection