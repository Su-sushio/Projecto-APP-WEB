@extends('layouts.app')

@section('content')



<div class="container">
	
		<div>
			<h1>Culturas</h1>
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
					        Espécie
                        </div>
                    </th>					
				</tr>
			</thead>
            <tbody>
            @foreach($culturas as $cultura)
				<tr>                   
					<td>
                        <div class="container">
                            {{$cultura['nome']}}
                        </div>
                    </td>               
                    <td>
                        <div class="container">
                           <i> {{$cultura['nome_cientifico']}}</i>
                        </div>
                    </td>
                    <td>                       
                        <div class="container">
						    <a href="" class="btn btn-primary btn-sm">Ver</a>
					    </div>
                    </td>					
				</tr> 
            @endforeach
            </tbody>            
        </table>
        <form method="POST" action="{{route('culturas.store')}}">
        @csrf()
        <table class="table">           
                <tr>             
                    <td>    
                        <div class="container">
						    <input type="text" name="nome" id="nome" class="form-control">
					    </div> 
                    </td>
                    <td>    
                        <div class="container">
						    <input type="text" name="nome_cientifico" id="nome_cientifico" class="form-control">
					    </div> 
                    </td>                         
                </tr>           
        </table>        
        <div>
        <button type="submit" class="btn btn-primary">Inserir Nova Cultura</a>      
        </form>
        </div><br>


        {{$culturas->links()}}

       
</div>            


@endsection