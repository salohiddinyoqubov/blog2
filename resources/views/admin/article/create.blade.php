@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcumb')
            @slot('title') Maqola yaratish @endslot
            @slot('parent') Bosh sahifa @endslot
            @slot('active') Maqola @endslot
        @endcomponent

        <hr>
        <form action="{{route('admin.article.store')}}" class="form-horizontal" method="post">
            {{csrf_field()}}
            @include('admin.article.partials.form')
            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection