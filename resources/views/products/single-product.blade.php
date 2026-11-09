<x-layout>

    <style>
        .product {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .image {
            width: 300px;
            height: 300px;
            object-fit: cover;
        }

        .cart-btn {
            background-color: #16a34a;
        }

        .cart-btn {
            padding: 5px;
            text-decoration: none;
            font-size: 20px;
            margin: 5px;
            border-radius: 10px;
            cursor: pointer;
        }

        .link {
            text-decoration: none;
            color: white;
        }

        .buttons {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
    </style>

    <div class="product">

        <h1>{{ $product->name }}</h1>

        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="image">

        <h3>Product Details</h3>

        <p><strong>Name:</strong> {{ $product->name }}</p>

        <p><strong>Description:</strong> {{ $product->description ?? 'No description available' }}</p>

        <p><strong>Price:</strong> ৳{{ number_format($product->price, 2) }}</p>

        <p><strong>Quantity:</strong> {{ $product->quantity }}</p>

        <div class="buttons">
            <button class="cart-btn">
                <a class="link" href="/cart/add/{{ $product->id }}">
                    Add to Cart
                </a>
            </button>


        </div>
    </div>

</x-layout>
