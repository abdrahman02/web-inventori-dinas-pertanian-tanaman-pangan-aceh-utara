<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Dinas Pertanian dan Pangan</title>

    <!-- CSS files -->
    <link href="{{ asset('css/tabler.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendor/mdi/css/materialdesignicons.min.css') }}">
    <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.min.css') }}" rel="stylesheet" />

    {{-- Inter Font --}}
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Black.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Bold.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-ExtraBold.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-ExtraLight.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Light.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Medium.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Regular.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-SemiBold.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter/static/Inter-Thin.ttf') }}">

</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container card container-tight my-5 px-lg-5">
            <div class="mb-5">
                <h2 class="h3 text-center mb-3 mt-5">
                    Login
                </h2>

                @if (session('loginError'))
                <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                    <span class="mdi mdi-alert"></span>
                    <div class="ms-3">
                        {{ session('loginError') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="/login" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                            name="username" placeholder="Username" value="{{ old('username') }}" required autofocus>

                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Password" id="password" name="password">
                        </div>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/tabler.min.js') }}"></script>
    <script src="{{ asset('js/demo.min.js') }}"></script>

</body>

</html>