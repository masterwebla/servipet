@extends('admin.template')

@section('contenido')
	<div class="container">
		<h1>Crear un nuevo Tipo de Producto</h1>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form action="{{route('tiposproductos.store')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" name="nombre" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Guardar <i class="fa fa-save"></i></button>
		</form>
	</div>
@endsection