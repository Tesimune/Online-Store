<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Product\CreateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function cart(){
        return view('product.cart');
    }


    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(CreateRequest $request)
    {
        $validated_data = $request->validated();
        $image = Storage::put('public/images', $request->validated('thumbnail'));
        $validated_data['thumbnail'] = str_replace('public', 'storage', $image);
        Product::create($validated_data);
        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(CreateRequest $request, Product $product)
    {
        $validated_data = $request->validated();
        $product->update($validated_data);
        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
