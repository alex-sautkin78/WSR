@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ route('category.list') }}"
                           class="btn btn-primary float-right mb-3">Категории
                        </a>

                        <table class="table table-striped">
                            @if(count($data) > 0)
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Метка</th>
                                    <th scope="col">Название</th>
                                    <th scope="col">Статус</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $el)
                                    <tr>
                                        <td scope="col"><a
                                                href="{{ route('admin.all', ['id'=>$el->id]) }}">{{ $el->id }}</a></td>
                                        <td scope="col">{{ $el->created_at }}</td>
                                        <td scope="col">{{ $el->name }}</td>
                                        <td scope="col">{{ \App\Models\Status::find($el->status_id)->name }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
