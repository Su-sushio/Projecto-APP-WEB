@extends('layouts.app')

@section('content')



<div class="container">
       
                        <h1>Inimigos</h1>   
                
			<table class="table">
			<thead>
				<tr>                    
					<th>
                        <div class="container">
                            Nome 
                        </div>
                    </th>
                    <th colspan="3">                  
                        <div class="container">
					        Espécies
                        </div>
                    </th>                   			
				</tr>
			</thead>
            <tbody>
             @foreach($inimigos as $inimigo)
				<tr>                   
					<td>
                        <div class="container">
                            {{$inimigo['nome']}}                    
                        </div>
                    </td>               
                    <td>
                        <div class="container">
                            {{$inimigo}['tipo_inimigo']}    
                        </div>
                    </td>
                    <td>
                        <div class="container">                                                         
                                
                        </div>
                    </td>
                    <td>                       
                       
                    </td>					
				</tr> 
            @endforeach
            </tbody>            
        </table>
   

       
</div>            


@endsection
