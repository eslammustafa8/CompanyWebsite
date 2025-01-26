@extends('admin.master')

@section('title', __('keywords.members'))


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h2 class="h5 page-title">{{ __('keywords.members') }}</h2>
                <div>
                    <x-action-button href="{{ route('admin.members.create') }}" type="create"></x-action-button>
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
                            @if (count($members) > 0)
                                @foreach ($members as $key => $member)
                                    <tr>
                                        <td>{{ $members->firstItem() + $loop->index }}</td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->position }}</td>
                                        <td>
                                            <img src="{{ asset('storage/members/' . $member->image) }}" width="50px"
                                                height="50px" class="img-thumbnail">
                                        </td>
                                        <td>
                                            <div class="d-flex ">
                                                <x-action-button
                                                    href="{{ route('admin.members.edit', ['member' => $member]) }}"
                                                    type="edit"></x-action-button>
                                                <x-action-button
                                                    href="{{ route('admin.members.show', ['member' => $member]) }}"
                                                    type="show"></x-action-button>
                                                <x-delete-button :href="route('admin.members.destroy', ['member' => $member])" id="{{ $member->id }}"></x-delete-button>
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
                    {{ $members->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
