@extends('layouts.admin')
@section('content')
@can('transaction_bonu_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.transaction-bonus.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.transactionBonu.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.transactionBonu.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-TransactionBonu">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.transactionBonu.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.transactionBonu.fields.transaction') }}
                    </th>
                    <th>
                        {{ trans('cruds.transactionBonu.fields.admin') }}
                    </th>
                    <th>
                        {{ trans('cruds.transactionBonu.fields.user') }}
                    </th>
                    <th>
                        {{ trans('cruds.transactionBonu.fields.title') }}
                    </th>
                    <th>
                        {{ trans('cruds.transactionBonu.fields.remark') }}
                    </th>
                    <th>
                        {{ trans('cruds.transactionBonu.fields.amount') }}
                    </th>
                    <th>
                        {{ trans('cruds.transactionBonu.fields.type') }}
                    </th>
                    <th>
                        {{ trans('cruds.transactionBonu.fields.status') }}
                    </th>
                    <th>
                        {{ trans('cruds.transactionBonu.fields.given_at') }}
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
@can('transaction_bonu_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.transaction-bonus.massDestroy') }}",
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
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.transaction-bonus.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'transaction', name: 'transaction' },
{ data: 'admin_name', name: 'admin.name' },
{ data: 'user_name', name: 'user.name' },
{ data: 'title', name: 'title' },
{ data: 'remark', name: 'remark' },
{ data: 'amount', name: 'amount' },
{ data: 'type', name: 'type' },
{ data: 'status', name: 'status' },
{ data: 'given_at', name: 'given_at' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-TransactionBonu').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection