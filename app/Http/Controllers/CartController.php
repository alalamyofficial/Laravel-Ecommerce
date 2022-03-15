<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function add(Product $product){

        
        // $product = Product::find($product_id);
        // dd($product);

        \Cart::session(auth()->user()->id)->add(array(
            // 'id' => uniqid($product->id),
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');
    }

    public function index(){
        $cartItems = \Cart::session(auth()->user()->id)->getContent();
        return view('cart.index',compact('cartItems'));
    }

    public function destroy($itemId){
        \Cart::session(auth()->user()->id)->remove($itemId);
        return back();
    }

    public function update($rowId){

        \Cart::session(auth()->user()->id)->update($rowId,[
            'quantity' => 
                    array(
                        'relative' => false,
                        'value' => request('quantity')
                    ),
        ]);
        return back();
    }

    public function checkout(){
        
        return view('cart.checkout');
    }
}
