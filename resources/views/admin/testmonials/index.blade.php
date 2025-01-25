@extends('admin.master')

@section('title', __('keywords.testmonial'))


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h2 class="h5 page-title">{{ __('keywords.testmonial') }}</h2>
                <div>
                    <x-action-button href="{{ route('admin.testmonials.create') }}" type="create"></x-action-button>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <x-success-alert></x-success-alert>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="15%">{{ __('keywords.name') }}</th>
                                <th width="20%">{{ __('keywords.position') }}</th>
                                <th width="20%">{{ __('keywords.image') }}</th>
                                <th width="20%">{{ __('keywords.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($testmonials) > 0)
                                @foreach ($testmonials as $key => $testmonial)
                                    <tr>
                                        <td>{{ $testmonials->firstItem() + $loop->index }}</td>
                                        <td>{{ $testmonial->name }}</td>
                                        <td>{{ $testmonial->position }}</td>
                                        <td>
                                            <img src="{{ asset('storage/testmonials/' . $testmonial->image) }}" width="50px"
                                                height="50px" class="img-thumbnail">
                                        </td>
                                        <td>
                                            <div class="d-flex ">
                                                <x-action-button
                                                    href="{{ route('admin.testmonials.edit', ['testmonial' => $testmonial]) }}"
                                                    type="edit"></x-action-button>
                                                <x-action-button
                                                    href="{{ route('admin.testmonials.show', ['testmonial' => $testmonial]) }}"
                                                    type="show"></x-action-button>
                                                <x-delete-button :href="route('admin.testmonials.destroy', ['testmonial' => $testmonial])" id="{{ $testmonial->id }}"></x-delete-button>
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
                    {{ $testmonials->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
