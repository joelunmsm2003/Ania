@extends ('layout')
@section('title') Lista de Users @stop

@section('content')

<p>
	Nombre: {{$products->tipo}}
</p>

<h2>Editar</h2>
 
{{ Form::open(array('action' => array('ProductsController@update', $products->id),'method'=>'PUT' )) }}


		{{Form::text('tipo',null,array('placeholder'=>'Tipo','class'=>'form')) }}


		{{Form::text('caracteristica',null,array('placeholder'=>'Caeacterisitica','class'=>'form')) }}


		{{Form::text('imagen',null,array('placeholder'=>'Imagen','class'=>'form')) }}


		{{Form::text('imagen_1',null,array('placeholder'=>'Imagen','class'=>'form')) }}

		{{Form::text('imagen_2',null,array('placeholder'=>'Imagen','class'=>'form')) }}



		{{Form::text('imagen_3',null,array('placeholder'=>'Imagen','class'=>'form')) }}

{{Form::button('Actualizar',array('type'=>'submit','class'=>'btn btn-primary')) }}

{{ Form::close() }}

<p><a href="/products" class="btn btn-primary">Return</a></p>
@stop