@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Edit Product</h3>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

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
                            <label for="image" class="form-label">Replace Image (optional)</label>
                            <input id="image" name="image" type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Upload a new image to replace the current one. Leave blank to keep existing.</div>
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn btn-primary">Update</button>
                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
