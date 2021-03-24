<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud & Birr</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
                @endif
     </div>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('index.beers')}}"><img src="https://www.ledrolandart.eu/wp-content/uploads/2018/05/Logo-Birrificio.png" width="100" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index.beers')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('beers.create')}}">Add</a>
            </li>
          </ul>
          <form class="form-inline" method="post" action="{{route('index.beers')}}">
            @csrf
            @method('GET')
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="item">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Color</th>
            <th scope="col">Bitter(%)</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($beers as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->color}}</td>
              <td>{{$item->bitter}}</td>
              <td>{{$item->price}}</td>
              <td><img src="{{$item->image}}" width="200" alt="" ></td>
              <td>
                  <button  type="button" class="btn btn-primary">
                  <a href="{{route('show.beers',['beer' => $item->id])}}"><i class="fas fa-eye"></i></a>
                  </button>

                  @if (Auth::check())

                  <form action="{{route('beers.destroy',['beer' => $item->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                        <i class="fas fa-bomb"></i>
                    </button>
                    @include('parts.modal',['beer'=> $item->id])
                </form>
                <button  type="button" class="btn btn-success"  href="{{route('beers.edit',['beer' => $item->id])}}">
                    <a href="{{route('beers.edit',['beer' => $item->id])}}"><i class="fas fa-edit"></i></a>
                </button>
                @endif

            </td>
        </tr>
        @endforeach
        </tbody>
      </table>

</body>
</html>
