<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
</head>
<body>
    <div class="form-container">
        <h2>Create a new Beer</h2>
        <form action="{{route('beers.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="input-name">Name</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="input-name"  placeholder="Enter name" name="name">
                <div class="invalid-feedback">
                    Please choose a beer name.
                </div>
            </div>
            <div class="form-group">
                <label for="input-color">Color</label>
                <input type="text" class="form-control  {{ $errors->has('color') ? 'is-invalid' : ''}}" id="input-color"  placeholder="Enter color" name="color">
                <div class="invalid-feedback">
                    Please choose a valid color.
                </div>
            </div>
            <div class="form-group">
                <label for="input-bitter">Bitter</label>
                <input type="text" class="form-control  {{ $errors->has('bitter') ? 'is-invalid' : ''}}" id="input-bitter"  placeholder="Enter bitter" name="bitter">
                <div class="invalid-feedback">
                    Please choose a valid Bitter%.
                </div>
            </div>
            <div class="form-group">
                <label for="input-description">Description</label>
                <input type="text" class="form-control  {{ $errors->has('description') ? 'is-invalid' : ''}}" id="input-description"  placeholder="Enter description" name="description">
                <div class="invalid-feedback">
                    Please choose a valid Description.
                </div>
            </div>
            <div class="form-group">
                <label for="input-price">Price</label>
                <input type="text" class="form-control  {{ $errors->has('price') ? 'is-invalid' : ''}}" id="input-price"  placeholder="Enter price" name="price">
                <div class="invalid-feedback">
                    Please choose a valid price.
                </div>
            </div>
            <div class="form-group">
                <label for="input-image">Image</label>
                <input type="text" class="form-control  {{ $errors->has('image') ? 'is-invalid' : ''}}" id="input-image"  placeholder="Enter image" name="image">
                <div class="invalid-feedback">
                    Please choose a valid Url.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
