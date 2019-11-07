@extends('layouts.app')

@section('content')

{{$search}}

<div class="container">

        <table class="table">
            <tr>
                <td>
                   <div class="container">
                        <h1>Culturas</h1>   
                   </div>
                </td>                           
                                       
                        <form action="{{ route('variedades.index') }}" method="post">
                                {{ csrf_field() }}
                <td>                                           
                        <input type="search" class="form-control input-sm" name="search" value="{{ $search }}"placeholder="Encontre a cultura" >
                            
                </td>                       
                <td>                        
                        <button type="submit" class="btn btn-primary btn-sm" title="Pesquisar">Pesquisar 
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>                                       
                        </form>
                                                         
                </td>
            </tr>
        </table>

		<table class="table">
			<thead>
				<tr>                    
					<th>
                        <div class="container">
                            Cultura 
                        </div>
                    </th>
                    <th>                   
                        <div class="container">
					        Nome
                        </div>
                    </th>
                    <th colspan='2'>                   
                        <div class="container">
                            Tipo de Variedade
                        </div>
                    </th>					
				</tr>
			</thead>
            <tbody>
            @foreach($variedades as $variedade)
				<tr>                   
					<td>
                        <div class="container">
                            {{$variedade['cultura']['nome']}}                           
                        </div>
                    </td>               
                    <td>
                        <div class="container">
                            {{$variedade['nome']}}
                        </div>
                    </td>
                    <td>
                        <div class="container">                                                         
                                @if ($variedade['tipo']=='T')
	                                Tinto
                                @elseif ($variedade['tipo']=='B')
                                    Branco
                                @elseif ($variedade['tipo']=='R')
                                    Rosé
                                @else
                                    {{$variedade['tipo']}}
                                @endif
                        </div>
                    </td>
                    <td>                       
                        <div class="container">
						    <a href="{{route('culturas.inimigos',$variedade)}}" class="btn btn-primary btn-sm">Ver doenças/pragas</a>
					    </div>
                    </td>					
				</tr> 
            @endforeach
            </tbody>            
        </table>
        

        {{$variedades->appends(['search' => $search])->links()}}
      

       
</div>            


@endsection

 