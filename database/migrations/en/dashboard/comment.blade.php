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
                            <th>Content</th>
                            <th>Student</th>
                            <th>Post</th>
                            <th>Active</th>
                            <th><a href="/student/create">Them</a></th>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{$comment->id}}</td>
                                    <td>{{$comment->content}}</td>
                                    <td>{{$comment->post->post_id}}</td>
                                    <td>{{$comment->student->student_id}}</td>
                                    <td>
                                      @if ($comment->status == 0)
                                      Yes
                                      @elseif($comment->status== 1)
                                      No                                    
                                      @endif
                                                                   
                      
                                       
                                </tr>
                                
                            @endforeach
                            </tbody>
                            
                        </table>
</div>
@endsection 