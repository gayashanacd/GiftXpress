@extends('layouts.app')
@section('title', 'Buy Product')

@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/storage/'.$product->getImage()) }}" class="img-fluid rounded-start" alt="{{ $product->getName() }}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $product->getName() }}</h5>
        <p class="card-text">{{ $product->getDescription() }}</p>
        <p><strong>Price:</strong> {{ $product->getCurrency() }} {{ number_format($product->getPrice(), 2) }}</p>
        <form method="POST" action="{{ route('order.store', ['id' => $product->getId()]) }}">
          @csrf
          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity:</label>
            <input type="number" name="quantity" min="1" max="{{ $product->getAvailableStock() }}" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-success">Confirm Purchase</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
