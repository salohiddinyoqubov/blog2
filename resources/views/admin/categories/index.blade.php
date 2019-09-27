@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    @component('admin.components.breadcumb')
        @slot('title') Kategoriyalar ro'yhati @endslot
        @slot('parent') Bosh sahifa @endslot
        @slot('active') Kategoriya @endslot
    @endcomponent

        <hr>
        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus" style="font-weight: bold;"></i> Kategoriya qo'shish</a>
    <table class="table table-stripted">
        <thead>
            <th>Наиминование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
        </thead>
        <tbody>
            @forelse($categories AS $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->published}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('O\'chirilsinmi?')){return true} else { return false}" action="{{route('admin.category.destroy',$category)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field()}}
                            <a class="btn btn-default" href="{{route('admin.category.edit',$category)}}"><i class="fa fa-edit"></i></a>

                    <button type="submit" class="btn">   <i class="fa fa-trash-o"></i></button>
                        </form>

                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Ma'lumotlar topilmadi</h2></td>
                </tr>
            @endforelse
        </tbody>

    </table>
</div>
@endsection