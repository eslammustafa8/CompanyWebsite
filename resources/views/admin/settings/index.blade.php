@extends('admin.master')

@section('title', __('keywords.update_settings'))


@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.update_settings') }}</h2>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                        <form action="{{ route('admin.settings.update', ['setting' => $setting ]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <!-- Name Field -->
                                <div class="col-md-6 mb-3">
                                    <x-form-label field="name"></x-form-label>
                                    <input type="text" id="name" class="form-control" placeholder="{{ __('keywords.name') }}" name="name"
                                    value="{{ $setting->name }}">
                                    <x-validation-error field="name"></x-validation-error>
                                </div>
                       
                    
                                    <!-- Position Field -->
                                    <div class="col-md-6 mb-3">
                                        <x-form-label field="email"></x-form-label>
                                        <input type="email" id="email" class="form-control" placeholder="{{ __('keywords.email') }}" name="email"
                                            value="{{ $setting->email }}">
                                        <x-validation-error field="email"></x-validation-error>
                                    </div>
                                    
                                    <!-- Facebook Field -->
                                    <div class="col-md-4 mb-3">
                                        <x-form-label field="facebook"></x-form-label>
                                        <input type="url" id="facebook" class="form-control" placeholder="{{ __('keywords.facebook') }} "
                                            value="{{ $setting->facebook }}" name="facebook">
                                        <x-validation-error field="facebook"></x-validation-error>
                                    </div>
                                    
                                    <!-- Whatsapp Field -->
                                    <div class="col-md-4 mb-3">
                                        <x-form-label field="whatsapp"></x-form-label>
                                        <input type="URL" id="whatsapp" class="form-control" placeholder="{{ __('keywords.whatsapp') }}" name="whatsapp"
                                            value="{{ $setting->whatsapp }}">
                                        <x-validation-error field="whatsapp"></x-validation-error>
                                    </div>
                                    
                                    <!-- linked in Field -->
                                    <div class="col-md-4 mb-3">
                                        <x-form-label field="linkedin"></x-form-label>
                                        <input type="url" id="linkedin" class="form-control" placeholder="{{ __('keywords.linkedin') }}" name="linkedin"
                                            value="{{ $setting->linkedin }}">
                                        <x-validation-error field="linkedin"></x-validation-error>
                                    </div>
                                    {{-- youtube --}}
                                    <div class="col-md-4 mb-3">
                                        <x-form-label field="youtube"></x-form-label>
                                        <input type="url" id="youtube" class="form-control" placeholder="{{ __('keywords.youtube') }}" name="youtube"
                                            value="{{ $setting->youtube }}">
                                        <x-validation-error field="youtube"></x-validation-error>
                                    </div>
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
