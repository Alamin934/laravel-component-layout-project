<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $pageTitle }}</title>
</head>
<body>
    <section>
        <div class="container-fluid bg-dark">
            <div class="row text-white">
                <div class="col-md-2 vh-100 border-end border-warning py-5 px-0">
                    @include('include.sidebar')
                </div>
                <div class="col-md-10 p-5">
                    {{ $content }}
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>