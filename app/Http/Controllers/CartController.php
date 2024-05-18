<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Watch;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $watch = Watch::findOrFail($id);
        
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $watch->name,
                "description" => $watch->discription,
                "amount" => $watch->amount,
                "quantity" => 1,
                "img" => $watch->imgs,
             
            ];
        }
        session()->put('cart', $cart);

      // dd($cart);die();
        // Display success alert
        Alert::success('Success', 'Item added to cart successfully.');
    
        return redirect()->back();
    }
    
    

    public function viewCart()
    {
        $cart = session()->get('cart');
        return view('cart', compact('cart'));
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            
            session()->flash('success', 'Cart updated successfully');
            Alert::success('Success', 'Cart updated successfully.');

        }
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        Alert::success('Success', 'Item removed from cart successfully.');

        return redirect()->back();
    }

}
