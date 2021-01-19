<div class="form-group pb-2">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{old('name', $news->name ?? '')}}" class="form-control">
    <div>{{$errors->first('name')}}</div>
</div>

<div class="form-group">
    <label for="body">Body</label>
    <input type="text" name="body" value="{{old('body', $news->body ?? '')}}" class="form-control">
    <div>{{$errors->first('body')}}</div>
</div>

<div class="form-group">
    <label for="description">Link</label>
    <input type="url" name="link" value="{{old('link', $news->link ?? '')}}" class="form-control">
    <div>{{$errors->first('link')}}</div>
</div>

<div class="form-group d-flex flex-column">
    <label for="image">Profile Image</label>
    <input type="file" name="image" class="py-2">
    <div>{{$errors->first('image')}}</div>
</div>

@csrf

