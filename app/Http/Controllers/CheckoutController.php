<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        $total = $request->input('total');

        return redirect()->route('checkout')->with('success', 'Payment successful!');
    }
}