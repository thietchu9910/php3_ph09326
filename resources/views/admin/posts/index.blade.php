@extends('admin.layout.master')

@section('title','Quan Tri')

@section('content-header','Danh Sach Sinh Vien')

@section('content')
<table class="table">
  <thead>
    <th>id</th>
    <th>Desc</th>
    <th>Image</th>
    <th>Student</th>
    <th>Status</th>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td>{{$post->desc}}</td>
      <td>
          <img width="100" src="{{$post->image_url}}" alt="">
      </td>
      <td>{{$post->student->name}}</td>
     
      <td>{{$post->is_active == 1 ? 'YES' : 'NO'}}</td>
    
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection