<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('TodoName')</title>
    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-image: url(https://t3.ftcdn.net/jpg/05/56/98/92/360_F_556989229_lBBasUTWiFGKyhyeUXiFcQSY0IJYAKRv.jpg)">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a style="font-size: 30px; color: rgb(99, 3, 99);" class="navbar-brand" href="#"><b>Todo App</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a style="font-size: 20px; color: rgb(99, 3, 99); " class="nav-link active" aria-current="page" href="{{ route('homepage') }}"><b>Add Todo</b></a>
              </li>
              <li class="nav-item">
                <a style="font-size: 20px; color: rgb(99, 3, 99); " class="nav-link active" aria-current="page" href="{{ route('Alltodo') }}"><b>All Todo</b></a>
              </li>
              <li class="nav-item">
                <a style="font-size: 20px; color: rgb(99, 3, 99); " class="nav-link active" aria-current="page" href="{{ route('completeTodo')}}"><b>Complete</b></a>
              </li>
            </form>
          </div>
        </div>
      </nav>

        {{-- main contain hear --}}

        @yield('secret')

        {{-- main contain end --}}



    </body>
    </html>