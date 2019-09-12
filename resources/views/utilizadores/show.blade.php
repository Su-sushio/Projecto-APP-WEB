@extends('layouts.app')

@section('content')

    
<div class="container">

<h1>{{$utilizadores['name'] }}</h1>

	<form method="POST">
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<textarea name="name" name="name"
					class="form-control" id="name" >{{$utilizadores['name']}}</textarea>   
		</div>
		<div class="form-group">
			<label for="email">E-mail</label>
			<textarea name="email" name="email"
					class="form-control" id="email" >{{$utilizadores['email']}}</textarea>
		</div>
		
		<div class="form-group">
			<button type="submit" 
					class="btn btn-primary">Atualizar</button>
		</div>
	</form>
</div>

@endsection