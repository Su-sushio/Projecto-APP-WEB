@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Novo Produto </h1>
	<form method="POST" action="{{route('product.store')}}">
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
			<label for="name">Marca</label>
			<input type="text" name="marca"
				   id="marca" class="form-control">
				   <div class="form-group">
		</div>
		<div class="form~group">
			<label for="name">Modelo</label>
			<input type="text" name="modelo"
				   id="modelo" class="form-control">
				   <div class="form-group">
		</div>
		<div class="form~group">
			<label for="name">Preço</label>
			<input type="text" name="preço"
				   id="preço" class="form-control">
				   <div class="form-group">
		</div>

		<div class="form~group">
			<label for="name">Link</label>
			<input type="text" name="link"
				   id="link" class="form-control">
				   <div class="form-group">
		</div>

		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

</div>
@endsection