<!-- Ke thua view admin-layout master -->
@extends('admin.layout.master')

<!-- Thay doi noi dung rieng ung voi @yield('title') ben master -->
@section('title', 'Test layout adminLTE')

<!-- Thay doi noi dung rieng ung voi @yield('content') ben master -->
@section('content')
<!-- Content Wrapper. Contains page content -->
<form id="add-student-form" action="{{route('store_student')}}" method="post">
  @csrf
  <div class="container-fluid">
  <div class="row">
    <div class="col-6">
    <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" name="name" id="name" >
  </div>
  <div class="form-group">
    <label for="">Phone</label>
    <input type="text" class="form-control" name="phone" id="phone"> 
  </div>
  <div class="form-group">
    <label for="">Age</label>
    <input type="text" class="form-control" name="age" id="age">
  </div>
  <div class="form-group">
    <label for="">Gender</label>
    <label for="radio">Gender</label>
            <input type="radio" name="gender" id="radio" value="0">Nu
            <input type="radio" name="gender" id="radio" value="1">Nam
            <input type="radio" name="gender" id="radio" value="2">Khac
  </div>
    </div>
    <div class="col-6">
    <div class="form-group">
    <label for="">Address</label>
    <input type="text" class="form-control" name="address" id="address">
  </div>
  <div class="form-group">
    <label>Status</label>
            <input type="radio" name="is_active" id="is_active" value="0"> Khong kich hoat
            <input type="radio" name="is_active" id="is_active" value="1"> Kich hoat
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary href="/">Cancel</a>
    </div>
  </div>
  
  </div>  
</form>
@endsection 