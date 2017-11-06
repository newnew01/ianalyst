@extends('admin')

@section('title','จัดการข้อมูลผ้า')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">รายการผ้า</h3>

            <div class="box-tools">
                <a href="/admin/textile/add"><button type="button" class="btn btn-block btn-success"><i class="fa fa-plus"></i> เพิ่มข้อมูลผ้า</button></a>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>ชื่อผ้า</th>
                    <th>ชื่อโครงการ</th>
                    <th style="width: 100px">การจัดการ</th>
                </tr>
                @foreach($textiles as $textile)
                    <tr>
                        <td>{{$textile->id}}</td>
                        <td>{{$textile->name}}</td>
                        <td>{{$textile->project->project_name}}</td>
                        <td><a href="/admin/textile/edit/{{$textile->id}}"><button type="button" class="btn btn-primary btn-xs">แก้ไข</button></a> <a href="/admin/textile/delete/{{$textile->id}}"><button type="button" class="btn btn-danger btn-xs" onclick="return confirm('ต้องการลบใช่หรือไม่?')">ลบ</button></a></td>
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