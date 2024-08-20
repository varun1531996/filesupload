@extends('adminlte::layouts.app')
@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection
<script src="//cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
@section('contentheader_title')
    <span class="header-title">Add New AboutUs</span>
    <a href="{{ route('admin-about') }}" class="btn btn-default btn-xs">AboutUs List</a>
@endsection
@section('contentheader_action')
    <button class="btn btn-sm btn-primary admin-submit"><i class="fa fa-save"></i> Save</button>
@endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <form id="" class="admin-form" method="post" enctype="multipart/form-data" action="{{route('about-store') }}">
                    <div class="box-body">


                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control"
                                      name="description">{{ old('description') }}</textarea>
                        </div>

                       
                        <div class="form-group">
                            <label for="partner_logo_1">Image [124 x 124]</label>
                            <input type="file" class="form-control" name="image" id="image">
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

    <script type="text/javascript">

        document.addEventListener("DOMContentLoaded", function(event) {




            // your page initialization code here
            // the DOM will be available here


     $(document).ready(function () {
            CKEDITOR.replace( 'description' );

            $('#issuedate').datepicker({
                autoclose: true
            });


        });
        });

    </script>
@endsection