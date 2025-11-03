<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(5);
        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name'=> 'required',
            'color'=> 'required',
            'price'=> 'required|numeric',
            'image'=> 'nullable|image|max:2048',
        ]);

        $image = $request->file('image');
        $image->storeAs('products', $image->hashName());

        Product::create([
            'name'=> $request->name,
            'color'=> $request->color,
            'price'=> $request->price,
            'image'=> $image->hashName(),
        ]);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'name'=> 'required',
            'color'=> 'required',
            'price'=> 'required|numeric',
            'image'=> 'nullable|image|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::delete('products/'.$product->image);

            $image = $request->file('image');
            $image->storeAs('products', $image->hashName());

            $product->update([
                'name'=> $request->name,
                'color'=> $request->color,
                'price'=> $request->price,
                'image'=> $image->hashName(),
            ]);
        } else {
            $product->update([
                'name'=> $request->name,
                'color'=> $request->color,
                'price'=> $request->price,
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        Storage::delete('products/'.$product->image);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
