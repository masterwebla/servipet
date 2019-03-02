<div class="form-group">
	<label for="nombre">Nombre</label>
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa nombre...','required'=>'required'])!!}
</div>
<div class="form-group">
	<label for="descripcion">Descripcion</label>
	{!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa descripcion...','required'=>'required'])!!}
</div>
<div class="form-group">
	<label for="precio">Precio</label>
	{!!Form::number('precio',null,['class'=>'form-control','placeholder'=>'Ingresa precio...','required'=>'required'])!!}
</div>
<div class="form-group">
	<label for="cantidad">Cantidad</label>
	{!!Form::number('cantidad',null,['class'=>'form-control','placeholder'=>'Ingresa cantidad...','required'=>'required'])!!}
</div>
<div class="form-group">
	<label for="tipo">Tipo de Producto</label>
	{!!Form::select('tipo_id',$tipos,null,['class'=>'form-control','placeholder'=>'Seleccionar tipo de producto...','required'=>'required'])!!}
</div>
<div class="form-group">
	<label for="animal">Tipo de Animal</label>
	{!!Form::select('animal_id',$animales,null,['class'=>'form-control','placeholder'=>'Seleccionar tipo de animal...'])!!}
</div>
<div class="form-group">
	<label for="estado">Estado</label>
	{!!Form::select('estado_id',$estados,null,['class'=>'form-control','placeholder'=>'Seleccionar estado...'])!!}
</div>
<div class="form-group">
	<a href="{{ route('productos.index') }}" class="btn btn-danger">Cancelar</a>
	<button type="submit" class="btn btn-success">Guardar <i class="fa fa-save"></i></button>
</div>