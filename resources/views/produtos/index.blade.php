@extends('layouts.app')

@section('content')



<div class="container">
<div>
		<h1>Lista de Produtos</h1>
</div>
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Notas</th>
				<th colspan="5">Estado</th>
			</tr>
		</thead>
		<tbody>
			@foreach($produtos as $produto)
			<tr>
				<td>{{$produto['name']}}</td>
				<td>{{$produto['notes']}}</td>
				<td>{{$produto['state']}}</td>
				<td><a href="{{route('produtos.show', $produto)}}" class="btn btn-primary btn-sm">Ver</a></td>
				<td>
					<form method="POST" action="{{route('produtos.destroy', $produto)}}"> 
					@method('DELETE')
					@csrf()
					<button type="submit"
					onclick="return confirm('Tem a certeza que pretende eliminar este produto')"
					class="btn btn-primary btn-sm">Apagar</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
{{$produtos->links()}}
<div>
	<a href="{{route('produtos.create')}}" class="btn btn-primary">Criar Produto</a>
</div>


@endsection

