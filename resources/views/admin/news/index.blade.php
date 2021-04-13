@extends('layouts.admin')
@section('content')
    <div class="col-lg-12 col-md-12">
        <div class="card ">
            <div class="d-sm-flex card-header justify-content-between align-items-center">
                <h4 class="card-title">Список новостей</h4>
                <a href="btn btn-primary btn-block" class="">
                    <i class="fas fa-plus fa-sm text-white-50"></i>&nbsp; Добавить новость
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Заголовок
                            </th>
                            <th>
                                Дата добавления
                            </th>
                            <th>
                                Действия
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($newsList as $key => $news)
                                <tr>
                                    <td>{{$key}}</td>
                                    <td>{{$news}}</td>
                                    <td>{{now()}}</td>
                                    <td>
                                        <a href="">
                                            <i class="tim-icons icon-pencil"></i>
                                        </a>
                                        &nbsp;
                                        <a href="">
                                            <i class="tim-icons icon-trash-simple"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Новостей нет</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
