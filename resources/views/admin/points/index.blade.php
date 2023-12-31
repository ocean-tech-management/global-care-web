@extends('layouts.admin')
@section('content')
    @can('point_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.points.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.point.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.point.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Point">
                <thead>
                <tr>
                    <th>
                        {{ trans('cruds.point.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.point.fields.user') }}
                    </th>
                    <th>
                        {{ trans('cruds.point.fields.point_balance') }}
                    </th>
                    <th>
                        {{ trans('cruds.point.fields.point_manager_balance') }}
                    </th>
                    <th>
                        {{ trans('cruds.point.fields.point_executive_balance') }}
                    </th>
                    <th>
                        {{ trans('cruds.point.fields.point_bonus_balance') }}
                    </th>
                    <th>
                        {{ trans('cruds.point.fields.voucher_balance') }}
                    </th>
                    <th>
                        {{ trans('cruds.point.fields.shipping_balance') }}
                    </th>
                    <th>
                        {{ trans('cruds.point.fields.cash_voucher_balance') }}
                    </th>
                    <th>
                        {{ trans('cruds.point.fields.pv_balance') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>



@endsection
@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('point_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.points.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
                        return entry.id
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: { ids: ids, _method: 'DELETE' }})
                            .done(function () { location.reload() })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            let dtOverrideGlobals = {
                // buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
                aaSorting: [],
                ajax: "{{ route('admin.points.index') }}",
                columns: [
                    // { data: 'placeholder', name: 'placeholder' },
                    { data: 'id', name: 'id', visible: false },
                    { data: 'user_name', name: 'user.name' },
                    { data: 'point_balance', name: 'point_balance' },
                    { data: 'point_manager_balance', name: 'point_manager_balance' },
                    { data: 'point_executive_balance', name: 'point_executive_balance' },
                    { data: 'point_bonus_balance', name: 'point_bonus_balance' },
                    { data: 'voucher_balance', name: 'voucher_balance' },
                    { data: 'shipping_balance', name: 'shipping_balance' },
                    { data: 'cash_voucher_balance', name: 'cash_voucher_balance' },
                    { data: 'pv_balance', name: 'pv_balance' },
                    { data: 'actions', name: '{{ trans('global.actions') }}' }
                ],
                orderCellsTop: true,
                order: [[ 0, 'desc' ]],
                pageLength: 10,
            };
            let table = $('.datatable-Point').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        });

    </script>
@endsection
