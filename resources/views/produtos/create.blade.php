@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Novo Produto </h1>
	<form method="POST" action="{{route('produtos.store')}}">
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
				   id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="notes">Notas</label>
			<textarea name="notes"
				   id="notes" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="state">Estado</label>
			<input type="text" name="state"
				   id="state" class="form-control">
				   <div class="form-group">
		</div>

		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

</div>
@endsection