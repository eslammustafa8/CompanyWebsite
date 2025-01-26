@extends('admin.master')

@section('title', __('keywords.add_new_member'))


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <!-- Page Title Section -->
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-4">
                <h2 class="h5 page-title">{{ __('keywords.add_new_member') }}</h2>
            </div>

            <!-- Card Section -->
            <div class="card shadow">
                <div class="card-body">
                    <!-- Form Section -->
                    <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Row for Input Fields -->
                        <div class="row">
                            <!-- Name Field -->
                            <div class="col-md-6 mb-3">
                                <x-form-label field="name"></x-form-label>
                                <input type="text" id="name" class="form-control"
                                    placeholder="{{ __('keywords.name') }}" name="name">
                                <x-validation-error field="name"></x-validation-error>
                            </div>

                            <!-- Position Field -->
                            <div class="col-md-6 mb-3">
                                <x-form-label field="position"></x-form-label>
                                <input type="text" id="position" class="form-control"
                                    placeholder="{{ __('keywords.position') }}" name="position">
                                <x-validation-error field="position"></x-validation-error>
                            </div>

                            <!-- Facebook Field -->
                            <div class="col-md-4 mb-3">
                                <x-form-label field="facebook"></x-form-label>
                                <input type="text" id="facebook" class="form-control"
                                    placeholder="{{ __('keywords.facebook') }}" name="facebook">
                                <x-validation-error field="facebook"></x-validation-error>
                            </div>

                            <!-- Whatsapp Field -->
                            <div class="col-md-4 mb-3">
                                <x-form-label field="whatsapp"></x-form-label>
                                <input type="text" id="whatsapp" class="form-control"
                                    placeholder="{{ __('keywords.whatsapp') }}" name="whatsapp">
                                <x-validation-error field="whatsapp"></x-validation-error>
                            </div>

                            <!-- linked in Field -->
                            <div class="col-md-4 mb-3">
                                <x-form-label field="linkedin"></x-form-label>
                                <input type="text" id="linkedin" class="form-control"
                                    placeholder="{{ __('keywords.linkedin') }}" name="linkedin">
                                <x-validation-error field="linkedin"></x-validation-error>
                            </div>
                        </div>

                        <!-- Image Upload Field -->
                        <div class="mb-3">
                            <x-form-label field="image"></x-form-label>
                            <input type="file" id="image" class="form-control" name="image">
                            <x-validation-error field="image"></x-validation-error>
                        </div>

                        <!-- Description Field -->
                        <div class="mb-3">
                            <x-form-label field="description"></x-form-label>
                            <textarea id="description" class="form-control" name="description"
                                rows="4">{{ __('keywords.description') }}</textarea>
                            <x-validation-error field="description"></x-validation-error>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">{{ __('keywords.submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection