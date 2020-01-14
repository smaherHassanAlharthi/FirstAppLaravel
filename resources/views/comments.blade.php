@extends('master.app')

@section('title','comment')
@section('content')
<h1>Comments page</h1><br>
<div class="row">
   <div class="col-md-8">
   <h1></h1>
   @foreach ($comments as comment)
   <div class="media">
     <div class="comments-list">
       <div class="media">
         <div class="media-body">
            <h4 class="media-heading user_name">{{$comment->title}}</h4>
            {{$comment->body}}
        </div>
    </div>
</div>
</div>
@endforeach
</div>
</div>

@endsection