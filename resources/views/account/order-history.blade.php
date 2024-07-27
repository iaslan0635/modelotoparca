@extends('layouts.master')
@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--after-header"></div>
        <div class="block">
            <div class="container container--max--xl">
                <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                        @include('account.partials.navigation')
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <h5>Order History</h5>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-table">
                                <div class="table-responsive-sm">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Sipariş</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('order-details', $order) }}">#{{ $order->id }}</a>
                                                </td>
                                                <td>{{ $order->created_at->diffForHumans() }}</td>
                                                <td>{{ __("status.". $order->payment_status) }}</td>
                                                <td>{{ count($order->items) }} ürün için {{ format_money($order->items()->sum('price')) }}</td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm" data-cancel-order-id="{{ $order->id }}">İptal et</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-footer">
                                {{ $orders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>
    <!-- site__body / end -->
@endsection

@push('scripts')
    <script defer>
        $('button[data-cancel-order-id]').click(function () {
            if (!confirm('Siparişi iptal etmek istediğinize emin misiniz?')) return
            let orderId = $(this).data('cancel-order-id')
            let button = $(this)
            $.ajax({
                url: '{{ route('order.cancel') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    order_id: orderId
                },
                success: () => button.closest('tr').remove()
            })
        })
    </script>
@endpush
