@extends('layouts.app')

@section('title', 'Products')

@section('content')

	<div class="d-flex justify-content-between align-items-center mb-3">
		<h2 class="mb-0">Products</h2>
		<a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
	</div>

	@php
		// Normalize variable name: prefer $products but accept $product from controller if present.
		$items = ${'products'} ?? ${'product'} ?? collect();
	@endphp

	@if($items->count())
		<div class="table-responsive">
			<table class="table table-striped table-hover align-middle">
				<thead>
					<tr>
						<th scope="col">No.</th>
						<th scope="col">Name</th>
						<th scope="col">Color</th>
						<th scope="col">Price</th>
						<th scope="col">Image</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($items as $item)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $item->name }}</td>
							<td>{{ $item->color }}</td>
							<td>Rp.{{ number_format($item->price) }}</td>
							<td style="width:120px;">
								@if(!empty($item->image))
									<img src="{{ asset('storage/products/' . $item->image) }}" alt="{{ $item->name }}" class="img-thumbnail" style="max-width:100px; height:auto;">
								@else
									<span class="text-muted">—</span>
								@endif
							</td>
							<td>
								<a href="{{ route('products.edit', $item) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
								<form action="{{ route('products.destroy', $item) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Delete this product?');">
									@csrf
									@method('DELETE')
									<button class="btn btn-sm btn-danger">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="d-flex justify-content-center">
			{{ $items->withQueryString()->links() }}
		</div>
	@else
		<div class="alert alert-info">No products found.</div>
	@endif

@endsection
