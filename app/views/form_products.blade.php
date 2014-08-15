@extends ('layout')
@section('title') Products @stop

@section('content')

<div id="col_1_cp">



<h2>Create Products</h2>
 
{{ Form::open(array('action' => 'ProductsController@store')) }}


	<li><input class="form" id="tipo" placeholder="Tipo" type ="text" name ="tipo"></li>
 
	<li><input class="form" id="caracteristica" placeholder="Caracteristica" type ="text" name ="caracteristica"></li>
  

	<li><input class="form" id="imagen" placeholder="Imagen" type ="text" name ="imagen">
	<li><input class="form" id="imagen_1" placeholder="Imagen" type ="text" name ="imagen_1"></li>
	<li><input class="form" id="imagen_2" placeholder="Imagen" type ="text" name ="imagen_2"></li>
	<li><input class="form" id="imagen_3" placeholder="Imagen" type ="text" name ="imagen_3"></li>



<li>{{Form::button('Crear',array('type'=>'submit','class'=>'btn')) }}</li>

{{ Form::close() }}

</div>

<div id="col_2_cp">

<h2>Arrastrar las imagenes a la caja de texto</h2>



{{ Form::open(array('url' => '/fileform','files'=>true)) }}


        {{Form::label('myfile', 'My file') }}
		{{Form::file('myfile',null,array('class'=>'form')) }}

{{ Form::button('Upload',array('type'=>'submit','class'=>'btn')) }}

{{ Form::close() }}


@foreach ($files as $file)


         <img src="/assets/img/{{substr($file, 43, 20)}}" height="100" width="100"  alt="...">

        

@endforeach




</div>


@stop