<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class CartController extends Controller
{
    public function add(Book $product)
    {
        \Cart::session(auth()->id())->add(array(
            'id'=>$product->books_id,
            'name'=>$product->title,
            'price'=>$product->price,
            'quantity'=>1,
            'attributes'=>array(),
            'association'=>$product
        ));
        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.index',compact('cartItems'));
    }

    public function destroy($itemId)
    {
        \Cart::session(auth()->id())->remove($itemId);
        return back();
    }

    public function update($rowId)
    {
        \Cart::session(auth()->id())->update($rowId,[
            'quantity'=>array(
                'relative' =>false,
                'value'=>request('quantity')
            )
            
        ]);
        return back();
    }
}
