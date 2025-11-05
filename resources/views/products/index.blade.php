@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0 fw-bold text-primary">Products</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary">+ Create Product</a>
    </div>

    @if ($product->count())
        <div class="table-responsive shadow-sm rounded-3" style="background-color:#fff7fb;">
            <table class="table table-hover align-middle mb-0">
                <thead style="background-color:#ffebf5; color:#ff4da6;">
                    <tr>
                        <th scope="col" class="text-center">No.</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Gambar</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $index => $item)
                        <tr>
                            {{-- Nomor urut mengikuti halaman --}}
                            <td class="text-center">{{ $product->firstItem() + $index }}</td>
                            <td class="fw-semibold">{{ $item->name }}</td>
                            <td>
                                <span class="badge text-bg-light border" style="color:#ff4da6; border-color:#ff4da6;">
                                    {{ ucfirst($item->color) }}
                                </span>
                            </td>
                            <td class="fw-semibold">Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                            <td style="width:120px;">
                                @if (!empty($item->image))
                                    <img src="{{ asset('storage/products/' . $item->image) }}"
                                         alt="{{ $item->name }}"
                                         class="rounded shadow-sm"
                                         style="max-width:100px; height:auto; object-fit:cover;">
                                @else
                                    <img src="{{ asset('images/bunga 1.jpg') }}"
                                         alt="No Image"
                                         class="rounded shadow-sm"
                                         style="max-width:100px; height:auto; opacity:0.5;">
                                @endif
                            </td>
                            <td class="text-center">
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

        {{-- Pagination tampil sekali dan rapi --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $product->links('pagination::bootstrap-5') }}
        </div>
    @else
        <div class="alert alert-info">Tidak ada produk ditemukan.</div>
    @endif
</div>
@endsection
