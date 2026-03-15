<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return view('products.index')->with('products', $products);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index');
        }
        return view('products.show')->with('product', $product);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index');
        }
        return view('products.edit')->with('product', $product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index');
        }
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }
        return redirect()->route('products.index');
    }

    public function displayGrid(Request $request)
    {
        $products = Product::all();
        return view('products.displaygrid')->with('products', $products);
    }
}