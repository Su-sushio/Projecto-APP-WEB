@extends('layouts.app')

@section('content')

{{$ref_ant = $opcoes[0]->referencia}}


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