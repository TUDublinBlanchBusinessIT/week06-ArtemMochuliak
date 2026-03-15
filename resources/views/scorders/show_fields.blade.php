<!-- Order Number Field -->
<div class="col-sm-12">
    {!! Form::label('order_number', 'Order Number:') !!}
    <p>{{ $scorder->order_number }}</p>
</div>

<!-- Customer Name Field -->
<div class="col-sm-12">
    {!! Form::label('customer_name', 'Customer Name:') !!}
    <p>{{ $scorder->customer_name }}</p>
</div>

<!-- Customer Email Field -->
<div class="col-sm-12">
    {!! Form::label('customer_email', 'Customer Email:') !!}
    <p>{{ $scorder->customer_email }}</p>
</div>

<!-- Total Price Field -->
<div class="col-sm-12">
    {!! Form::label('total_price', 'Total Price:') !!}
    <p>{{ $scorder->total_price }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $scorder->status }}</p>
</div>

