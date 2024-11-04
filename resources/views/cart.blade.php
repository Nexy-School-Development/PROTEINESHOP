<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Shopping Cart</h1>
        @if(session('success'))
            <div class="bg-green-500 text-white p-2 mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(count($cart) > 0)
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2">Image</th>
                        <th class="py-2">Name</th>
                        <th class="py-2">Price</th>
                        <th class="py-2">Amount</th>
                        <th class="py-2">Total</th>
                        <th class="py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $id => $item)
                        <tr id="cart-item-{{ $id }}">
                            <td class="py-2"><img src="{{ Storage::url($item['image']) }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-cover"></td>
                            <td class="py-2">{{ $item['name'] }}</td>
                            <td class="py-2">${{ $item['price'] }}</td>
                            <td class="py-2" id="quantity-{{ $id }}">{{ $item['quantity'] }}</td>
                            <td class="py-2" id="total-{{ $id }}">${{ $item['price'] * $item['quantity'] }}</td>
                            <td class="py-2">
                                <button type="button" class="bg-red-500 text-white px-2 py-1 rounded" onclick="showRemoveModal({{ $id }}, {{ $item['quantity'] }})">Remove</button>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"></td>
                        <td class="py-2 font-bold">Total Price:</td>
                        <td class="py-2 font-bold" id="total-price">${{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cart)) }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-between items-center">
                <a href="{{ route('products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back to Products</a>
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <input type="hidden" name="total" value="{{ array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cart)) }}">
                    @foreach($cart as $id => $item)
                        <input type="hidden" name="items[{{ $id }}][image]" value="{{ $item['image'] }}">
                        <input type="hidden" name="items[{{ $id }}][name]" value="{{ $item['name'] }}">
                        <input type="hidden" name="items[{{ $id }}][quantity]" value="{{ $item['quantity'] }}">
                        <input type="hidden" name="items[{{ $id }}][price]" value="{{ $item['price'] }}">
                    @endforeach
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Pay</button>
                </form>
            </div>
        @else
            <p>Your cart is empty.</p>
            <p>ㅤ</p>
            <a href="{{ route('products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back to Products</a>
        @endif
    </div>

    <!-- Modal -->
    <div id="removeModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-1/3">
            <h2 class="text-xl font-bold mb-4">Remove Item</h2>
            <form id="removeForm" action="{{ route('cart.update') }}" method="POST">
                @csrf
                <input type="hidden" name="action" value="remove">
                <input type="hidden" name="product_id" id="modalProductId">
                <div class="mb-4">
                    <label for="removeAmount" class="block text-sm font-medium text-gray-700">Amount to Remove</label>
                    <input type="number" id="removeAmount" name="amount" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" min="1">
                </div>
                <div class="flex justify-between items-center">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded" onclick="hideRemoveModal()">Cancel</button>
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Remove</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showRemoveModal(productId, maxQuantity) {
            document.getElementById('modalProductId').value = productId;
            document.getElementById('removeAmount').max = maxQuantity;
            document.getElementById('removeAmount').value = maxQuantity;
            document.getElementById('removeModal').classList.remove('hidden');
        }

        function hideRemoveModal() {
            document.getElementById('removeModal').classList.add('hidden');
        }
    </script>
</body>
</html>