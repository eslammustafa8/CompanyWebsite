@extends('admin.master')

@section('title', __('keywords.subscribers'))


@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">

                    <h2 class="h5 page-title">{{ __('keywords.subscribers') }}</h2>

                    <div>

                        {{-- <x-action-button href="{{ route('admin.subscribers.create') }}" type="create"></x-action-button> --}}
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    {{-- <th>{{ __('keywords.title') }}</th> --}}
                                    {{-- <th>{{ __('keywords.description') }}</th> --}}
                                    <th width="60%">{{ __('keywords.email') }}</th>
                                    <th width="15%">{{ __('keywords.actions') }}</th>

                                </tr>
                            </thead>
                            <tbody>

                                @if (count($subscribers) > 0)
                                    @foreach ($subscribers as $key => $subscriber)
                                        <tr>
                                            <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                            {{-- <td>{{ $subscriber->title }}</td> --}}
                                            {{-- <td>{{ $subscribers->description }}</td> --}}
                                            <td>
                                                {{ $subscriber->email }}
                                            <td>

                                                {{-- <x-action-button
                                                    href="{{ route('admin.subscribers.edit', ['subscribers' => $subscribers]) }}"
                                                    type="edit"></x-action-button> --}}
                                                {{-- <x-action-button
                                                    href="{{ route('admin.subscribers.show', ['subscriber' => $subscriber]) }}"
                                                    type="show"></x-action-button> --}}


                                                <x-delete-button :href="route('admin.subscribers.destroy', ['subscriber' => $subscriber])"
                                                    id="{{ $subscriber->id }}"></x-delete-button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert></x-empty-alert>
                                @endif

                            </tbody>
                        </table>
                        {{ $subscribers->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
