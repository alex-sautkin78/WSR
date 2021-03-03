@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ 'Заявка'.' '.$data->id }}</div>
                    <div class="card-body">
                        <a href="{{ route('admin') }}" class="btn btn-primary float-right mb-3">Назад</a>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">Описание</th>
                                <th scope="col">Категория</th>
                                <th scope="col">Фото</th>
                                <th scope="col">Статус</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="col">{{ $data->id }}</td>
                                <td scope="col">{{ $data->name }}</td>
                                <td scope="col">{{ $data->description }}</td>
                                <td scope="col">{{ \App\Models\Category::find($data->category_id)->name }}</td>
                                <td scope="col">
                                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                                       data-image="{{ $data->path }}" data-target="#image_gallery">
                                        <img src="{{ $data->path }}" alt="{{ $data->name }}" class="img-thumbnail">
                                    </a>
                                </td>
                                <td scope="col">{{ \App\Models\Status::find($data->status_id)->name }}</td>
                            </tr>
                            <td scope="col">
                                <button type="button" class="btn btn-primary float-right mb-3" data-toggle="modal" data-target="#modal_update_status">
                                    Изменить
                                </button>
                            </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modal.update_status')
@endsection

