@extends('layouts.app')

@section('content')

<div class="container">
<div>
		<h1>Produto</h1>
</div>
	
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
			<label for="state">Estado</label>
			<select name="state" id="state" class="form-control">{{$product['state']}}>
  				<option value="Em Curso">Em Curso</option>
  				<option value="Terminado">Terminado</option>
  			</select>
		</div>
		<div class="form-group">
			<button type="submit" 
					class="btn btn-primary">Atualizar</button>
		</div>
	</form>
</div>

<div class="container">
<div>
		<h1>Ponto de Dados</h1>
</div>
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Tipo</th>
				<th  colspan ="3"></th>
			</tr >
		</thead>
		<tbody>
		@foreach($product->datapoints as $pontodedado)
			<tr>
				<td>{{$pontodedado['name']}}</td>
				<td>{{$pontodedado['type']}}</td>
				<td><a href="{{route('pontodedados.show', $pontodedado)}}" class="btn btn-primary">Ver</button></td>
				<td><form method="POST" action="{{route('pontodedados.destroy', $pontodedado)}}"> 
					@method('DELETE')
					@csrf()
					<button type="submit"
					onclick="return confirm('Tem a certeza que pretende eliminar?')"
					class="btn btn-primary btn-sm">Apagar</button>
					</form></td>
			</tr>
		@endforeach
		</tbody>
	</table>

<div>
	<a href="{{route('produtos.pontodedados.create',$product)}}" class="btn btn-primary">Criar Ponto de Dados</a>
</div><br>


<div>
<div class="container">
<div>
		<h1>Opções</h1>
</div>
<table class="table">
		<thead>
			<tr>
			@foreach($product->datapoints as $pontodedado)
				<td>{{$pontodedado['name']}}</td>
			@endforeach
			</tr >
		</thead>
		<tbody>
		
			<tr>
			@foreach($product->datapoints as $pontodedado)
				<td></td>
			@endforeach
			</tr>
		</tbody>
</table>
</div>
</div>
<div>
	<a href="" class="btn btn-primary">Criar Nova Opção</a>
</div>
@endsection
