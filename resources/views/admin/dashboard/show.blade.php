<!-- Ke thua view admin-layout master -->
@extends('admin.layout.master')

<!-- Thay doi noi dung rieng ung voi @yield('title') ben master -->
@section('title', 'Test layout adminLTE')

<!-- Thay doi noi dung rieng ung voi @yield('content') ben master -->
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <table id="example1" class="table table-bordered table-hover">
                            <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Active</th>
                            
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->phone}}</td>
                                    <td>{{$data->age}}</td>
                                    <td>
                                      @if ($data->gender == 0)
                                      Female
                                      @elseif($data->gender== 1)
                                      Male
                                      @else
                                      Nothing
                                      @endif
                                    </td>
                                    <td>{{$data->address}}</td>
                                    <td>
                                      @if($data->is_active == 0)
                                      No
                                      @else
                                      Yes
                                      @endif
                                    </td>
                                    <td><a href="/" class="btn btn-sm btn-info">Back</a></td>
                                </tr>
                            </tbody>
                        </table>
</div>
@endsection 