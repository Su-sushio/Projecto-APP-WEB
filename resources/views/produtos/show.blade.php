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
</div><br><br><br>

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
</div><br><br><br><br>


<div>
<div class="container">
<div>
		<h1>Opções</h1>
</div>
<table class="table">
		<thead>
			<tr>
			@foreach($product->datapoints as $pontodedado)
				<th>{{$pontodedado['name']}}</th>
			@endforeach
				<th>Link</th>
				<th>Fotos</th>
			</tr >
		</thead>
		<tbody>
		<form method="POST" action="{{route('produtos.opcoes',$product)}}">
			<tr>
			@foreach($product->datapoints as $pontodedado)
				<td>
					<div class="form-group">
						<input type="text" name="name" id="name" class="form-control">
					</div>
				</td>
			@endforeach
				<td>
					<div class="form-group">
						<input type="link" name="link" id="link" class="form-control">
					</div>
				</td>
				<td>
					<div class="form-group">
						<input type="image" name="image" id="image" class="form-control">
					</div>
				</td>
			</tr>
			<tr>
				<td>
			<div>
				<a href="" class="btn btn-primary">Criar Nova Opção</a>
			</div>
				</td>
			</tr>
		</form>		
		</tbody>
</table>
</div>

@endsection

