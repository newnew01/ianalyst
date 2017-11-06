@extends('admin')

@section('title','จัดการข้อมูลผ้า')

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">กรุณากรอกข้อมูลผ้า</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="/admin/textile/edit/{{$textile->id}}">
                <!-- text input -->
                <div class="form-group">
                    <label>ชื่อผ้า</label>
                    <input name="textile-name" type="text" value="{{$textile->name}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>โครงการ</label>
                    <select name="project_id" class="form-control">
                        <option value="-1">[กรุณาเลือกโครงการ]</option>
                        @foreach($projects as $project)
                            <option value="{{$project->id}}" {{$project->id == $textile->project_id ? "selected":""}}>{{$project->project_name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- textarea -->
                <div class="form-group">
                    <label>รายละเอียดผ้า</label>
                    <textarea name="textile-detail" id="textile-detail" class="form-control" rows="13">{{$textile->detail}}</textarea>
                </div>


                <button type="submit" class="btn btn-info"><i class="fa fa-edit"></i> แก้ไข</button>
                <a href="/admin/textile"><button type="button" class="btn btn-default">ย้อนกลับ</button></a>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
        <!-- /.box-body -->
    </div>
@endsection

@section('js-head')
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: "#textile-detail",
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            image_advtab: true ,

            external_filemanager_path:"/filemanager/",
            filemanager_title:"Responsive Filemanager" ,
            external_plugins: { "filemanager" : "/filemanager/plugin.min.js"},
            relative_urls: false
        });
    </script>
@endsection