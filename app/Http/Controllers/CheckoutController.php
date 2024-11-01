<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('paid');
    }
}