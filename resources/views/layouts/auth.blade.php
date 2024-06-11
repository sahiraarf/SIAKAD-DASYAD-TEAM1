<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @include('includes.style')
<style>
    body {
        background-image: url('{{ asset('assets/img/background.jpg') }}');
        object-fit: cover;
    }
</style>

</styl>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-12 d-flex justify-items-center flex-column">
                        <div class="login-brand">
                            {{-- <img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="100" class="shadow-lights"> --}}
                            <h1>{{ config('app.name') }}</h1>
                        </div>
                        @if(session()->has('info'))
                        <div class="alert alert-primary">
                            {{ session()->get('info') }}
                        </div>
                        @endif
                        @if(session()->has('status'))
                        <div class="alert alert-info">
                            {{ session()->get('status') }}
                        </div>
                        @endif
                        @yield('content')
                        <div class="simple-footer">
                            Copyright &copy; DASYAD TEAM {{ date('Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('includes.style')
</body>
</html>
