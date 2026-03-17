@extends('layouts.app')
@section('content')

<h2>Place Order</h2>

<form action="{{ route('scorder.placeorder') }}" method="POST">
@csrf

<table class="table table-bordered">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Description</th>
<th>Colour</th>
<th>Price</th>
<th>Quantity</th>
</tr>
</thead>

<tbody>
@foreach ($lineitems as $lineitem)
@php $product = $lineitem['product']; @endphp
<tr>
<td><input type="text" name="productid[]" value="{{ $product->id }}" readonly style="border:none"></td>
<td>{{ $product->name }}</td>
<td>{{ $product->description }}</td>
<td>{{ $product->colour }}</td>
<td>{{ $product->price }}</td>
<td><input type="text" name="quantity[]" value="{{ $lineitem['qty'] }}" readonly style="border:none"></td>
</tr>
@endforeach
</tbody>

</table>

<button type="submit" class="btn btn-primary">Submit Order</button>

</form>

@endsection