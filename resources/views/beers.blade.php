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
                  <a href="{{route('beers.show',['beer' => $item->id])}}"><i class="fas fa-eye"></i></a>
                  </button>
                  <form action="{{route('beers.destroy',['beer' => $item->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                      <i class="fas fa-bomb"></i>
                  </button>
                  @include('parts.modal')
                  </form>
                  <button  type="button" class="btn btn-success"  href="{{route('beers.edit',['beer' => $item->id])}}">
                  <a href="{{route('beers.edit',['beer' => $item->id])}}"><i class="fas fa-edit"></i></a>
                  </button>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
