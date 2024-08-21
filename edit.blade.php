@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Card
@endsection

@section('contentheader_title')
    <span class="header-title">Edit Card</span>
    <a href="{{ route('cards.index') }}" class="btn btn-default btn-xs">Card List</a>
    <a href="{{ route('cards.create') }}" class="btn btn-default btn-xs">Add New</a>
@endsection

@section('contentheader_action')
    <button class="btn btn-sm btn-primary admin-submit"><i class="fa fa-save"></i> Update</button>
@endsection


@section('main-content')
    <div class="row">
        <div class="col-md-12">

            <div class="box box-solid">
                <form role="form" id="" class="admin-form" method="post"
                      action="{{ route('cards.update', ['id' => $card->id]) }}" enctype="multipart/form-data">
                    <div class="box-body">

                        {{ csrf_field() }}

                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="level_one_category">Select Level One
                                Category {{ $card->level_three->id }}</label>
                            <select class="form-control select2" name="level_one_category"
                                    onchange="getLevelTwoCategory(this.value)">
                                <option disabled selected>Select...</option>
                                @foreach($lones as $lonek => $lonev)
                                    <option value="{{ $lonek }}" <?= $card->level_three->level_two->level_one->id == $lonek ? 'selected' : '' ?> >{{ $lonev }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="level_two_category">Select Level Two Category</label>
                            <select class="form-control select2" id="level_two_cat" name="level_two_category"
                                    onchange="getLevelThreeCategory(this.value)">
                                <option selected>Select...</option>
                                @foreach($ltwos as $ltwok => $ltwov)
                                    <option value="{{ $ltwok }}" <?= $card->level_three->level_two->id == $ltwok ? 'selected' : '' ?> >{{ $ltwov }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="level_three_category">Select Level Three Category</label>
                            <select class="form-control select2" id="level_three_cat" name="level_three_category">
                                <option selected>Select...</option>
                                @foreach($lthrees as $lthreek => $lthreev)
                                    <option value="{{ $lthreek }}" <?= $card->level_three->id == $lthreek ? 'selected' : '' ?> >{{ $lthreev }}</option>
                                @endforeach
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
                            <input type="text" class="form-control" name="title" id="title" value="{{ $card->title }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control tinymce-editor"
                                      name="description">{{ $card->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="custom_thumbnail">Custom Thumbnail [705x346]</label>
                            <input type="file" class="form-control" name="custom_thumbnail[]" id="custom_thumbnail" multiple>
                        </div>

                        <div class="form-group">
                            @if(!empty($imageArray))
                                @foreach($imageArray as $image)
                                    <img src="{{ url('uploads/images/' . $image) }}" alt="Card Image" style="max-width: 150px;">
                                @endforeach
                            @else
                            <a href="{{ $card->custom_thumbnail }}" class="cms-img">
                                <img src="{{ $card->custom_thumbnail }}" alt="" style="width: 100px;">
                            </a>    
                            @endif 
                        </div>

                        <div class="form-group">
                            <label for="video_url">Video URL</label>
                            <input type="text" class="form-control" name="video_url" id="video_url"
                                   value="{{ $card->video_url }}">
                        </div>

                        <div class="form-group">
                            <label for="partner_logo">Partner Logo [135x25]</label>
                            <input type="file" class="form-control" name="partner_logo" id="partner_logo">
                        </div>

                        <div class="form-group">
                            <a href="{{ $card->partner_logo }}" class="cms-img">
                                <img src="{{ $card->partner_logo }}" alt="" style="width: 100px;">
                            </a>
                        </div>

                        <div class="form-group">
                            <label for="partner_logo_link">Partner Logo Link</label>
                            <input type="text" class="form-control" name="partner_logo_link" id="partner_logo_link"
                                   value="{{ $card->partner_logo_link }}">
                        </div>

                        {{--Extra Fiels Partner--}}


                        <div class="form-group">
                            <label for="partner_logo_1">Partner Logo 1 [135x25]</label>
                            <input type="file" class="form-control" name="partner_logo_1" id="partner_logo_1">
                        </div>

                        <div class="form-group">
                            <a href="{{ $card->partner_logo_1 }}" class="cms-img">
                                <img src="{{ $card->partner_logo_1 }}" alt="" style="width: 100px;">
                            </a>
                        </div>

                        <div class="form-group">
                            <label for="partner_logo_link_1">Partner Logo Link 1</label>
                            <input type="text" class="form-control" name="partner_logo_link_1" id="partner_logo_link_1"
                                   value="{{ $card->partner_logo_link_1 }}">
                        </div>


                        <div class="form-group">
                            <label for="partner_logo_2">Partner Logo 2 [135x25]</label>
                            <input type="file" class="form-control" name="partner_logo_2" id="partner_logo_2">
                        </div>

                        <div class="form-group">
                            <a href="{{ $card->partner_logo_2 }}" class="cms-img">
                                <img src="{{ $card->partner_logo_2 }}" alt="" style="width: 100px;">
                            </a>
                        </div>

                        <div class="form-group">
                            <label for="partner_logo_link_2">Partner Logo Link 2</label>
                            <input type="text" class="form-control" name="partner_logo_link_2" id="partner_logo_link_2"
                                   value="{{ $card->partner_logo_link_2 }}">
                        </div>



                        <div class="form-group">
                            <label for="partner_logo_3">Partner Logo 3 [135x25]</label>
                            <input type="file" class="form-control" name="partner_logo_3" id="partner_logo_3">
                        </div>

                        <div class="form-group">
                            <a href="{{ $card->partner_logo_3 }}" class="cms-img">
                                <img src="{{ $card->partner_logo_3 }}" alt="" style="width: 100px;">
                            </a>
                        </div>

                        <div class="form-group">
                            <label for="partner_logo_link_3">Partner Logo Link 3</label>
                            <input type="text" class="form-control" name="partner_logo_link_3" id="partner_logo_link_3"
                                   value="{{ $card->partner_logo_link_3 }}">
                        </div>


                        {{--End--}}

                        <div class="form-group">
                            <label for="brochure">Brochure</label>
                            <input type="file" class="form-control" name="brochure" id="brochure">
                        </div>

                        <div class="form-group">
                            <a href="{{ $card->brochure }}" target="_blank">View Brochure</a>
                        </div>

                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="number" class="form-control" name="position" id="position"
                                   value="{{ $card->position }}">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control select2" name="status" id="status">
                                <option value="{{ \App\Models\CardsModel::CARDS_ENABLE }}" <?= \App\Models\CardsModel::CARDS_ENABLE == $card->status ? 'selected' : '' ?> >{{ \App\Models\CardsModel::CARDS_ENABLE }}</option>
                                <option value="{{ \App\Models\CardsModel::CARDS_DISABLE }}" <?= \App\Models\CardsModel::CARDS_DISABLE == $card->status ? 'selected' : '' ?> >{{ \App\Models\CardsModel::CARDS_DISABLE }}</option>
                            </select>
                        </div>


                    </div> {{--End Box Body--}}
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