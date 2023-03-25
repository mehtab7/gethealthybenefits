@extends('admin.index')

@section('admin-content')
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Manage Blogs</h2>
                <div class="card">
                    <div class="card-body">
                        @include('admin.includes.messages')
                        <table id="blogsTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Author Name</th>
                                    {{-- <th>Meta Title</th>
                                    <th>Meta Description</th>
                                    <th>Meta Keywords</th> --}}
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>
                                            <img src="{{asset('images/blogs/' . $blog->image)}}" alt="" width="30" height="30">
                                        </td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->author_name}}</td>
                                        {{-- <td>{{$blog->meta_title}}</td>
                                        <td>{{$blog->meta_description}}</td>
                                        <td>{{$blog->meta_keywords}}</td> --}}
                                        <td>{{$blog->slug}}</td>
                                        <td>
                                            <form action="{{route('blogs.status')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$blog->id}}">
                                                <input type="hidden" name="status" value="{{$blog->status}}">
                                                <button class="btn btn-info btn-sm" type="submit">
                                                    @if($blog->status)
                                                        Send to Draft
                                                    @else
                                                        Publish
                                                    @endif
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{url('blogs/'.$blog->slug)}}" target="_blank">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{route('blogs.edit', $blog->id)}}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{route('blogs.delete', $blog->id)}}" onclick="return confirm('Are you sure!!!')">
                                                <i class="fas fa-trash" style="color:red"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('admin-scripts')

<!-- DataTables -->
<script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->

<script>
  $(function () {
    $("#blogsTable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
  </script>
@endsection
