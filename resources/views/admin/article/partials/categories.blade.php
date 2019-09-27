@foreach($categories AS $category)
    <option value="{{$category->id or ""}}"
          @isset($article->id)
            @foreach($article->categories AS $category_article)
                @if($category->id == $category_article->id)
                    selected="selected"
                    @endif
          @endisset
    >
        {!! $delimiter or "" !!}{{$category->title OR ""}}
    </option>

    @if(count($category->children) > 0)
        @include('admin.article.partials.categories',[
            'categories' => $category->children,
            'delimiter' => '-' . $delimiter,
        ])
    @endif
@endforeach