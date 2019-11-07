@extends('layouts.app')

@section('content')



<div class="container">
	
		<div>
			<h1>Inimigos</h1>
	 	</div>

		<table class="table">
			<thead>
				<tr>                    
					<th>
                        <div class="container">
                            Nome 
                        </div>
                    </th>
                    <th colspan="2">                   
                        <div class="container">
					        Tipo de Inimigo
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
                            {{$inimigo['tipo_inimigo']}}
                        </div>
                    </td>
                    <td>                       
                        <div class="container">
						    <a href="{{route('inimigos.show',$inimigo)}}" class="btn btn-primary btn-sm">Ver</a>
					    </div>
                    </td>					
				</tr> 
            @endforeach
            </tbody>            
        </table>
        <form method="POST" action="{{route('inimigos.store')}}">
        @csrf()
        <table class="table">           
                <tr>             
                    <td>    
                        <div class="container">
						    <input type="text" name="nome" id="nome" class="form-control">
					    </div> 
                    </td>
                    <td>    
                        <div  class="container">
						<select name="tipo_inimigo" id="tipo_inimigo" class="form-control">
                            <option value="Fungos">Fungos</option>
                            <option value="Insectos">Insectos</option>
                            <option value="Ácaros">Ácaros</option>
                            <option value="Infestantes folha larga">Infestantes folha larga</option>
                            <option value="Infestantes folha estreita">Infestantes folha estreita</option>
                            <option value="Arbustivo">Arbustivo</option>
                            <option value="Bactérias">Bactérias</option>
                            <option value="Virus">Virus</option>
                            <option value="Carência Nutricional">Carência Nutricional</option>
  			            </select>
					    </div> 
                    </td>                         
                </tr>           
        </table>        
        <div>
        <button type="submit" class="btn btn-primary">Criar Inimigo</a>      
        </form>
        </div><br>


        {{$inimigos->links()}}

       
</div>            


@endsection