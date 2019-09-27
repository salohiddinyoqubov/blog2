@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcumb')
            @slot('title') Kategoriyani tahrirlash @endslot
            @slot('parent') Bosh sahifa @endslot
            @slot('active') Kategoriya @endslot
        @endcomponent

        <hr>
        <form action="{{route('admin.category.update', $category)}}" class="form-horizontal" method="post">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}
            @include('admin.categories.partials.form')
        </form>
    </div>
@endsection