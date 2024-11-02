@extends('components.layout')

@section('content')
    <h1 class="text-7xl uppercase leading-none text-center">Create a new product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
        class=" flex flex-col flex-wrap-reverse content-center w-1/2 mx-auto mt-10 text-text text-xl border-2 rounded-md">
        @csrf

        <input type="text" name="name" id="name" placeholder="Product name"
            class="uppercase text-center placeholder:text-text m-5 p-2 border-2 rounded-md" required>

        <textarea name="description" id="description" placeholder="Product description"
            class="uppercase text-center p-2 m-5  placeholder:text-text border-2 rounded-md" rows="4" required></textarea>

        <input type="number" name="price" id="price" placeholder="Product price" required>

        <input type="file" name="image" id="image" class="uppercase text-center m-5  p-2" required>

        <button type="submit" class="uppercase text-center m-5 p-2 border-2 rounded-md">Create
            Product</button>
    </form>
    <a href="/dashboard">
        <h2 class="text-4xl uppercase leading-none text-center mt-5">Go back to
            the dashboard</h2>
    </a>
@endsection
