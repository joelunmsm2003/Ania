@extends ('layout')
@section('title') Products @stop

@section('content')

<h2>Create Products</h2>
 
{{ Form::open(array('action' => 'ProductsController@store')) }}


	<input class="form" id="tipo" placeholder="Tipo" type ="text" name ="tipo">
 
	<input class="form" id="caracteristica" placeholder="Caracteristica" type ="text" name ="caracteristica">
  

	<input class="form" id="imagen" placeholder="Imagen" type ="text" name ="imagen">
	<input class="form" id="imagen_1" placeholder="Imagen" type ="text" name ="imagen_1">
	<input class="form" id="imagen_2" placeholder="Imagen" type ="text" name ="imagen_2">
	<input class="form" id="imagen_3" placeholder="Imagen" type ="text" name ="imagen_3">



{{Form::button('Crear',array('type'=>'submit','class'=>'btn')) }}

{{ Form::close() }}



@stop