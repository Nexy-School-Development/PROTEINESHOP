<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function create()
    {
        return view('CRUD.Create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
        ]);

        $path = $request->file('image')->store('products', 'public');

        $product = new product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->image = $path;
        $product->price = $request->input('price');
        $product->save();

        return Redirect::to('/dashboard')->with('success', 'product successfully deleted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    public function edit(product $product)
    {
        $product = product::find($product->id);
        return view('CRUD.Edit', compact('product'));

    }

    public function update(Request $request, product $product)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
        }

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        $product->save();

        return Redirect::to('/dashboard')->with('success', 'product successfully deleted!');
    }

    public function destroy(product $product)
    {
        $product = product::find($product->id);
        $product->delete();

        return Redirect::to('/dashboard')->with('success', 'product successfully deleted!');
    }
}
