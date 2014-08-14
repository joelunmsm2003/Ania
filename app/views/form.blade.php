@extends ('layout')
@section('title') Create @stop

@section('content')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
      <link href="http://fonts.googleapis.com/css?family=Dosis" type="text/css" rel="stylesheet" /> 
<h1>Registrarse</h1>
 



{{ Form::open(array('action' => 'UsersController@store')) }}



	<input class="form" id="name" placeholder="name" type ="text" name ="name">
 
	<input class="form" id="email" placeholder="Email" type ="text" name ="email">
  

	<input class="form" id="password" placeholder="Contraseña" type ="password" name ="password">
	




{{Form::button('Registrar',array('type'=>'submit','class'=>'btn')) }}

{{ Form::close() }}
@stop