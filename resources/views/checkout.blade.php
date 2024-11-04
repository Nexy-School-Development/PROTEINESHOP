<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Checkout</h1>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-1/2 px-4 mb-4 lg:mb-0">
                <form id="checkout-form" class="space-y-4 max-w-lg mx-auto" action="{{ route('checkout.paid') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    <div>
                        <label for="surname" class="block text-sm font-medium text-gray-700">Surname</label>
                        <input type="text" id="surname" name="surname" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" id="address" name="address" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <input type="text" id="country" name="country" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    <div>
                        <label for="region" class="block text-sm font-medium text-gray-700">Region</label>
                        <input type="text" id="region" name="region" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('cart') }}" class="bg-gray-500 text-white px-4 py-2">Back to Cart</a>
                    </div>
                    <div class="mt-4 text-right">
                        <button type="submit" class="bg-green-500 text-white px-4 py-2">Pay Products</button>
                    </div>
                </form>
            </div>
            <div class="w-full lg:w-1/2 px-4">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2">Image</th>
                            <th class="py-2">Name</th>
                            <th class="py-2">Quantity</th>
                            <th class="py-2">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $id => $item)
                        <tr>
                            <td class="py-2"><img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-cover"></td>
                            <td class="py-2">{{ $item['name'] }}</td>
                            <td class="py-2">{{ $item['quantity'] }}</td>
                            <td class="py-2">${{ $item['price'] * $item['quantity'] }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" class="py-2 font-bold">Total Price:</td>
                            <td class="py-2 font-bold">${{ $total }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>