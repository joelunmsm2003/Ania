@extends ('layout')
@section('title') Login @stop

@section('content')

<h2>Login</h2>
 



<form action='login' method='post'>

	<input class="form" id="username" placeholder="Email" type ="text" name ="email">
	

	<input class="form" id="password" placeholder="Contraseña" type ="password" name ="password">

<input class="btn btn-block btn-primary btn-default" value="Acceder" type="submit"> <br>
<p><a href="/users/create" class="btn btn-primary">Create</a></p>



</form>


@stop