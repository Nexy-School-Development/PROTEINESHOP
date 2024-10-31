@extends('components.layout')

@section('content')
    <h1 class=" uppercase leading-none text-center">Edit this product</h1>

    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data"
        class=" flex flex-col flex-wrap-reverse content-center w-1/2 mx-auto mt-10 text-text text-xl border-2 rounded-md">
        @csrf
        @method('PUT')

        <input type="text" name="name" id="name" placeholder="product name" value="{{ $product->name }}"
            class="uppercase text-center placeholder:text-text m-5 p-2  border-2 rounded-md">

        <textarea name="description" id="description" placeholder="product description" rows="4"
            class="uppercase text-center p-2 m-5  placeholder:text-text border-2 rounded-md">{{ $product->description }}</textarea>

        <input type="number" name="price" id="price" placeholder="product price" value="{{ $product->price }}">

        <input type="file" name="image" id="image" class="uppercase text-center m-5  p-2">

        <button type="submit" class="uppercase text-center m-5 p-2  border-2 rounded-md">Edit
            product</button>
    </form>

    <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="text-center mt-5">
        @csrf
        @method('DELETE')
        <button type="submit" class=" text-4xl uppercase text-center m-5 p-2  border-2 rounded-md text-text">Delete
            product</button>
    </form>

    <a href="{{ route('product.index') }}">
        <h2 class="text-4xl text-subtitle uppercase leading-none text-center mt-5">Go back to
            product</h2>
    </a>
@endsection
