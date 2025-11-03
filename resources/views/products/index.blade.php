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
		<div class="table-responsive shadow-sm rounded-3" style="background-color:#fff7fb;">
            <table class="table table-hover align-middle mb-0">
                <thead style="background-color:#ffebf5; color:#ff4da6;">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="fw-semibold">{{ $item->name }}</td>
                            <td>
                                <span class="badge text-bg-light border"
                                      style="color:#ff4da6; border-color:#ff4da6;">
                                      {{ ucfirst($item->color) }}
                                </span>
                            </td>
                            <td class="fw-semibold">Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                            <td style="width:120px;">
                                @if(!empty($item->image))
                                    {{-- ✅ Path sudah sesuai dengan folder "products" --}}
                                    <img src="{{ asset('storage/products/' . $item->image) }}"
                                         alt="{{ $item->name }}"
                                         class="rounded shadow-sm"
                                         style="max-width:100px; height:auto; object-fit:cover;">
                                @else
                                    {{-- Placeholder jika gambar kosong --}}
                                    <img src="{{ asset('images/bunga 1.jpg') }}"
                                         alt="No Image"
                                         class="rounded shadow-sm"
                                         style="max-width:100px; height:auto; opacity:0.5;">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('products.show', $item) }}"
                                   class="btn btn-sm btn-outline-primary me-1">View</a>
                                <a href="{{ route('products.edit', $item) }}"
                                   class="btn btn-sm btn-outline-secondary me-1">Edit</a>
                                <form action="{{ route('products.destroy', $item) }}"
                                      method="POST"
                                      class="d-inline-block"
                                      onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
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
