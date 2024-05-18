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

    public function store(Request $request)
    {
        $request->validate([
            'subtotal' => 'required|numeric',
            'total' => 'required|numeric',
            'deliveryOption' => 'required|numeric',
        ]);
        // dd($request->all());die();

        $cart = session()->get('cart', []);

        if (!$cart) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $order = new Watch();
        $order->subtotal = $request->subtotal;
        $order->delivery_charge = $request->deliveryOption;
        $order->total = $request->total;
        $order->save();

        foreach ($cart as $id => $details) {
            dd($details);die();

            $orderItem = new CartItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $id;
            $orderItem->quantity = $details['quantity'];
            $orderItem->price = $details['amount'];
            $orderItem->save();
        }

        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Order placed successfully.');
    }

}
