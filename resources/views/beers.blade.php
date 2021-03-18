<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud & Birr</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Color</th>
            <th scope="col">Bitter(%)</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($beers as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->color}}</td>
              <td>{{$item->bitter}}</td>
              <td>{{$item->description}}</td>
              <td>{{$item->price}}</td>
              <td><img src="{{$item->image}}" width="100" alt=""></td>
            </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
