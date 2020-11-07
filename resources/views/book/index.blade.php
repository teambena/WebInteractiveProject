@extends('layouts.app')
@section('content')
<body style="background-color: #262F34">
    
    
    <div class="container" style="background-color: #BBC3C6">
        <h2 style="text-align: center;color:white;margin-top:2rem">Page - Book List</h2>
      <div style="text-align: center;margin">
        <div class="row" style=" margin: 5rem; float: none;margin-bottom: 10px;">
                @foreach ($book as $row)
                    <div class="card" style="width: 18.8rem;margin:0.45rem;margin-bottom: 10rem;margin-top: 2rem;">

                        <img style="width: 300px; heigth:400px" src="{{ $row->image }}"></th>
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title }}</h5>
                            <a href="{{ url('book/detail/'.$row->books_id) }}" class="btn btn-dark">Read More</a></a>
                        </div>
                    </div>
    
               
    @endforeach
   @endsection
 </body>