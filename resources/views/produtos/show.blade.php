@extends('layouts.app')

@section('content')

@if(  sizeof($product->options) )
	@php
		$ref_ant = $product->options[0]->referencia
	@endphp
@endif


<div class="container">
<div>
		<h1>{{$product['name']}}</h1>
</div>
	
	<form method="POST" >
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" 
				   class="form-control"
				   id="name" value="{{$product['name']}}">
		</div>
		<div class="form-group">
			<label for="notes">Notas</label>
			<textarea name="notes"
				   id="notes" class="form-control">{{$product['notes']}}</textarea>
		</div>
		<div class="form-group">
			<label for="state">Estado</label>
			<select name="state" id="state" class="form-control">{{$product['state']}}>
  				<option value="Em Curso">Em Curso</option>
  				<option value="Terminado">Terminado</option>
  			</select>
		</div>
		<div class="form-group">
			<button type="submit" 
					class="btn btn-primary">Atualizar</button>
		</div>
	</form>
</div><br><br><br>

<div class="container" id="pontodedados">
	<div>
			<h1>Ponto de Dados</h1>
	</div>
		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Tipo</th>
					<th  colspan ="3"></th>
				</tr >
			</thead>
			<tbody>
			@foreach($product->datapoints as $pontodedado)
				<tr>
					<td>{{$pontodedado['name']}}</td>
					<td>{{$pontodedado['type']}}</td>
					<td>					
					<a href="{{route('pontodedados.show', $pontodedado)}}" class="btn btn-primary">Ver</button>					
					</td>
					<td><form method="POST" action="{{route('pontodedados.destroy', $pontodedado)}}"> 
						@method('DELETE')
						@csrf()
						<button type="submit"
						onclick="return confirm('Tem a certeza que pretende eliminar?')"
						class="btn btn-primary btn-sm">Apagar</button>
						</form></td>
				</tr>
			@endforeach
			</tbody>
		</table>

	<div>
	<a href="{{route('produtos.pontodedados.create',$product)}}" class="btn btn-primary">Criar Ponto de Dados</a>
	</div>
</div><br>

<div class="container">
<button onclick="myFunction()" class="btn btn-primary">Ver/Esconder</button>
</div><br><br><br><br>






<div class="container">
	<table>
	<td><div class="container">
<div>
		<h1>Opções</h1>
</div>
		<form method="POST" action="{{route('produtos.opcoes',$product->id	)}}">
		@csrf()
<table class="table">
		<thead>		
			<tr>
			<div>
			@foreach($product->datapoints as $pontodedado)
				<th>{{$pontodedado['name']}}</th>			
			@endforeach				
			</div>
			<th>Data</th>			
			</tr>
		</thead>
		<tbody>
			@if( sizeof($product->options) )
			<tr> <!--Linha para gerar o index da tabela option-->
			    @foreach($product->options as $opcao)
						@if($opcao->referencia!=$ref_ant)
						<td class="data">
							{{ date('Y-m-d', strtotime($opcao['created_at'])) }}
						</td>						
						<td>
							<a href="{{route('imagens.show',$opcao)}}" class="btn btn-primary">Ver</button>
						</td>							
			</tr>
			<tr></tr>
						@endif
						<div>				           
						@if($ref_ant = $opcao->referencia)
							<td>{{$opcao['value']}}</td>																		
						@endif											
				@endforeach
						<td class="data">
						{{ date('Y-m-d', strtotime($opcao['created_at'])) }}						
						</td>
						<td>
							<a href="{{route('imagens.show',$opcao)}}" class="btn btn-primary">Ver</button>		
						</td>
						</div>									          
			</tr>
			@endif

			<tr>
			@foreach($product->datapoints as $pontodedado)
				<td>
					<div class="form-group">
						<input type="text" name="{{$pontodedado->id}}" id="name" class="form-control">
					</div>
				</td>
			@endforeach
			</tr>
		</tbody>	
</table>
			<div>
				<button onclick="myFunction()" type="submit" class="btn btn-primary">Criar Nova Opção</a>
			</div>
		</form>
</div>
<td>

@if(  sizeof($product->options) )


<div class="container">		
<table class="table">
		<thead>
			<tr>			
			<th colspan="2">IMAGENS</th>
			</tr>
		</thead>
		<tbody>
			<tr> <!--Linha para gerar o index da tabela option-->
			    @foreach($product->options as $opcao)
						@if($opcao->referencia!=$ref_ant)											  
							</tr>							
							<td>
							<form method="POST" action="{{route('image.store', $opcao)}}" enctype="multipart/form-data" style="display:inline-flex;">
								@csrf()
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="image" name="image">
									<label class="custom-file-label" for="image" >ficheiro</label>
								</div>
								<button type="submit" class="btn btn-primary mb-2">Upload</button>
							</form>
							</td>
							<tr>
						@endif  
						<div>            
						@if($ref_ant = $opcao->referencia)									
						@endif
						</div>
				@endforeach
						<td>
						<form method="POST" action="{{route('image.store',$opcao)}}" enctype="multipart/form-data" style="display:inline-flex;">
								@csrf()
								<div class="custom-file">
									<input type="file" class="" id="image" name="image">
									<label class="custom-file-label" for="image" >ficheiro</label>
								</div>
								<button type="submit" class="btn btn-primary mb-2">Upload</button>
							</form>
						</td>  
			</tr>
			
		</tbody>	
</table>
</div>

@endif

</td>
	</table>
</div>

</div>


@endsection


<script>
function myFunction() {
  var x = document.getElementById("pontodedados");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>











