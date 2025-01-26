@extends('admin.master')

@section('title', __('keywords.update_company'))


@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.update_company') }}</h2>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.companies.update', ['company' => $company]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <!-- Name Field -->
                                <div class="col-md-6 mb-3">
                                    <x-form-label field="name"></x-form-label>
                                    <input type="text" id="name" class="form-control" placeholder="{{ __('keywords.name') }}" name="name"
                                    value="{{ $company->name }}">
                                    <x-validation-error field="name"></x-validation-error>
                                </div>
                       
                            <!-- Image Upload Field -->
                            <div class="mb-3">
                                <x-form-label field="image"></x-form-label>
                                <input type="file" id="image" class="form-control" name="image" value="{{ $company->name }}">
                                <x-validation-error field="image"></x-validation-error>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="text-end col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary">{{ __('keywords.submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
