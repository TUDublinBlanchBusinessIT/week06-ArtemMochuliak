<div class="table-responsive">
    <table class="table" id="scorders-table">
        <thead>
        <tr>
            <th>Order Number</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Total Price</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($scorders as $scorder)
            <tr>
                <td>{{ $scorder->order_number }}</td>
            <td>{{ $scorder->customer_name }}</td>
            <td>{{ $scorder->customer_email }}</td>
            <td>{{ $scorder->total_price }}</td>
            <td>{{ $scorder->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['scorders.destroy', $scorder->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('scorders.show', [$scorder->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('scorders.edit', [$scorder->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
