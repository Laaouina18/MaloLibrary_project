@extends('artist.layout')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<div>
    <h1>ajouter un artist</h1>
<form action="{{url('artist')}}" method="post">
    {!!csrf_field()!!}
  <div class="form-group">
    <label for="exampleFormControlInput1">name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="....">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">country</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="country" placeholder="....">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">description</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="description" placeholder="....">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">image</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="image" placeholder="....">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="image" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
  <label for="start" >Start date:</label>

<input type="date" id="start" name="birthday"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
  </div>
  <button class="btn " >save</buttn>
</form>
</div>
@endsection