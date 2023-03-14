@extends('artist.layout')
@section('content')
<h1>edit artist</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



<div>
    <h1>ajouter un artist</h1>
<form action="{{url('artist/'.$artist->id)}}" method="post">
    {!!csrf_field()!!}
    @method("HEAD")
    <input   type="hidden" name="id" value="{{$artist->id}}" id="id">
  <div class="form-group">
    <label for="exampleFormControlInput1">name</label>
    <input type="text" class="form-control" value="{{$artist->name}}" id="exampleFormControlInput1" name="name" placeholder="....">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">country</label>
    <input type="text" class="form-control" value="{{$artist->country}}" id="exampleFormControlInput1" name="country" placeholder="....">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">description</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$artist->description}}"  name="description" placeholder="....">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">image</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$artist->image}}" name="image" placeholder="....">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="image" value="{{$artist->image}}" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
  <label for="start" >Start date:</label>

<input type="date" id="start" name="birthday"
       value="2018-07-22"
       min="2018-01-01"value="{{$artist->birthday}}" max="2018-12-31">
  </div>
  <button class="btn ">save</buttn>
</form>
</div>
@stop