@extends('layouts.app')

@section('content')
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Notas</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Link</th>
				<th colspan="5">Preço</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td>{{ $product['name'] }}</td>
				<td>{{ count($product['product']) }}</td>
				<td>
					<a href="{{route('product.show',$product)}}"
					   class="btn btn-primary btn-sm">Ver</a>
				</td>
				<td>
					<form method="POST" 
						  action="{{route('product.destroy',$product)}}">
						@method('DELETE')
						@csrf()
						<button type="submit" 
								onclick="return confirm('Tem a certeza que pretende apagar este produto')"
								class="btn btn-primary btn-sm" >Apagar</button>
					</form>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>

	{{ $product->links() }}

	<div>
		<a href="{{route('product.create')}}" class="btn btn-primary">Criar Produto</a>
	</div>
</div>
@endsection