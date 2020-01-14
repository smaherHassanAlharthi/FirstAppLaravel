@extends('master.app')

@section('content')
<h1>Create new post</h1>
<br>
@if (session('success'))
 <div class="alert alert-success">
 {{ session('success')}}
 </div>
 @endif
  
 @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach( $errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach 
          </ul>
        </div>
    @endif
<div class="row">
  <div class="col-lg-10">
  <form action="{{route('posts.store') }}" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="title-input">Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="content-input">body</label>
    <textarea row="4" class="form-control" name="body"></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
  </div> 
</form>
</div>
</div>
@endsection