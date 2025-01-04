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
                        <form action="{{ route('admin.services.update',['service'=>$service]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <label for="title">{{ __('keywords.title') }}</label>
                                    <input type="text" id="title" class="form-control"
                                        placeholder="{{ __('keywords.title') }}" name="title" value="{{ $service->title }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="icon">{{ __('keywords.icon') }}</label>
                                    <input type="text" id="icon" class="form-control"
                                        placeholder="{{ __('keywords.icon') }}" name="icon" value="{{ $service->icon }}">
                                    @error('icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <textarea id="description" class="form-control"  value="{{ $service->description }}" name="description">{{ __('keywords.description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-md-2">
                                    <button type="submit" 
                                        class="btn btn-success btn-sm mt-2">{{ __('keywords.update') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
