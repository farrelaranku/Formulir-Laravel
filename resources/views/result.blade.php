<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    <title>Success</title>
</head>

<body style="background-color:blue; font-family: Verdana; >
    <div class="container">
                    <div class="position-absolute top-50 start-50 translate-middle bg-primary bg-gradient rounded">
                        @if (session('status'))
                        <h1 class="text-center mt-2 px-3" style="color:white;">{{ session('status') }}</h1>
                        @endif
                        @foreach($results as $key => $result)
                        @if ($loop->last)
                        <img class="mx-auto d-block rounded" src="{{ asset('storage/images/'.$result) }}" style="height: 160px; width: auto;">
                        <br>
                        
                       
                        @else
                        <p class="mt-2 px-3"  style="color:white;">
                            {{ $key }} = {{ $result }}
                            <br>
                        </p>
                        @endif
                    @endforeach       
    </div>
</body>
</html>