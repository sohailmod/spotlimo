@extends('adminlte::page')

@section('title', 'Payment')

@section('content_header')
    <h1>Payment</h1>
@stop

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Payments</h3>
        </div>
        <div class="card-body">
            <table id="payment-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Payment Id</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Charge Id</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#payment-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= route('admin.payments.show') ?>",
                "type": "POST",
                "data": {
                    "_token": "{{ csrf_token() }}"
                },
            },
            "columns": [{
                    "data": "id",
                    "searchable": true,
                    "orderable": false
                },
                {
                    "data": "amount",
                    "searchable": true,
                    "orderable": true
                },

                {
                    "data": "status",
                    "searchable": true,
                    "orderable": true
                },
                {
                    "data": "charge_id",
                    "searchable": true,
                    "orderable": true
                },
            ]
        });
    </script>

@endsection
