@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/storage/'.$viewData['product']->getImage()) }}" class="img-fluid rounded-start" alt="{{ $viewData['product']->getName() }}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          {{ $viewData["product"]->getName() }} ({{ $viewData["product"]->getCurrency() }} {{ number_format($viewData["product"]->getPrice(), 2) }})
        </h5>
        <p><strong>Brand:</strong> {{ $viewData["product"]->getBrand() }}</p>
        <p><strong>Amount:</strong> {{ number_format($viewData["product"]->getAmount(), 2) }}</p>
        <p><strong>Category:</strong> {{ $viewData["product"]->getCategory() }}</p>
        <p><strong>Available Stock:</strong> {{ $viewData["product"]->getAvailableStock() }}</p>
        <p><strong>Status:</strong> 
          @if($viewData["product"]->getIsActive())
            <span class="badge bg-success">Active</span>
          @else
            <span class="badge bg-danger">Inactive</span>
          @endif
        </p>
        <p class="card-text">{{ $viewData["product"]->getDescription() }}</p>
      </div>
    </div>
  </div>
</div>
@endsection
