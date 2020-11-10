@extends('layouts.app')
    @section('content')
    )<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
    }

    /* Control the left side */
    .left {
        left: 0;
        background-color: #111;
    }

    /* Control the right side */
    .right {
        right: 0;
        background-color: red;
    }

    /* If you want the content centered horizontally and vertically */
    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    /* Style the image inside the centered container, if needed */
    .centered img {
        width: 150px;
        border-radius: 50%;
    }

    .grid-container {
        display: grid;
    }
    table, th, td {
  border: 1px solid black;
}
table {
  width: 100%;
height: 100%;
}

</style>

<body style="background-color: rgb(7, 28, 46)">
    <div class="container"  style="background-color: antiquewhite">
<div class="row">
              <div class="col-sm">
                @foreach ($books_id as $row)
                <img class="image" style="width: 550px; heigth:700px" src="{{ $row->image }}"></th>
                @endforeach    
              </div>
              <div class="col-sm">
                @foreach ($books_id as $row)
                <h2 class="card-title" style="margin-bottom: 10rem">{{ $row->title }}</h2>
                <h5 class="card-title">&ensp; &ensp; &ensp; &ensp;  {{ $row->detail }}</h5>
                <hr>
                <h2 class="text-center">$ {{$row->price}}</h2>
                
                <a href="{{route('cart.add',$row->books_id)}}"><button type="button" class="btn btn-secondary btn-lg" style="text-align: center;margin-top:3rem">Add to Cart</button></a>
                <a href="/book"><button type="button" class="btn btn-dark btn-lg" style="text-align: center;margin-top:3rem">Back to Book</button></a>
                @endforeach     
              </div>
            </div>
          </div></div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</html>
 @endsection
