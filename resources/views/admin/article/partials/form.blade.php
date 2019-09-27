<label for="">Status</label>
<select name="published" class="form-control" id="">
    @if(isset($article->id))
        <option value="0" @if($article->published == 0) selected="" @endif>Chop etilmagan</option>
        <option value="1" @if($article->published == 1) selected="" @endif>Chop etilgan</option>
    @else
        <option value="0">Chop etilmagan</option>
        <option value="1">Chop etilgan</option>
    @endif
</select>

<label for="">Nomi</label>
<input type="text" class="form-control" name="title" placeholder="Maqola nomini kiriting" value="{{$article->title or ""}}" required>

<label for="">Slug</label>
<input type="text" readonly="" name="slug" class="form-control" placeholder="Avtomatik generatsiya" value="{{$article->title or ""}}">

<label for="">Kategoriya</label>
<select id="" class="form-control" name="categories[]" multiple="">
    <option value="0"> -- Tanlang</option>
    @include('admin.article.partials.categories',['categories' => $categories])
</select>

<label for="">Qisqacha tasnif</label>
<textarea name="description_short" id="description_short" class="form-control">{{$article->description_short or ""}}</textarea>
<hr>
<label for="">To'liq tasnif</label>
<textarea name="description" id="description" class="form-control">{{$article->description or ""}}</textarea>
<hr>
<label for="">Meta title</label>
<input type="text" name="meta_title" placeholder="Maqola sarlavhasi" class="form-control" value="{{$article->title or ""}}">
<label for="">Meta Descipription</label>
<input type="text" name="meta_desciption" placeholder="Maqola sarlavhasi" class="form-control" value="{{$article->title or ""}}">
<label for="">Keywords </label>
<input type="text" name="meta_keyword" placeholder="Maqola sarlavhasi" class="form-control" value="{{$article->title or ""}}">
<input type="submit" class="btn btn-primary" value="Kiritish">

