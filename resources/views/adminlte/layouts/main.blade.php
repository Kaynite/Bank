<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    
    <link rel="stylesheet" href="{{ asset('adminlte/css/fontawesome.min.css') }}">
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">

    <title>AdminLTE | @yield('title')</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        
        @include('adminlte.parts.navbar')
        @include('adminlte.parts.sidebar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    @include('adminlte.parts.contentHeader')
                </div>
            </div>
            
            <div class="content">
                <div class="container-fluid">
                    @if (session('success'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success">
                                {{ __(session('success')) }}
                            </div>
                        </div>
                    </div>
                    @endif

                    @error('message')
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            </div>
                        </div>
                    @enderror
                    @yield('content')
                </div>
            </div>
        </div>
        @include('adminlte.parts.footer')
    </div>

    <script src="{{ asset('adminlte/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
