<div class="form-group">
    <label for="category_id">Category</label>
    <select class="form-control" id="category_id" name="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}" {{old('category_id',$data->category_id??null)==$category->id?'selected':''}}>{{$category->title}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{old('title',$data->title??null)}}">
</div>

<div class="form-group">
    <label for="body">Post Body</label>
    <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{old('body',$data->body??null)}}</textarea>
</div>
