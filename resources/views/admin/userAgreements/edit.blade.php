@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.userAgreement.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.user-agreements.update", [$userAgreement->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="agreement_content">{{ trans('cruds.userAgreement.fields.agreement_content') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('agreement_content') ? 'is-invalid' : '' }}" name="agreement_content" id="agreement_content">{!! old('agreement_content', $userAgreement->agreement_content) !!}</textarea>
                    @if($errors->has('agreement_content'))
                        <div class="invalid-feedback">
                            {{ $errors->first('agreement_content') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.userAgreement.fields.agreement_content_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name">{{ trans('cruds.userAgreement.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $userAgreement->name) }}" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.userAgreement.fields.name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="role_id">{{ trans('cruds.userAgreement.fields.role') }}</label>
                    <select class="form-control select2 {{ $errors->has('role') ? 'is-invalid' : '' }}" name="role_id" id="role_id" required>
                        @foreach($roles as $id => $entry)
                            <option value="{{ $id }}" {{ (old('role_id') ? old('role_id') : $userAgreement->role->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('role'))
                        <div class="invalid-feedback">
                            {{ $errors->first('role') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.userAgreement.fields.role_helper') }}</span>
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
        $(document).ready(function () {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function (file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', '{{ route('admin.user-agreements.storeCKEditorImages') }}', true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() { reject(genericErrorText) });
                                        xhr.addEventListener('abort', function() { reject() });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                                            }

                                            $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                                            resolve({ default: response.url });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', '{{ $userAgreement->id ?? 0 }}');
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
    </script>

@endsection
