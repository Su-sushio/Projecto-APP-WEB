@extends('layouts.app')

@section('content')

<div class="container">
    <div>
            <h1>Lista de Opções</h1>
    </div>
	<table class="table">
		<thead>
			<tr>
            <th>Opções</th>
            </tr>
		</thead>
		<tbody>
			@foreach($opcoes as $opcao)
			<tr>
				<td>{{$opcao['value']}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@endsection