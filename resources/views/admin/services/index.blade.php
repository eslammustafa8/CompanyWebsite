@extends('admin.master')

@section('title', __('keywords.services'))


@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">

                    <h2 class="h5 page-title">{{ __('keywords.services') }}</h2>


                    <div>
                        <a href="{{ route('admin.services.create') }}"
                            class="btn btn-primary">{{ __('keywords.add_new') }}</a>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
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

                                @if (count($services) > 0)
                                    @foreach ($services as $key => $service)
                                        <tr>
                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                            <td>{{ $service->title }}</td>
                                            {{-- <td>{{ $service->description }}</td> --}}
                                            <td>
                                                <i class="{{ $service->icon }} fa-2x"></i>
                                            <td>
                                                <a href="{{ route('admin.services.edit', ['service' => $service]) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fe fe-edit fa-2x"></i>
                                                </a>
                                                <a href="{{ route('admin.services.show', ['service' => $service]) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fe fe-eye fa-2x"></i>
                                                </a>
                                                <form
                                                    action="{{ route('admin.services.destroy', ['service' => $service]) }}"
                                                    method="POST" class="d-inline-block" id="deleteForm-{{ $service->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        onclick="confirmDelete({{ $service->id }})">
                                                        <i class="fe fe-trash-2 fa-2x"></i>
                                                    </button>
                                                </form>


                                                {{-- <a href="{{ route('services.edit', $service->id) }}"
                                        class="btn btn-sm btn-primary">{{ __('keywords.edit') }}</a>
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-sm btn-danger">{{ __('keywords.delete') }}</button> --}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="alert alert-danger">{{ __('keywords.no_data') }}</td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                        {{ $services->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            let choice = confirm("{{ __('keywords.are_you_sure') }}");
            if (choice) {
                // alert(id);
                document.getElementById('deleteForm-' + id).submit();
            }
        }
        </script>

@endsection
