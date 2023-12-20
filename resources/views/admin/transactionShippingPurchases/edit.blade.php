@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.transactionShippingPurchase.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.transaction-shipping-purchases.update", [$transactionShippingPurchase->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="transaction">{{ trans('cruds.transactionShippingPurchase.fields.transaction') }}</label>
                <input class="form-control {{ $errors->has('transaction') ? 'is-invalid' : '' }}" type="text" name="transaction" id="transaction" value="{{ old('transaction', $transactionShippingPurchase->transaction) }}">
                @if($errors->has('transaction'))
                    <div class="invalid-feedback">
                        {{ $errors->first('transaction') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.transaction_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.transactionShippingPurchase.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $transactionShippingPurchase->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="shipping_package_id">{{ trans('cruds.transactionShippingPurchase.fields.shipping_package') }}</label>
                <select class="form-control select2 {{ $errors->has('shipping_package') ? 'is-invalid' : '' }}" name="shipping_package_id" id="shipping_package_id">
                    @foreach($shipping_packages as $id => $entry)
                        <option value="{{ $id }}" {{ (old('shipping_package_id') ? old('shipping_package_id') : $transactionShippingPurchase->shipping_package->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('shipping_package'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shipping_package') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.shipping_package_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="point">{{ trans('cruds.transactionShippingPurchase.fields.point') }}</label>
                <input class="form-control {{ $errors->has('point') ? 'is-invalid' : '' }}" type="number" name="point" id="point" value="{{ old('point', $transactionShippingPurchase->point) }}" step="0.01">
                @if($errors->has('point'))
                    <div class="invalid-feedback">
                        {{ $errors->first('point') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.point_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.transactionShippingPurchase.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $transactionShippingPurchase->price) }}" step="0.01">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_method_id">{{ trans('cruds.transactionShippingPurchase.fields.payment_method') }}</label>
                <select class="form-control select2 {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" name="payment_method_id" id="payment_method_id">
                    @foreach($payment_methods as $id => $entry)
                        <option value="{{ $id }}" {{ (old('payment_method_id') ? old('payment_method_id') : $transactionShippingPurchase->payment_method->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_method'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_method') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.transactionShippingPurchase.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\TransactionShippingPurchase::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $transactionShippingPurchase->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="receipt">{{ trans('cruds.transactionShippingPurchase.fields.receipt') }}</label>
                <div class="needsclick dropzone {{ $errors->has('receipt') ? 'is-invalid' : '' }}" id="receipt-dropzone">
                </div>
                @if($errors->has('receipt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('receipt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.receipt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_verified_at">{{ trans('cruds.transactionShippingPurchase.fields.payment_verified_at') }}</label>
                <input class="form-control datetime {{ $errors->has('payment_verified_at') ? 'is-invalid' : '' }}" type="text" name="payment_verified_at" id="payment_verified_at" value="{{ old('payment_verified_at', $transactionShippingPurchase->payment_verified_at) }}">
                @if($errors->has('payment_verified_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_verified_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.payment_verified_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="admin_id">{{ trans('cruds.transactionShippingPurchase.fields.admin') }}</label>
                <select class="form-control select2 {{ $errors->has('admin') ? 'is-invalid' : '' }}" name="admin_id" id="admin_id">
                    @foreach($admins as $id => $entry)
                        <option value="{{ $id }}" {{ (old('admin_id') ? old('admin_id') : $transactionShippingPurchase->admin->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('admin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('admin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.admin_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gateway_response">{{ trans('cruds.transactionShippingPurchase.fields.gateway_response') }}</label>
                <textarea class="form-control {{ $errors->has('gateway_response') ? 'is-invalid' : '' }}" name="gateway_response" id="gateway_response">{{ old('gateway_response', $transactionShippingPurchase->gateway_response) }}</textarea>
                @if($errors->has('gateway_response'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gateway_response') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.gateway_response_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.transactionShippingPurchase.fields.gateway_status') }}</label>
                <select class="form-control {{ $errors->has('gateway_status') ? 'is-invalid' : '' }}" name="gateway_status" id="gateway_status">
                    <option value disabled {{ old('gateway_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\TransactionShippingPurchase::GATEWAY_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('gateway_status', $transactionShippingPurchase->gateway_status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('gateway_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gateway_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.gateway_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gateway_transaction">{{ trans('cruds.transactionShippingPurchase.fields.gateway_transaction') }}</label>
                <input class="form-control {{ $errors->has('gateway_transaction') ? 'is-invalid' : '' }}" type="text" name="gateway_transaction" id="gateway_transaction" value="{{ old('gateway_transaction', $transactionShippingPurchase->gateway_transaction) }}">
                @if($errors->has('gateway_transaction'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gateway_transaction') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionShippingPurchase.fields.gateway_transaction_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.receiptDropzone = {
    url: '{{ route('admin.transaction-shipping-purchases.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="receipt"]').remove()
      $('form').append('<input type="hidden" name="receipt" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="receipt"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($transactionShippingPurchase) && $transactionShippingPurchase->receipt)
      var file = {!! json_encode($transactionShippingPurchase->receipt) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="receipt" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection