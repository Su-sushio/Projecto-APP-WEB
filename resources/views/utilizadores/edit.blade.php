@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Editar Utilizador </h1>
	<form method="POST" action="{{route('utilizadores.update', $utilizador)}}">
		@csrf()
		@method('PUT')
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
				   id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">E-mail</label>
			<textarea name="email"
				   id="email" class="form-control"></textarea>
		<br>
		<button type="submit" class="btn btn-primary">Guardar Dados</button>
	</form>

</div>
@endsection
