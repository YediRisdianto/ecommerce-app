<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::with('childCategory')->get();

        return view('Admin.products.index', compact('products'));
    }

    public function create()
    {
        $childCategories = ChildCategory::all();

        return view('Admin.products.add', compact('childCategories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'category_child_id' => 'nullable|exists:child_categories,id',
            'name'              => 'required|string|max:255',
            'description'       => 'required|string',
            'weight'            => 'required|integer|min:0',
            'regular_price'     => 'required|numeric|min:0',
            'sale_price'        => 'nullable|numeric|min:0',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'status'            => 'required|in:Active,Inactive',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $validatedData['image'] = $path;
        }

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }


    public function show(Product $product)
    {
        $product->load('childCategory');

        return view('Admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $childCategories = ChildCategory::all();

        return view('Admin.products.edit', compact('product', 'childCategories'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'category_child_id' => 'nullable|exists:child_categories,id',
            'name'              => 'required|string|max:255',
            'description'       => 'required|string',
            'weight'            => 'required|integer|min:0',
            'regular_price'     => 'required|integer|min:0',
            'sale_price'        => 'nullable|integer|min:0',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'status'            => 'required|in:Active,Inactive',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $path = $request->file('image')->store('products', 'public');
            $validatedData['image'] = $path;
        }

        $product->update($validatedData);

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $product)
    {
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
