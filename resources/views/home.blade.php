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

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Введите название</label>
                            <input type="text" name="name" id="name" placeholder="Введите название"
                                   class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Введите описание</label>
                            <input type="text" name="description" id="description" placeholder="Введите описание"
                                   class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Выберите категорию</label>
                            <select class="form-control" id="category_id" name="category_id" required>
                                <option>Выберите категорию</option>
                                <option value="Заявка на ремонт">Заявка на ремонт</option>
                                <option value="Заявка на осмотр">Заявка на осмотр</option>
                                <option value="Заявка на постройку дороги">Заявка на постройку дороги</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="path">Фото</label>
                            <input type="file" name="path" id="path" multiple>
                        </div>
                        <div class="form-group">
                            <label for="status_id">Метка заявки</label>
                            <input type="text" name="status_id" id="status_id" placeholder="Введите метку заявки"
                                   class="form-control" required>
                        </div>
                        <input type="submit" value="Отправить" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
