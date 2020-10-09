@extends('admin.layout.master')

@section('title','Quan Tri')

@section('content-header','Danh Sach Sinh Vien')

@section('content')
<table class="table">
  <thead>
    <th>id</th>
    <th>Content</th>
    <th>Student</th>
    <th>Post</th>
    <th>Status</th>
  </thead>
  <tbody>
    @foreach($comments as $comment)
    <tr>
      <td>{{$comment->id}}</td>
      <td>{{$comment->content}}</td>
      <td>{{$comment->student->name}}</td>
      <td>{{$comment->post->desc}}</td>
     
      <td>{{$comment->is_active == 1 ? 'YES' : 'NO'}}</td>
    
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection