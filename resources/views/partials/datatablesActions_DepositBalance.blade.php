@can($viewGate)
    <a class="btn btn-sm btn-primary" href="{{ route('admin.reports.desposit-balance-detail', $row->user_id) }}">
        {{ trans('global.view') }} {{ trans('cruds.report.fields.detail') }}
    </a>
@endcan

