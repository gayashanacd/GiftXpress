@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', "Complete your purchase")

@section('content')
<div class="card mb-4">
  <div class="card-header">Product Summary</div>
  <div class="card-body d-flex align-items-center">
    <img src="{{ asset('/storage/'.$viewData['product']->getImage()) }}" alt="{{ $viewData['product']->getName() }}"
         class="img-thumbnail me-3" style="width: 100px; height: auto;">
    <div>
      <h5>{{ $viewData["product"]->getName() }}</h5>
      <p><strong>Price:</strong> {{ $viewData["product"]->getCurrency() }} {{ number_format($viewData["product"]->getPrice(), 2) }}</p>
      <p><strong>Available Stock:</strong> {{ $viewData["product"]->getAvailableStock() }}</p>
    </div>
  </div>
</div>

<form method="POST" action="{{ route('product.purchase', ['id' => $viewData['product']->getId()]) }}">
  @csrf
  <div class="mb-3">
    <label for="quantity" class="form-label">Enter Number of Cards:</label>
    <input type="number" name="quantity" id="quantity" class="form-control" min="1" max="{{ $viewData["product"]->getAvailableStock() }}" required>
  </div>
  <button type="submit" class="btn btn-primary">Confirm Purchase</button>
</form>
@endsection
