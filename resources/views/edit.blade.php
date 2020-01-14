@extends('master.app')

@section('content')
<h1>Edit post</h1>
<br>
<div class="row">
  <div class="col-lg-10">
  <form action="{{route('posts.update',$post->post_id) }}" method="post">
  {{ csrf_field() }}
  <input name="_method" type="hidden" value="PUT">

  <div class="form-group">
  <label for="title-input">Title</label>
  <input type="text" value="{{$post->title}}" class="form-control" name="title">
  </div>
  <div class="form-group">
  <label for="content-input">Content</label>
    <textarea row="4" class="form-control" name="body">{{$post->body}}</textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Update</button>
   </div> 
  </form>
 </div>
</div>
@endsection
