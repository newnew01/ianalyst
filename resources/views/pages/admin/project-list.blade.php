@extends('admin')

@section('title','จัดการโครงการ')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">รายชื่อโครงการ</h3>

        <div class="box-tools">
            <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#addProject"><i class="fa fa-plus"></i> เพิ่มโครงการ</button>
        </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 10px">ID</th>
                <th>ชื่อโครงการ</th>
                <th style="width: 100px">การจัดการ</th>
            </tr>
            @foreach($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->project_name}}</td>
                <td><button type="button" class="btn btn-primary btn-xs"  onclick="editProject({{$project->id}})">แก้ไข</button> <a href="/admin/project/delete/{{$project->id}}"><button type="button" class="btn btn-danger btn-xs" onclick="return confirm('ต้องการลบใช่หรือไม่?')">ลบ</button></a></td>
            </tr>
            @endforeach

        </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>

    <!-- Modal -->
    <div id="addProject" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form role="form" method="post" action="/admin/project/add">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">เพิ่มโครงการ</h4>
                </div>
                <div class="modal-body">

                        <!-- text input -->
                        <div class="form-group">
                            <label>ชื่อโครงการ</label>
                            <input name="project-name" type="text" class="form-control">
                        </div>




                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">เพิ่ม</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div id="editProject" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form role="form" method="post" action="/admin/project/add" id="edit_form">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">แก้ไขโครงการ</h4>
                    </div>
                    <div class="modal-body">

                        <!-- text input -->
                        <div class="form-group">
                            <label>ชื่อโครงการ</label>
                            <input name="project-name" type="text" class="form-control" id="input-project-name">
                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">แก้ไข</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js-bottom')
    <script>
        function editProject(id) {
            $.get( "/admin/project/info/"+id, function( data ) {
                if(data != 'null'){
                    $('#editProject').modal('show');
                    $('#input-project-name').val(data.project_name);
                    $('#edit_form').attr('action', '/admin/project/edit/'+id);
                }

            });
        }
    </script>
@endsection