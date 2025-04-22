<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel=stylesheet>

    <title>@yield('title','GiftXpress')</title>
  </head>
  <body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">GiftXpress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto align-items-center">
              <!-- Currency Converter Form -->
              <form action="{{ route('currency.convert') }}" method="GET" class="d-flex align-items-center me-3">
                <input type="number" name="amount" placeholder="Amount" class="form-control form-control-sm me-2" style="width: 100px;">
                <select name="currency" class="form-select form-select-sm me-2" style="width: 100px;">
                <option value="CAD">CAD - Canadian Dollar</option>
                <option value="USD">USD - US Dollar</option>
                <option value="EUR">EUR - Euro</option>
                <option value="GBP">GBP - British Pound</option>
                <option value="AUD">AUD - Australian Dollar</option>
                <option value="JPY">JPY - Japanese Yen</option>
                <option value="CNY">CNY - Chinese Yuan</option>
                <option value="INR">INR - Indian Rupee</option>
                <option value="CHF">CHF - Swiss Franc</option>
                <option value="AED">AED - UAE Dirham</option>
                <option value="SAR">SAR - Saudi Riyal</option>
                <option value="SGD">SGD - Singapore Dollar</option>
                <option value="HKD">HKD - Hong Kong Dollar</option>
                <option value="MXN">MXN - Mexican Peso</option>
                <option value="NZD">NZD - New Zealand Dollar</option>
                <option value="KRW">KRW - South Korean Won</option>
                <option value="BRL">BRL - Brazilian Real</option>
                <option value="ZAR">ZAR - South African Rand</option>
                <option value="RUB">RUB - Russian Ruble</option>
                </select>
                <button type="submit" class="btn btn-light btn-sm">Convert</button>
              </form>

              @if (session('currency_result'))
                <div class="alert alert-info text-center" style="padding: 5px; margin-top: 15px;">
                  {{ session('currency_result') }}
                </div>
              @endif

              <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
              <a class="nav-link active" href="{{ route('home.about') }}">About</a>
              <a class="nav-link active" href="{{ route('product.index') }}">Products</a>
              <a class="nav-link active" href="{{ route('orders.index') }}">Orders</a>
              <div class="vr bg-white mx-2 d-none d-lg-block"></div>

              @guest
                <a class="nav-link active" href="{{ route('login') }}">Login</a>
                <a class="nav-link active" href="{{ route('register') }}">Register</a>
              @else
                <form id="logout" action="{{ route('logout') }}" method="POST">
                  <a class="nav-link active" role="button" onclick="document.getElementById('logout').submit();">Logout</a>
                  @csrf
                </form>
              @endguest

              </div>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
        <h2>@yield('subtitle','Give the Gift of Choice – Fast, Easy, and Secure')</h2>
    </div>
    </header>
    <!-- header -->
    
    <div class="container my-4">
      @yield('content')
    </div>
    <!-- footer -->
    @include('layouts.footer')
    @yield('footer')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>