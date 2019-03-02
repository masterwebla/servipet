@extends('admin.template')
@section('contenido')
	<div class="container">
		<h1 class="text-center">Listado de Productos <a class="btn btn-success" href="{{ route('productos.create') }}"><i class="fa fa-plus"></i></a></h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
					<tr>
						<td>{{$producto->nombre}}</td>
						<td>{{$producto->descripcion}}</td>
						<td>${{number_format($producto->precio,0)}}</td>
						<td>{{$producto->cantidad}}</td>
						<td>
							
							{!!Form::open(['route'=>['productos.destroy',$producto->id],'method'=>'delete'])!!}
								<a class="btn btn-primary" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-edit"></i></a>
								<a class="btn btn-warning" href="#"><i class="fa fa-image"></i></a>
								<button class="btn btn-danger" onclick="confirm('Desea borrar el producto?')"><i class="fa fa-trash"></i></button>
							{!!Form::close()!!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection