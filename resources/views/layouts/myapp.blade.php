<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My equipment | @yield('title')</title>
    {{-- Google Font: Source Sans Pro --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
    {{-- Theme style --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    {{-- Site wrapper --}}
    <div class="wrapper">
        {{-- Navbar --}}
        @include('layouts.navbar')
        {{-- /.navbar --}}

        {{-- Main Sidebar Container --}}
        @include('layouts.sidebar')

        {{-- Content Wrapper. Contains page content --}}
        <div class="content-wrapper">

            {{-- Content Header (Page header) --}}
            @include('layouts.header')
            {{-- Main content --}}

            <section class="content">
                @yield('content')
            </section>
            {{-- /.content --}}
        </div>
        {{-- /.content-wrapper --}}

        @include('layouts.footer')

        {{-- Control Sidebar --}}
        <aside class="control-sidebar control-sidebar-dark">
            {{-- Control sidebar content goes here --}}
        </aside>
        {{-- /.control-sidebar --}}
    </div>
    {{-- ./wrapper --}}

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    {{-- Bootstrap 4 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- AdminLTE App --}}
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    {{-- AdminLTE for demo purposes --}}
    <script src="../../dist/js/demo.js"></script>

    <script src="https://kit.fontawesome.com/61f3f886fe.js" crossorigin="anonymous"></script>
</body>

</html>
