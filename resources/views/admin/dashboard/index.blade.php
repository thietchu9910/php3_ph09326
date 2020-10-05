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
                              <!-- <th><a href="/student/add" class="btn btn-sm btn-info">
                                              Add
                                          </a></th> -->
                            
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->age}}</td>
                                    <td>
                                      @if ($student->gender == 0)
                                      Female
                                      @elseif($student->gender== 1)
                                      Male
                                      @else
                                      Nothing
                                      @endif
                                    </td>
                                    <td>{{$student->address}}</td>
                                    <td>
                                      @if($student->is_active == 0)
                                      No
                                      @else
                                      Yes
                                      @endif
                                    </td>
                                    <td><a href="/student/{{$student->id}}" class="btn btn-sm btn-info">
                                            Xem
                                        </a></td>
                                </tr>
                                
                            @endforeach
                            </tbody>
                        </table>
</div>
@endsection 