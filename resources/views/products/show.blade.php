@extends('layouts.app')

@section('title', 'View Product')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="mb-3">
                <a href="javascript:history.back()" class="btn btn-light border btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" class="me-1">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H3.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L3.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                    </svg>
                    Back
                </a>
            </div>
        <div class="card mb-3 shadow-sm position-relative">
            <div class="row g-0">
                <div class="col-md-5 bg-light d-flex align-items-center justify-content-center" style="min-height:260px;">
                    @if($product->image)
                        <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded-start" style="max-height:200px; object-fit:cover;">
                    @else
                        <div class="text-muted">No image available</div>
                    @endif
                </div>

                <div class="col-md-7">
                    <div class="card-body">
                        <h2 class="card-title">{{ $product->name }}</h2>
                        <p class="mb-1"><strong>Color:</strong> {{ $product->color }}</p>
                        <p class="mb-1"><strong>Price:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection