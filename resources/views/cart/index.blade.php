<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('css')
</head>

<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                    
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form action="{{ route('checkout.store') }}" method="post" id="checkout">
                                    @csrf
                                </form>

                                <div id="cart-total">
                                    <hr>
                                    <strong>Total: <span id="total-amount">Rp. 0</span></strong>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="name">First Name</label>
                                            <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                                aria-describedby="helpId" placeholder="First name" form="checkout" required>
                                            @error('name') <small id="helpId" class="form-text text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" value="{{ old('last_name') }}" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name"
                                                aria-describedby="helpId" placeholder="Last name" form="checkout" required>
                                            @error('last_name') <small id="helpId" class="form-text text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                                aria-describedby="helpId" placeholder="Email Address" form="checkout" required>
                                            @error('email') <small id="helpId" class="form-text text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="phone_number">WhatsApp Number</label>
                                            <input type="text" value="{{ old('phone_number') }}" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number"
                                                aria-describedby="helpId" placeholder="WhatsApp Number" form="checkout" required>
                                            @error('phone_number') <small id="helpId" class="form-text text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block" form="checkout">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @stack('js')
</body>
@section('scripts')
<script src="/assets/js/main.js"></script>
@endsection
</html>
