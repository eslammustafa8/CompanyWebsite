@extends('admin.master')

@section('title', __('keywords.companies'))


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h2 class="h5 page-title">{{ __('keywords.companies') }}</h2>
                <div>
                    <x-action-button href="{{ route('admin.companies.create') }}" type="create"></x-action-button>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <x-success-alert></x-success-alert>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="30%">{{ __('keywords.name') }}</th>
                                <th>{{ __('keywords.image') }}</th>
                                <th width="20%">{{ __('keywords.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($companies) > 0)
                                @foreach ($companies as $key => $company)
                                    <tr>
                                        <td>{{ $companies->firstItem() + $loop->index }}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>
                                            <img src="{{ asset('storage/companies/' . $company->image) }}" width="60px"
                                                height="60px" class="img-thumbnail">
                                        </td>
                                        <td>
                                            <div class="d-flex ">
                                                <x-action-button
                                                    href="{{ route('admin.companies.edit', ['company' => $company]) }}"
                                                    type="edit"></x-action-button>
                                                <x-action-button
                                                    href="{{ route('admin.companies.show', ['company' => $company]) }}"
                                                    type="show"></x-action-button>
                                                <x-delete-button :href="route('admin.companies.destroy', ['company' => $company])" id="{{ $company->id }}"></x-delete-button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">
                                        <x-empty-alert></x-empty-alert>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $companies->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection