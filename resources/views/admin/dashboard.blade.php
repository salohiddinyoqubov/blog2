@extends('admin.layouts.app_admin');

@section('content')
    <div class="container">

        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Kategoriya 0</span></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Material 0</span></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Visits 0</span></p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Today visits 0</span></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Kategoriya yaratish</a>
                <a class="list-group-item" href="#">
                    <h1 class="list-group-item-heading">Birinchi kategoriya</h1>
                    <p class="list-group-item-text">
                        Kol-vo kategoriy
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Kategoriya yaratish</a>
                <a class="list-group-item" href="#">
                    <h1 class="list-group-item-heading">Birinchi material</h1>
                    <p class="list-group-item-text">
                        Kol-vo materialov
                    </p>
                </a>
            </div>
        </div>

    </div>
@endsection
