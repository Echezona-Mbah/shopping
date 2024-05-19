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
        $fff = $cart[$id]['quantity'];

       //dd($cart[$id]['quantity']);die();
        // Display success alert
        Alert::success('Success', "$fff Item added to cart successfully.");
    
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

    public function store(Request $request)
    {
        $request->validate([
            'subtotal' => 'required|numeric',
            'total' => 'required|numeric',
            'deliveryOption' => 'required|numeric',
        ]);
       //  dd($request->all());die();

        $cart = session()->get('cart', []);

        if (!$cart) {
            Alert::success('error', 'Your cart is empty.');
            return redirect()->back();
        }

        foreach ($cart as $id => $details) {
          // dd($details);die();

            $orderItem = new CartItem();
            $orderItem->name = $details['name'];
            $orderItem->quantity = $details['quantity'];
            $orderItem->amount = $details['amount'];
            $orderItem->description = $details['description'];
            $orderItem->img = $details['img'];
            $orderItem->subtotal = $request->subtotal;
            $orderItem->deliveryOption = $request->deliveryOption;
            $orderItem->total = $request->total;
            $orderItem->save();
        }

        session()->forget('cart');
        Alert::success('Success', 'Order placed successfully.');
    
        return redirect()->back();
    }

    public function someMethod(Request $request)
    {
        $cart = session()->get('cart', []);
        $cartCount = array_sum(array_column($cart, 'quantity'));

        return view('some.view', ['cartCount' => $cartCount]);
    }

}
