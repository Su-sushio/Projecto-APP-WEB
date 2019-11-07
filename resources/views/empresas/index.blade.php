@extends('layouts.app')

@section('content')



<div class="container">
	
<table class="table">
            <tr>
                <td>
                   <div class="container">
                        <h1>Empresas</h1>   
                   </div>
                </td>
                
                
                      
                    
                        <form action="{{ route('empresas.index') }}" method="post">
                                {{ csrf_field() }}
                <td>                                           
                        <input type="search" class="form-control input-sm" name="search" value="{{ $search }}"placeholder="Encontre a empresa" >
                            
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
					<th colspan="2">
                        <div class="container">
                            Nome
                        </div>
                    </th>
                </tr>
			</thead>
            <tbody>
            @foreach($empresas as $empresa)
				<tr>                   
					<td>
                        <div class="container">
                            {{$empresa['nome']}}
                        </div>
                    </td>
                    <td>
                    <form method="POST" 
						  action="{{route('empresas.destroy',$empresa)}}">
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
        <form method="POST" action="{{route('empresas.store')}}">
        @csrf()
        <table class="table">           
                <tr>             
                    <td>    
                        <div class="form-group">
						    <input type="text" name="nome" class="form-control">
					    </div> 
                    </td>                                                       
                </tr>           
        </table>        
        <div>
        <button type="submit" class="btn btn-primary">Novo Registo</a>      
        </form>
        </div><br>


        {{ $empresas->appends(['search' => $search])->links() }}
       
</div>            


@endsection