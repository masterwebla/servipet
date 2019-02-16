@extends('admin.template')
@section('contenido')

	<div class="container">
		<h1>Tipos de Productos</h1>
		<table class="table table-hover">
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
						<td>Editar</td>
						<td>Borrar</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>		
@endsection