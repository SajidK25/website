@extends('layouts.master')
@section('style')
  <link rel="stylesheet" href="{{ url('admin_panel/plugins/datatables/dataTables.boo tstrap.css') }}">
@endsection
@section('content')

    @include('layouts.partials.modal')

    <!--<h1>

        <a  href="{{ url('/admin/faculty/create') }}" class="btn btn-success pull-right">
            <i class="fa fa-plus"></i>
            Add
        </a>
    </h1>
    <hr>-->

    <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Faculty List</h3>
                   <a  href="{{ url('/admin/faculty/create') }}" class="btn btn-success pull-right">
                      <i class="fa fa-plus"></i>
                      Add
                  </a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
  <table id="example1" class="table table-bordered table-striped dataTable">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @if(count($faculties))
                    @foreach($faculties as $faculty)
                      <tr>
                        <td>{{ $faculty->name }}</td>
                        <td>{{  $faculty->designation }}
                        </td>
                        <td>{{  $faculty->email  }}/td>
                        <td> {{  $faculty->website  }}</td>
                        <td>
                          <a href="{{  url("/admin/faculty/{$faculty->id}")  }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                          <a href="{{  url("/admin/faculty/{$faculty->id}/edit")  }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                          <a href="{{  url("/admin/faculty/{}$faculty->id}")  }}" class="btn btn-xs btn-danger" data-token="{{ csrf_token() }}" data-method="DELETE" data-confirm="true"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  @endif

              </tbody>

                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>

@endsection
@section('scripts')

  <script src="{{ url('admin_panel/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ url('admin_panel/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('admin_panel/plugins/datatables/jquery.dataTa bles.min.js') }}"></script>
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
@endsection
