<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
@component('elements.navbar')
@endcomponent
<body style="background-color: #636b6f">
<div class=" container-fluid ">
    <div class="contenu row">
        <h1 class="text-center">@yield('title')</h1>
        @yield('content')

    </div>
</div>
</div>


<div class="col-md-12">
    @component('elements.footer')
    @endcomponent
</div>
</div>
</body>
</html>
