@extends('admin.master')

@section('title', __('keywords.show_testmonial'))


@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                    <h2 class="h5 page-title">{{ __('keywords.show_testmonial') }}</h2>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                     

                            <div class="row">
                                <div class="col-md-5">

                                    <label for="name">{{ __('keywords.name') }}</label>
                                    <p class="form-control"> {{ $testmonial->name }}</p>

                                </div>

                                <div class="col-md-5">
                                    <label for="position">{{ __('keywords.position') }}</label>
                                    <div>
                                    <p class="form-control"> {{ $testmonial->name }}</p>
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <label for="image">{{ __('keywords.image') }}</label>
                                    <div>
                                        <img src="{{ asset('storage/testmonials/' . $testmonial->image) }}" 
                                        width="70px" height="70x" class="img-thumbnail">
                                    </div>

                                </div>

                                <div class="col-md-12 mt-3">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <p class="form-control"> {{ $testmonial->description }}</p>

                                </div>
                                
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
