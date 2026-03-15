<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Product;


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

    public function additem($productid)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$productid])) {
            $cart[$productid] += 1; // increase quantity
        } else {
            $cart[$productid] = 1; // new product in cart
        }

        Session::put('cart', $cart);

        return Response::json([
            'success' => true,
            'total' => array_sum($cart)
        ], 200);
    }
}