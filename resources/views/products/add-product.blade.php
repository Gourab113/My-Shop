<x-layout>
    <div class="container">
        <h1>Add New Product</h1>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="name">Product Name:</label>
                <input type="text" name="name" id="name" required>
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>

            <div>
                <label for="description">Description:</label>
                <textarea name="description" id="description"></textarea>
                @error('description')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>

            <div>
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" step="0.01" min="0" required>
                @error('price')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>

            <div>
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" min="0" required>
                @error('quantity')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>

            <div>
                <label for="image">Product Image:</label>
                <input type="file" name="image" id="image" accept="image/*">
                @error('image')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>

            <button type="submit">Add Product</button>
        </form>
    </div>
</x-layout>
