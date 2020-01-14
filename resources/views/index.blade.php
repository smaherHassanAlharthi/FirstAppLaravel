@extends('master.app')

@section('content')
<h1>All Post
<a href="{{route('posts.create')}}" class="btn btn-sm btn-primary">create new post</a></h1>
 <div class="row">
  <div class="col-lg-10">
  <table class="table table-bordered">
     <tr>
         <th>id</th>
         <th>title</th>
         <th>content</th>
     </tr>
       @foreach ($posts as $rs)
     <tr>
         <td>{{$rs->post_id}}</td>
         <td>{{$rs->title}}</td>
         <td>{{$rs->body}}</td>
         <td><a class="btn-sm btn-primary" href="{{route('posts.edit',$rs->post_id)}}">Edit</td>
         <td>
           <form method="post" action="{{route('posts.destroy',$rs->post_id)}}">
           {{csrf_field()}}
           <input name="_method" type="hidden" value="delete">
           <input type="submit" value="delete" class="btn-xs btn-danger">
           </td>
     </tr>
     @endforeach
   </table>
  </div>
</div>

@endsection