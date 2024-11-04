<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        $items = $request->input('items');
        $total = $request->input('total');

        return view('checkout', compact('items', 'total'));
    }

    public function paid(Request $request)
    {
        Session::forget('cart');

        return redirect()->route('checkout.paid.view')->with('success', 'Thank you for your purchase! Your payment has been successfully processed.');
    }

    public function showPaid()
    {
        return view('paid');
    }
}