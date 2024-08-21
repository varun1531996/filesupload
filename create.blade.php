@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Partners
@endsection

@section('contentheader_title')
    <span class="header-title">Add partner</span>
    <a href="{{ route('admin-partners') }}" class="btn btn-default btn-xs">Partners List</a>
@endsection

@section('contentheader_action')
    <button class="btn btn-sm btn-primary admin-submit"><i class="fa fa-save"></i> Save</button>
@endsection


@section('main-content')
    <div class="row">
        <div class="col-md-12">

            <div class="box box-solid">
                <form role="form" action="{{ route('admin-partners-store') }}" id="" class="admin-form" method="post"
                      enctype="multipart/form-data">
                    <div class="box-body">


                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="status">Select category</label>
                            <select class="form-control select2" name="category" id="category">
                                <option selected="selected" value="STEM Education">STEM Education</option>
                                <option value="Engineering Labs">Engineering Labs</option>
                                <option value="EdTech Solutions">EdTech Solutions</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="custom_thumbnail">Partner logo [188×116]</label>
                            <input type="file" class="form-control" name="partner_logo" id="partner_logo">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control select2" name="status" id="status">
                                <option selected="selected" value="1">ENABLE</option>
                                <option value="0">DISABLE</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/bgoa30ctk6ynobtyaud7cnuqpju2tog6m32q0jkd7nws3vrs/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste "
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter      alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>
@endsection