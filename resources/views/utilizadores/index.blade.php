@extends('layouts.app')

@section('content')



<div class="container">
<div>
		<h1>Lista de Utilizadores</h1>
</div>
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th colspan="5">E-mail</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($utilizadores as $utilizador)
			<tr>
				<td>{{$utilizador['name']}}</td>
				<td>{{$utilizador['email']}}</td>
				<td><a href="{{route('utilizadores.edit', $utilizador)}}" class="btn btn-primary btn-sm">Actualizar</a></td>
				<td>
					<form method="POST" action="{{route('utilizadores.destroy', $utilizador)}}"> 
					@method('DELETE')
					@csrf()
					<button type="submit"
					onclick="return confirm('Tem a certeza que pretende eliminar este usuário?')"
					class="btn btn-primary btn-sm">Apagar</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $utilizadores->links() }}

@endsection