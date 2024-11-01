<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('cart', compact('cart'));
    }

    public function add(Request $request, $id)
    {
        $product = Product::find($id);
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->amount;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->amount,
                'image' => $product->image,
                'added_to_cart' => true
            ];
        }

        Session::put('cart', $cart);
        return redirect()->route('products')->with('success', 'Product added to cart!');
    }

    public function update(Request $request)
    {
        $cart = Session::get('cart', []);
        $id = $request->input('product_id');
        $amount = $request->input('amount');

        if ($request->action == 'remove') {
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] -= $amount;
                if ($cart[$id]['quantity'] <= 0) {
                    unset($cart[$id]);
                }
            }
        }

        Session::put('cart', $cart);
        return redirect()->route('cart')->with('success', 'Product quantity updated successfully.');
    }
}