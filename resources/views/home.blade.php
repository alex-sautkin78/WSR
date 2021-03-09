@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="card-header">{{ __('Добавить заявку') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <button type="button" class="btn btn-primary float-right mb-3" data-toggle="modal"
                                data-target="#modal_add_application">
                            Добавить заявку
                        </button>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Метка</th>
                                <th scope="col">Название</th>
                                <th scope="col">Описание</th>
                                <th scope="col">Категория</th>
                                <th scope="col">Фото</th>
                                <th scope="col">Статус</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($application) > 0)
                                @foreach($application as $item)
                                    <tr>
                                        <td scope="col">{{ $item->id }}</td>
                                        <td scope="col">{{ $item->created_at }}</td>
                                        <td scope="col">{{ $item->name }}</td>
                                        <td scope="col">{{ $item->description }}</td>
                                        <td scope="col">{{ \App\Models\Category::find($item->category_id)->name }}</td>
                                        <td scope="col">
                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                               data-image="{{ $item->path }}" data-target="#image_gallery">
                                                <img src="{{ $item->path }}" alt="{{ $item->name }}"
                                                     class="img-thumbnail">
                                            </a>
                                        </td>
                                        <td scope="col">{{ \App\Models\Status::find($item->status_id)->name }}</td>
                                        <td scope="col">
                                            <form action="{{ route('application.delete', ['id'=>$item->id]) }}"
                                                  method="post" class="del">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modal.add_application')
@endsection
