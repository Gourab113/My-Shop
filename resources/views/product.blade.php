<x-layout>
    <style>
        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 250px);
            gap: 20px;
            padding: 20px 0;
        }

        .image {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        .products-card {

            background-color: rgb(231, 234, 237);
            padding: 20px;
            border-radius: 20px;
            border: 1px solid rgb(232, 231, 231);
        }
    </style>
    <button>
        <a href="/add-product">Add New Product</a>
    </button>

    <h1> Products </h1>

    <div class="products-grid">

        @foreach ($products as $product)
            <div class="products-card">
                <h2>{{ $product->name }}</h2>
                <p>Price: {{ $product->price }}</p>
                <p>
                    <strong>Quantity:</strong>
                    {{ $product->quantity }}
                </p>
                <img class="image" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                    width="200">

            </div>
        @endforeach

    </div>



</x-layout>
