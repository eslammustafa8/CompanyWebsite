@extends('admin.master')

@section('title', __('keywords.show_service'))


@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.show_service') }}</h2>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                     

                            <div class="row">
                                <div class="col-md-6">

                                    <label for="title">{{ __('keywords.title') }}</label>
                                    <p class="form-control"> {{ $service->title }}</p>

                                </div>

                                <div class="col-md-6">
                                    <label for="icon">{{ __('keywords.icon') }}</label>
                                    <div>
                                        <i class="{{ $service->icon }} fa-2x"></i>
                                    </div>

                                </div>

                                <div class="col-md-12 mt-3">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <p class="form-control"> {{ $service->description }}</p>

                                </div>
                                
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
