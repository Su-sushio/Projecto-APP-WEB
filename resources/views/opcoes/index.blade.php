@extends('layouts.app')

@section('content')



 <!-- esta função serve para mostrar a lista das opções apesar de ainda não haver nenhuma criada  -->
@if( sizeof($opcoes) )
    {{$ref_ant = $opcoes[0]->referencia}}  
@endif


<div class="container">
    <div>
            <h1>Lista de Opções</h1>
    </div>
	<table class="table">
		<thead>
			<tr>
            
            </tr>
		</thead>
		<tbody>
			
			<tr>
            @foreach($opcoes as $opcao)

                @if($opcao->referencia!=$ref_ant)

                </tr><tr>

                @endif

               
                @if($ref_ant = $opcao->referencia)

                <td>{{$opcao['value']}}</td>
               
                @endif
             
            @endforeach
			</tr>
			
		</tbody>
	</table>
</div>


@endsection