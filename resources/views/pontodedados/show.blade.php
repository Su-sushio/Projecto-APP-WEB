@extends('layouts.app')

@section('content')

    
<div class="container">

<h1>{{$datapoint['name'] }}</h1>

	<form method="POST" >
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<textarea name="name" name="name"
					class="form-control" id="name" >{{$datapoint['name']}}</textarea>   
		</div>
		<div class="form-group">
			<label for="type">Tipo</label>
			<textarea name="type" name="type"
					class="form-control" id="type" >{{$datapoint['type']}}</textarea>
		</div>
		
		<div class="form-group">
			<button type="submit" 
					class="btn btn-primary">Atualizar</button>
		</div>
	</form>
</div>

@endsection