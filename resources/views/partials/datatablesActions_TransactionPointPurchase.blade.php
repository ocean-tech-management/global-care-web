@can($viewGate)
    @if($row->type == 1)
        <a class="btn btn-sm btn-primary" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}">
            {{ trans('global.view') }}
        </a>
    @else
        <a class="btn btn-sm btn-primary" href="{{ route('admin.' . $crudRoutePart . '.user-upgrade-show', ['id' => $row->id]) }}">
            {{ trans('global.view') }}
        </a>
    @endif
@endcan
{{--@can($editGate)--}}
{{--    <a class="btn btn-sm btn-info" href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}">--}}
{{--        {{ trans('global.edit') }}--}}
{{--    </a>--}}
{{--@endcan--}}
{{--@can($deleteGate)--}}
{{--    <form action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">--}}
{{--        <input type="hidden" name="_method" value="DELETE">--}}
{{--        <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--        <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">--}}
{{--    </form>--}}
{{--@endcan--}}
