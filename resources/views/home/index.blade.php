@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container mt-4">
<div class="container mt-4">
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 font-weight-bold text-primary">Welcome to Gift Express!</h1>
            <p class="lead text-muted">Your one-stop shop for online gift cards. Explore and send the perfect gift card today!</p>
        </div>
    </div>

    <!-- Featured Gift Cards -->
    <div class="row">
        <div class="col-md-4 col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('/img/gift-card.png') }}" class="card-img-top rounded" alt="Gift Cards">
                <div class="card-body">
                    <h5 class="card-title">Gift Cards for Everyone</h5>
                    <p class="card-text">Choose from a variety of gift cards suitable for every occasion. A perfect gift for any time!</p>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('/img/transaction-success.png') }}" class="card-img-top rounded" alt="Safe & Secure">
                <div class="card-body">
                    <h5 class="card-title">Safe & Secure Transactions</h5>
                    <p class="card-text">Our platform ensures that all your transactions are safe and secure for peace of mind.</p>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('/img/gift.png') }}" class="card-img-top rounded" alt="Unique Gift Ideas">
                <div class="card-body">
                    <h5 class="card-title">Unique Gift Ideas</h5>
                    <p class="card-text">Find the perfect gift card for birthdays, holidays, or any occasion! Unique choices for everyone.</p>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="row mt-5 text-center">
        <div class="col-12">
            <h2 class="font-weight-bold">Get Your Perfect Gift Card Today!</h2>
            <p class="lead text-muted">Don't wait! Explore our wide selection of gift cards and surprise your loved ones with the perfect gift.</p>
            <a href="{{ route('product.index') }}" class="btn btn-lg btn-success">Browse Gift Cards</a>
        </div>
    </div>
</div>
@endsection