@extends ('layout')
@section('title') Lista de Users @stop

@section('content')

<h2>
Lista de Usuarios
</h2>

<table class="table table-striped">
<tr>
	<th>Name</th>
	<th>Email</th>

</tr>
@foreach ($users as $user)
	<tr>
		<td>
		{{$user->name}}
		</td>
		<td>
			{{$user->email}}
		</td>
		<td>
			{{$user->password}}
		</td>
	</tr>

@endforeach
</table>

<p><a href="/users/create" class="btn btn-primary">Create</a></p>
@stop