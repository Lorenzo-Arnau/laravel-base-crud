@php
   if (isset($edit) && !empty($edit)) {
      $title='Edit this Beer';
      $method='PUT';
      $destination=route('beers.update',['beer' => $beer]);
   }else {
     $title='Create a new Beer';
     $method='POST';
     $destination=route('beers.store');
   };
@endphp
<h2>{{$title}}</h2>
<form action="{{$destination}}" method="post">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="input-name">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" id="input-name"  placeholder="Enter name" name="name" value="{{$edit ? $beer->name : '' }}">
        <div class="invalid-feedback">
            Please choose a beer name.
        </div>
    </div>
    <div class="form-group">
        <label for="input-color">Color</label>
        <input type="text" class="form-control  {{ $errors->has('color') ? 'is-invalid' : ''}}" id="input-color"  placeholder="Enter color" name="color" value="{{$edit ? $beer->color : '' }}">
        <div class="invalid-feedback">
            Please choose a valid color.
        </div>
    </div>
    <div class="form-group">
        <label for="input-bitter">Bitter</label>
        <input type="text" class="form-control  {{ $errors->has('bitter') ? 'is-invalid' : ''}}" id="input-bitter"  placeholder="Enter bitter" name="bitter" value="{{$edit ? $beer->bitter : '' }}">
        <div class="invalid-feedback">
            Please choose a valid Bitter%.
        </div>
    </div>
    <div class="form-group">
        <label for="input-description">Description</label>
        <input type="text" class="form-control  {{ $errors->has('description') ? 'is-invalid' : ''}}" id="input-description"  placeholder="Enter description" name="description" value="{{$edit ? $beer->description : '' }}">
        <div class="invalid-feedback">
            Please choose a valid Description.
        </div>
    </div>
    <div class="form-group">
        <label for="input-price">Price</label>
        <input type="text" class="form-control  {{ $errors->has('price') ? 'is-invalid' : ''}}" id="input-price"  placeholder="Enter price" name="price" value="{{$edit ? $beer->price : '' }}">
        <div class="invalid-feedback">
            Please choose a valid price.
        </div>
    </div>
    <div class="form-group">
        <label for="input-image">Image</label>
        <input type="text" class="form-control  {{ $errors->has('image') ? 'is-invalid' : ''}}" id="input-image"  placeholder="Enter image" name="image" value="{{$edit ? $beer->image : '' }}">
        <div class="invalid-feedback">
            Please choose a valid Url.
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
