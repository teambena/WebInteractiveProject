@extends('layouts.app')
@section('content')
    <h2 class="container">Your cart</h2>
    <table class="container">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($cartItems as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>
                    {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
                </td>
                <td>
                <form action="{{route('cart.update',$item->id)}}">
                    <input name="quantity"type="number" value="{{$item->quantity}}">
                    <input type="submit" value="save">
                </form>
                </td>
                <td>
                <a href="{{route('cart.destroy',$item->id)}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <hr>
    <h4 class="container">
        Total Price : $ {{Cart::session(auth()->id())->getTotal()}}
    </h4>
    <div class="container">
        <a href="" class="btn btn-primary" role="button">Proceed to checkout</a>
    </div>
    
@endsection