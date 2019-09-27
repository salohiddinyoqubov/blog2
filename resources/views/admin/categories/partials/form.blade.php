<label for="">Status</label>
<select name="published" class="form-control" id="">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif>Chop etilmagan</option>
        <option value="1" @if($category->published == 1) selected="" @endif>Chop etilgan</option>
    @else
        <option value="0">Chop etilmagan</option>
        <option value="1">Chop etilgan</option>
    @endif
</select>

<label for="">Nomi</label>
<input type="text" class="form-control" name="title" placeholder="Maqola nomini kiriting" value="{{$category->title or ""}}" required>

<label for="">Slug</label>
<input type="text" readonly="" name="slug" class="form-control" placeholder="Avtomatik generatsiya" value="{{$category->title or ""}}">

<label for="">Kategoriya</label>
<select id="" class="form-control" name="parent_id">
    <option value="0"> -- Tanlang</option>
    @include('admin.categories.partials.categories',['categories' => $categories])
</select>

<input type="submit" class="btn btn-primary" value="Kiritish">

