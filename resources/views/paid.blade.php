<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg text-center">
            <h1 class="text-2xl font-bold mb-4">Payment Successful</h1>
            <p class="mb-4">Thank you for your purchase! Your payment has been successfully processed.</p>
            <a href="{{ route('products.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back to Products</a>
        </div>
    </div>
</body>
</html>