@extends('layouts.app')

@section('content')



<div class="container">
	
		<div>
			<h1>Fertilizantes</h1>
	 	</div>

		<table class="table">
			<thead>
				<tr>                    
					<th>
                        <div class="container">
                            Nome Comercial 
                        </div>
                    </th>
                    <th>                   
                        <div class="container">
					        Distribuidor
                        </div>
                    </th>
                    <th>                   
                        <div class="container">
					        Tipo de Produto
                        </div>
                    </th>
                    <th>                   
                        <div class="container">
					        Formulação
                        </div>
                    </th>					
				
                    <th colspan="3">                   
                        <div class="container">
					        Modo de Acção
                        </div>
                    </th>
                </tr>
			</thead>
            <tbody>
            @foreach($adubos as $adubo)
				<tr>                   
					<td>
                        <div class="container">
                            {{$adubo->nome_comercial}}
                        </div>
                    </td>               
                    <td>
                        <div class="container">
                            {{$adubo->empresa?$adubo->empresa->nome:"N/A"}}
                        </div>
                    </td>
                    <td>                       
                        <div class="container">
                            {{$adubo->tipo_produto}}
					    </div>
                    </td>
                    <td>                       
                        <div class="container">
                            {{$adubo->formulacao}}
					    </div>
                    </td>
                    <td>                       
                        <div class="container">
                            {{$adubo->modo_accao}}
					    </div>
                    </td>
                    <td>
                    <form method="POST" 
						  action="{{route('adubos.destroy',$adubo)}}">
						@method('DELETE')
						@csrf()
						<button type="submit" 
								onclick="return confirm('Tem a certeza que pretende apagar este emprego')"
								class="btn btn-primary btn-sm" >Apagar</button>
					</form>
                    </td>						
				</tr> 
            @endforeach
            </tbody>            
        </table>
        <form method="POST" action="{{route('adubos.store')}}">
        @csrf()
        <table class="table">           
                <tr>             
                    <td>    
                        <div class="">
						    <input type="text" name="nome_comercial" class="form-control" style="width: 150px">
					    </div> 
                    </td>
                    <td>
                    <td>     
                        <div  class="">                           
						<select name="distribuidor_id" class="form-control" style="width: 150px">
                        @foreach($empresas as $empresa)
                          <option value="{{$empresa['id']}}">{{$empresa['nome']}}</option>
                        @endforeach
                         </select>              
					    </div> 
                    </td>
                    <td>    
                        <div class="">
						    <input type="text" name="tipo_produto" class="form-control" style="width: 100px">
					    </div> 
                    </td>
                    <td> 
                        <div  class="">
                            <select name="formulacao" class="form-control">
                                <option value="líquido">Líquido</option>
                                <option value="pó">Pó</option>
                                <option value="grânulos">Grânulos</option>
                                <option value="cristais solúveis">Cristais solúveis</option>
                                <option value="gel">Gel</option>
                                <option value="outro">Outro</option>
                            <select>
					    </div>                      
                    </td>
                    <td>    
                        <div class="">
						    <input type="text" style="align-left" name="modo_accao" class="form-control" style="width: 100px">
					    </div> 
                    </td>
                    <td>    
                        <div class="">
						    
					    </div> 
                    </td>                                             
                </tr>           
        </table>        
        <div>
        <button type="submit" class="btn btn-primary">Novo Registo</a>      
        </form>
        </div><br>


        {{$adubos->links()}}

@endsection

 

  
 