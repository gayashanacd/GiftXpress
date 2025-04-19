@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  @foreach ($viewData["products"] as $product)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
    <a href="{{ route('product.show', ['id'=> $product->getId()]) }}">
      <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top img-card">
      </a>
      <div class="card-body text-center">
        <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn bg-primary text-white">{{ $product->getName() }}</a>
        <p class="mt-2"><strong>Brand:</strong> {{ $product->getBrand() }}</p>
        <p><strong>Price:</strong> {{ $product->getCurrency() }} {{ number_format($product->getPrice(), 2) }}</p>
        <p><strong>Category:</strong> {{ $product->getCategory() }}</p>
        <p><strong>Available Stock:</strong> {{ $product->getAvailableStock() }}</p>
        <p><strong>Status:</strong> 
          @if($product->getIsActive())
            <span class="badge bg-success">Active</span>
          @else
            <span class="badge bg-danger">Inactive</span>
          @endif
        </p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
