@extends('admin.master')

@section('title', __('keywords.feature'))


@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">

                    <h2 class="h5 page-title">{{ __('keywords.feature') }}</h2>

                    <div>

                        <x-action-button href="{{ route('admin.feature.create') }}" type="create"></x-action-button>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    {{-- <th>{{ __('keywords.description') }}</th> --}}
                                    <th width="10%">{{ __('keywords.icon') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>

                                </tr>
                            </thead>
                            <tbody>

                                @if (count($features) > 0)
                                    @foreach ($features as $key => $feature)
                                        <tr>
                                            <td>{{ $features->firstItem() + $loop->index }}</td>
                                            <td>{{ $feature->title }}</td>
                                            {{-- <td>{{ $feature->description }}</td> --}}
                                            <td>
                                                <i class="{{ $feature->icon }} fa-2x"></i>
                                            <td>

                                                <x-action-button
                                                    href="{{ route('admin.feature.edit', ['feature' => $feature]) }}"
                                                    type="edit"></x-action-button>
                                                <x-action-button
                                                    href="{{ route('admin.feature.show', ['feature' => $feature]) }}"
                                                    type="show"></x-action-button>


                                                <x-delete-button :href="route('admin.feature.destroy', ['feature' => $feature])"
                                                    id="{{ $feature->id }}"></x-delete-button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif

                            </tbody>
                        </table>
                        {{ $features->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
