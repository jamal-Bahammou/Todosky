<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    <title>TODOS PAGE</title>
</head>
<body>

    
    <div class="d-flex flex-column flex-md-row align-items-center px-5 py-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Todosky</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="/">Home</a>
          <a class="p-2 text-dark" href="/todos">Todos</a>
          <a class="p-2 text-dark" href="#">Support</a>
          <a class="p-2 text-dark" href="#">Privacy</a>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>