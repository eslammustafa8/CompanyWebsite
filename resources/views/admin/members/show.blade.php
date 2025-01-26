@extends('admin.master')

@section('title', __('keywords.show_member'))


@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <!-- Page Title Section -->
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h2 class="h5 page-title">{{ __('keywords.show_member') }}</h2>
            </div>

            <!-- Card Section -->
            <div class="card shadow">
                <div class="card-body">
                    <!-- Member Details -->
                    <div class="row">


                        <!-- Image Field -->
                        <div class="col-md-12 mb-3">
                            <label for="image">{{ __('keywords.image') }}</label>
                            <div>
                                <img src="{{ asset('storage/members/' . $member->image) }}" width="200px" height="200px"
                                    class="img-thumbnail">
                            </div>
                        </div>
                        <!-- Name Field -->
                        <div class="col-md-6 mb-3">
                            <label for="name">{{ __('keywords.name') }}</label>
                            <p class="form-control">{{ $member->name }}</p>
                        </div>

                        <!-- Position Field -->
                        <div class="col-md-6 mb-3">
                            <label for="position">{{ __('keywords.position') }}</label>
                            <p class="form-control">{{ $member->position }}</p>
                        </div>

                        <!-- Facebook Field -->
                        <div class="col-md-4 mb-3">
                            <label for="facebook">{{ __('keywords.facebook') }}</label>
                            <p class="form-control">
                                <a href="{{ $member->facebook }}" target="_blank">facebook</a>
                            </p>
                        </div>

                        <!-- Whatsapp Field -->
                        <div class="col-md-4 mb-3">
                            <label for="Whatsapp">{{ __('keywords.whatsapp') }}</label>
                            <p class="form-control">
                                <a href="https://wa.me/{{ $member->whatsapp }}"
                                    target="_blank">{{ $member->whatsapp }}</a>
                            </p>
                        </div>

                        <!-- Twitter Field -->
                        <div class="col-md-4 mb-3">
                            <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                            <p class="form-control">
                                <a href="{{ $member->linkedin }}" target="_blank">linkedin</a>
                            </p>
                        </div>



                        <!-- Description Field -->
                        <div class="col-md-12 mb-3">
                            <label for="description">{{ __('keywords.description') }}</label>
                            <p class="form-control">{{ $member->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection