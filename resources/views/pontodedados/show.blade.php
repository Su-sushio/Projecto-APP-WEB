@extends('layouts.app')

@section('content')



<div class="container">
	<h1>{{ $dados['name'] }}</h1>

	<form method="POST" >
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" 
				   class="form-control"
				   id="name" value="{{$dados['name']}}">
		</div>
		<div class="form-group">
			<label for="type">Tipo</label>
			<input type="text" name="type" 
				   class="form-control"
				   id="type" value="{{$dados['type']}}>
		</div>
		
		<div class="form-group">
			<button type="submit" 
					class="btn btn-primary">Atualizar</button>
		</div>
	</form>
    @endsection
    
