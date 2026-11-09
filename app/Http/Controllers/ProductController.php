<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function viewProducts(){
            
        $products = Product::get();
        return view('product', compact('products'));
    }

    public function addProduct(){
        return view('products.add-product');
    }

     public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image',
        ]);

        // Upload image
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('products', 'public');
        }

        // Save product
        Product::create($validated);

        // Redirect with success message
        return redirect('/products')
            ->with('success', 'Product added successfully!');
    }
}
