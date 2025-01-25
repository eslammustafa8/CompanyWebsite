@extends('admin.master')

@section('title', __('keywords.update_testmonial'))


@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.update_testmonial') }}</h2>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testmonials.update', ['testmonial' => $testmonial]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <x-form-label field="name"></x-form-label>
                                    <input type="text" id="name" class="form-control"
                                        placeholder="{{ __('keywords.name') }}" name="name"
                                        value="{{ $testmonial->name }}">
                                    <x-validation-error field="name"></x-validation-error>
                                </div>

                                <div class="col-md-6">
                                    <x-form-label field="position"></x-form-label>
                                    <input type="text" id="position" class="form-control"
                                        placeholder="{{ __('keywords.position') }}" name="position" value="{{ $testmonial->position }}">
                                    <x-validation-error field="position"></x-validation-error>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <x-form-label field="image"></x-form-label>
                                    <input  type="file" id="image" class="form-control" name="image">
                                    <x-validation-error field="image"></x-validation-error>

                                    <div class="col-md-12 mt-3">
                                    <x-form-label field="description"></x-form-label>
                                    <textarea id="description" class="form-control" name="description">{{ $testmonial->description }}</textarea>
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
