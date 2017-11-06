@extends('admin')

@section('title','จัดการโครงการ')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">รายชื่อโครงการ</h3>

        <div class="box-tools">
            <a href="/admin/project/add"><button type="button" class="btn btn-block btn-success"><i class="fa fa-plus"></i> เพิ่มโครงการ</button></a>
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
                <td><a href="/admin/project/edit/{{$project->id}}"><button type="button" class="btn btn-primary btn-xs">แก้ไข</button></a> <a href="/admin/project/delete/{{$project->id}}"><button type="button" class="btn btn-danger btn-xs" onclick="return confirm('ต้องการลบใช่หรือไม่?')">ลบ</button></a></td>
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
</div>
@endsection