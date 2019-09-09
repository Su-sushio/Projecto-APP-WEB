@extends('layouts.app')

@section('content')



<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Tipo</th>
			</tr>
		</thead>
		<tbody>
		@foreach($pontodedados as $pontodedado)
			<tr>
				<td>{{$pontodedado['name']}}</td>
				<td>{{$pontodedado['type']}}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection
