@extends('layouts.app')

@section('content')
<div class="container">
	<h1>{{ $product['name'] }}</h1>

	<form method="POST" >
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" 
				   class="form-control"
				   id="name" value="{{$product['name']}}">
		</div>
		<div class="form-group">
			<label for="notes">Notas</label>
			<textarea name="notes"
				   id="notes" class="form-control">{{$product['notes']}}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" 
					class="btn btn-primary">Atualizar</button>
		</div>
	</form>


	<div>
		<h2>Produto</h2>
		<ul>
			@foreach ($product['product'] as $product)
			<li> 
				<a href="#">{{$product['name']}} </a>
			</li>
			@endforeach
		</ul>
	</div>
</div>
@endsection
