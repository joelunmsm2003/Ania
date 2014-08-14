@extends ('layout')
@section('title') Create @stop

@section('content')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
      <link href="http://fonts.googleapis.com/css?family=Dosis" type="text/css" rel="stylesheet" /> 
<h1>Subir Imagenes</h1>
 



{{ Form::open(array('url' => '/fileform','files'=>true)) }}


        {{Form::label('myfile', 'My file') }}
		{{Form::file('myfile',null,array('class'=>'form')) }}

{{ Form::button('Registrar',array('type'=>'submit','class'=>'btn')) }}

{{ Form::close() }}




@stop





