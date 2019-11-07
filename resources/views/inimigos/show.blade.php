@extends('layouts.app')

@section('content')

<div class="container">
	
		<div>
			<h1>Inimigos</h1>
	 	</div>

		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Tipo de Inimigo</th>					
				</tr>
			</thead>
            <tbody>
           
				<tr>
					<td>{{$inimigo['nome']}}</td>
					<td>{{$inimigo['tipo_inimigo']}}</td>					
				</tr>
           
            </tbody>            
        </table>    
</div>            


@endsection