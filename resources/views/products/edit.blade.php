@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
            <!-- Back button -->
            <div class="mb-3">
                <a href="javascript:history.back()" class="btn btn-light border btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" class="me-1">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H3.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L3.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                    </svg>
                    Back
                </a>
            </div>

            <div class="card">
                <div class="card-header">Edit Product</div>
                <div class="card-body">
                <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $product->name) }}" class="form-control @error('name') is-invalid @enderror" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Color</label>
                        <input id="color" name="color" type="text" value="{{ old('color', $product->color) }}" class="form-control @error('color') is-invalid @enderror" required>
                        @error('color')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input id="price" name="price" type="number" value="{{ old('price', $product->price) }}" class="form-control @error('price') is-invalid @enderror" required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Current Image</label>
                        <div>
                            @if($product->image)
                                <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail mb-2" style="max-width:150px; height:auto; display:block;">
                            @else
                                <div class="text-muted">No image uploaded.</div>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Change Image (optional)</label>
                        <input id="image" name="image" type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
