<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <p class="navbar-brand">
                Calculator
            </p>
        </div>
    </nav>
    <div class="container">
        @if (Session::get('result'))
            <div class="alert alert-info mr-6 ml-6" role="alert">
                <li>{{ Session::get('result') }}</li>
            </div>
        @endif

        <form class="row g-3" method="get" action="{{ route('result') }}">
            @csrf
            <div class="col-12">
                <label for="inputAddress" class="form-label">Number 1:</label>
                <input type="text" name="val1" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Number 2:</label>
                <input type="text" name="val2" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Operation:</label>
                <select name="operate" class="form-select">
                    <option selected>Choose...</option>
                    <option value="Add">Add +</option>
                    <option value="Subtract">Subtract -</option>
                    <option value="Multiply">Multiply *</option>
                    <option value="Divide">Divide /</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Calculate</button>
            </div>
        </form>
    </div>


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script> --}}
</body>

</html>
