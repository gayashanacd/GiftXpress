@extends('layouts.app')
@section('title', 'My Orders')

@section('content')
<h3 class="mb-3">Your Orders</h3>
@foreach($orders as $order)
<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">{{ $order->product->getName() }}</h5>
    <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
    <p><strong>Total Price:</strong> {{ $order->total_price }}</p>
    <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
  </div>
</div>
@endforeach
@endsection
