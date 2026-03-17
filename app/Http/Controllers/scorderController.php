<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\Scorder;
use App\Models\OrderDetail;

class scorderController extends Controller
{
    public function index()
    {
        $scorders = Scorder::all();
        return view('scorders.index')->with('scorders', $scorders);
    }

    public function create()
    {
        return view('scorders.create');
    }

    public function store(Request $request)
    {
        Scorder::create($request->all());
        return redirect()->route('scorders.index');
    }

    public function show($id)
    {
        $scorder = Scorder::find($id);
        return view('scorders.show')->with('scorder', $scorder);
    }

    public function edit($id)
    {
        $scorder = Scorder::find($id);
        return view('scorders.edit')->with('scorder', $scorder);
    }

    public function update(Request $request, $id)
    {
        $scorder = Scorder::find($id);
        $scorder->update($request->all());
        return redirect()->route('scorders.index');
    }

    public function destroy($id)
    {
        $scorder = Scorder::find($id);
        if ($scorder) {
            $scorder->delete();
        }
        return redirect()->route('scorders.index');
    }

    public function checkout()
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            $lineitems = array();

            foreach ($cart as $productid => $qty) {
                $lineitem['product'] = Product::find($productid);
                $lineitem['qty'] = $qty;
                $lineitems[] = $lineitem;
            }

            return view('scorders.checkout')->with('lineitems', $lineitems);
        } else {
            return redirect()->route('products.displaygrid');
        }
    }

    public function placeorder(Request $request)
    {
        $thisOrder = new Scorder();
        $thisOrder->orderdate = now();
        $thisOrder->save();

        $orderID = $thisOrder->id;

        $productids = $request->productid;
        $quantities = $request->quantity;

        for ($i = 0; $i < sizeof($productids); $i++) {
            $thisOrderDetail = new OrderDetail();
            $thisOrderDetail->orderid = $orderID;
            $thisOrderDetail->productid = $productids[$i];
            $thisOrderDetail->quantity = $quantities[$i];
            $thisOrderDetail->save();
        }

        Session::forget('cart');

        return redirect()->route('products.displaygrid');
    }
}