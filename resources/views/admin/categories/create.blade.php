@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcumb')
            @slot('title') Kategoriya yaratish @endslot
            @slot('parent') Bosh sahifa @endslot
            @slot('active') Kategoriya @endslot
        @endcomponent

            <hr>
            <form action="{{route('admin.category.store')}}" class="form-horizontal" method="post">
                {{csrf_field()}}
                @include('admin.categories.partials.form')
            </form>
    </div>
@endsection