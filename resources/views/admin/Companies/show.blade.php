@extends('admin.master')

@section('title', __('keywords.show_company'))


@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <!-- Page Title Section -->
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h2 class="h5 page-title">{{ __('keywords.show_company') }}</h2>
            </div>

            <!-- Card Section -->
            <div class="card shadow">
                <div class="card-body">
                    <!-- company Details -->
                    <div class="row">
                        <!-- Name Field -->
                        <div class="col-md-3 mb-3">
                            <label for="name">{{ __('keywords.name') }}</label>
                            <p class="form-control">{{ $company->name }}</p>
                        </div>

                      
                  
                        <!-- Image Field -->
                        <div class="col-md-12 mb-3 ">
                            <label for="image">{{ __('keywords.image') }}</label>
                            <div>
                                <img src="{{ asset('storage/companies/' . $company->image) }}" width="250px" height="250px"
                                    class="img-thumbnail">
                            </div>
                        </div>

            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
