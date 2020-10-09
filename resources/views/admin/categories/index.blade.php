use App\Http\Controllers\CommentController;
@extends('admin.layout.master')

@section('title','Quan Tri')

@section('content-header','Danh Sach Sinh Vien')

@section('content')
<table class="table">
  <thead>
    <th>id</th>
    <th>Parent_id</th>
    <th>Name</th>
    <th>Status</th>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->parent_id}}</td>
      <td>{{$category->name}}</td>
      <td>{{$category->status}}</td>
     
      <td>{{$category->is_active == 1 ? 'YES' : 'NO'}}</td>
    
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection