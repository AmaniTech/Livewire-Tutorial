<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">

    <title>Qomar Livewire</title>
    @livewireStyles()
</head>

<body>

    <!-- navbar -->
    @include('partials.navbar')

    <!-- isinya -->
    <div class="container mt-4">

        @yield('container')

    </div>
    <!-- ----- -->



    <script src="/js/bootstrap.min.js"></script>
    @livewireScripts()
</body>

</html>
