@extends('layouts.app')

@section('content')
<div class="container">
	<h1> Ponto de Dados</h1>
	<form method="POST" action="{{route('produtos.store')}}">
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
				   id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="type">Tipo</label>
			<textarea name="type"
				   id="type" class="form-control"></textarea>
		

		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

</div>
@endsection
