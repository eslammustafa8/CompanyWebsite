@extends('admin.master')

@section('title', __('keywords.update_service'))


@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.update_service') }}</h2>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.services.update', ['service' => $service]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <x-form-label field="title"></x-form-label>
                                    <input type="text" id="title" class="form-control"
                                        placeholder="{{ __('keywords.title') }}" name="title"
                                        value="{{ $service->title }}">
                                    <x-validation-error field="title"></x-validation-error>
                                </div>

                                <div class="col-md-6">
                                    <x-form-label field="icon"></x-form-label>
                                    <input type="text" id="icon" class="form-control"
                                        placeholder="{{ __('keywords.icon') }}" name="icon" value="{{ $service->icon }}">
                                    <x-validation-error field="icon"></x-validation-error>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <x-form-label field="description"></x-form-label>
                                    <textarea id="description" class="form-control" name="description">{{ $service->description }}</textarea>
                                    <x-validation-error field="description"></x-validation-error>

                                </div>
                                <div class="col-md-2">
                                    <x-submit-button label="update"></x-submit-button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
