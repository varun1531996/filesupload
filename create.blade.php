@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Cards
@endsection

@section('contentheader_title')
    <span class="header-title">Add Card</span>
    <a href="{{ route('cards.index') }}" class="btn btn-default btn-xs">Card List</a>
@endsection

@section('contentheader_action')
    <button class="btn btn-sm btn-primary admin-submit"><i class="fa fa-save"></i> Save</button>
@endsection


@section('main-content')
    <div class="row">
        <div class="col-md-12">

            <div class="box box-solid">
                <form role="form" action="{{ route('cards.store') }}" id="" class="admin-form" method="post"
                      enctype="multipart/form-data">
                    <div class="box-body">


                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="level_one_category">Select Level One Category</label>
                            <select class="form-control select2" name="level_one_category"
                                    onchange="getLevelTwoCategory(this.value)">
                                <option disabled selected>Select...</option>
                                @foreach($lones as $lonek => $lonev)
                                    <option value="{{ $lonek }}">{{ $lonev }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="level_two_category">Select Level Two Category</label>
                            <select class="form-control select2" id="level_two_cat" name="level_two_category"
                                    onchange="getLevelThreeCategory(this.value)">
                                <option disabled selected>Select...</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="level_three_category">Select Level Three Category</label>
                            <select class="form-control select2" id="level_three_cat" name="level_three_category">
                                <option disabled selected>Select...</option>
                            </select>
                        </div>

                        {{--JavaScript For The Select Box--}}

                        <script>

                            function getLevelTwoCategory(val) {
                                var url = " {{ route('api-get-level-two-category', ['id' => ':id']) }} ";
                                url = url.replace(':id', val);
                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    success: function (data) {
                                        $('#level_two_cat').children('option:not(:first)').remove();
                                        $.each(data, function (index, value) {
                                            $("#level_two_cat").append($("<option></option>").attr("value", index).text(value));
                                        });
                                    }
                                });
                            }

                            function getLevelThreeCategory(val) {
                                var url = " {{ route('api-get-level-three-category', ['id' => ':id']) }} ";
                                url = url.replace(':id', val);
                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    success: function (data) {
                                        $('#level_three_cat').children('option:not(:first)').remove();
                                        $.each(data, function (index, value) {
                                            $("#level_three_cat").append($("<option></option>").attr("value", index).text(value));
                                        });
                                    }
                                });
                            }

                        </script>


                        {{--End--}}

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control tinymce-editor"
                                      name="description">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="custom_thumbnail">Custom Thumbnail [705x346]</label>
                            <input type="file" class="form-control" name="custom_thumbnail[]" id="custom_thumbnail" multiple>
                        </div>

                        <div class="form-group">
                            <label for="video_url">Video URL</label>
                            <input type="text" class="form-control" name="video_url" id="video_url"
                                   value="{{ old('video_url') }}">
                        </div>

                        <div class="form-group">
                            <label for="partner_logo">Partner Logo [135x25]</label>
                            <input type="file" class="form-control" name="partner_logo" id="partner_logo">
                        </div>

                        <div class="form-group">
                            <label for="partner_logo_link">Partner Logo Link</label>
                            <input type="text" class="form-control" name="partner_logo_link" id="partner_logo_link"
                                   value="{{ old('partner_logo_link') }}">
                        </div>


                        {{--Extra Fiels Partner--}}


                        <div class="form-group">
                            <label for="partner_logo_1">Partner Logo 1 [135x25]</label>
                            <input type="file" class="form-control" name="partner_logo_1" id="partner_logo_1">
                        </div>

                        <div class="form-group">
                            <label for="partner_logo_link_1">Partner Logo Link 1</label>
                            <input type="text" class="form-control" name="partner_logo_link_1" id="partner_logo_link_1"
                                   value="{{ old('partner_logo_link') }}">
                        </div>


                        <div class="form-group">
                            <label for="partner_logo_2">Partner Logo 2 [135x25]</label>
                            <input type="file" class="form-control" name="partner_logo_2" id="partner_logo_2">
                        </div>

                        <div class="form-group">
                            <label for="partner_logo_link_2">Partner Logo Link 2</label>
                            <input type="text" class="form-control" name="partner_logo_link_2" id="partner_logo_link_2"
                                   value="{{ old('partner_logo_link') }}">
                        </div>

                        <div class="form-group">
                            <label for="partner_logo_3">Partner Logo 3 [135x25]</label>
                            <input type="file" class="form-control" name="partner_logo_3" id="partner_logo_3">
                        </div>

                        <div class="form-group">
                            <label for="partner_logo_link_3">Partner Logo Link 3</label>
                            <input type="text" class="form-control" name="partner_logo_link_3" id="partner_logo_link_3"
                                   value="{{ old('partner_logo_link') }}">
                        </div>


                        {{--End--}}

                        <div class="form-group">
                            <label for="brochure">Brochure</label>
                            <input type="file" class="form-control" name="brochure" id="brochure">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control select2" name="status" id="status">
                                <option value="{{ \App\Models\CardsModel::CARDS_ENABLE }}">{{ \App\Models\CardsModel::CARDS_ENABLE }}</option>
                                <option value="{{ \App\Models\CardsModel::CARDS_DISABLE }}">{{ \App\Models\CardsModel::CARDS_DISABLE }}</option>
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