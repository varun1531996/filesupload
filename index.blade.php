@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Cards
@endsection

@section('contentheader_title')
    <span class="header-title">Cards</span>
@endsection

@section('contentheader_action')
    <a href="{{ Route('cards.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Add Data</a>
@endsection

@section('main-content')


    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid">
                <div class="box-body">
                    <table class="table table-bordered table-striped admin-data-table">

                        <thead>
                        <tr>
                            
                            <th>Partner Logo</th>
                            <th>Partner Logo Link</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Video URL</th>
                            <th>Download Brochure</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Categories</th>
                            <th>URL</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($cards as $card)
                        
                        @if(isset($card->level_three) && isset($card->level_three->level_two) && isset($card->level_three->level_two->level_one))
                        
                        
                        
                            @if((count(array($card->level_three)) > 0) && (count(array($card->level_three->level_two)) > 0) && (count(array($card->level_three->level_two->level_one)) > 0) )
                            <tr>
                                
                                <td>
                                    <a href="{{ $card->partner_logo }}" class="cms-img">
                                        <img src="{{ $card->partner_logo }}" alt="" style="width: 100px;">
                                    </a>
                                </td>
                                <td>{{ $card->partner_logo_link }}</td>
                                <td>{{ $card->title }}</td>
                                <td>{{ str_limit($card->description, 30, '...') }}</td>
                                <td>{{ $card->video_url }}</td>
                                <td>
                                    <a href="{{ $card->brochure or 'javascript:void(0);' }}" class="btn btn-info btn-xs" target="_blank">
                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td>{{ $card->position }}</td>
                                <td>{{ $card->status }}</td>
                                <td class="action-db-button">
                                    <a href="{{ route('cards.edit', ['id' => $card->id]) }}" class="btn btn-xs btn-success"><i
                                                class="fa fa-pencil"></i></a>
                                    <form class="delete-form" id="delete-form{{  $card->id }}" method="post"
                                          action="{{ route('cards.destroy', ['id'=> $card->id]) }}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="button" class="btn btn-xs btn-warning" onclick='swal({
                                                title: "Are you sure?",
                                                // text: "You will not be able to recover this imaginary file!",
                                                type: "warning",
                                                showCancelButton: true,
                                                confirmButtonColor: "#DD6B55",
                                                confirmButtonText: "Yes, delete it!",
                                                cancelButtonText: "No, cancel pls!",
                                                closeOnConfirm: false
                                                },
                                                function(isConfirm){
                                                if (isConfirm) {
                                                $("#delete-form{{  $card->id }}").submit();
                                                } else {
                                                // swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                // Do Nothing
                                                }
                                                });'>
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a class="label label-primary" href="{{ route('category.get.level-three', ['slug' => $card->level_three->level_two->level_one->slug, 'slug_2' => $card->level_three->level_two->slug, 'slug_3' => $card->level_three->slug]) }}">{{ $card->level_three->level_two->level_one->name }} -> {{ $card->level_three->level_two->title }} -> {{ $card->level_three->title }}</a>
                                </td>
                                <td>
                                    <span class="label label-info">{{ route('category.get.level-three', ['slug' => $card->level_three->level_two->level_one->slug, 'slug_2' => $card->level_three->level_two->slug, 'slug_3' => $card->level_three->slug]) }}</span>
                                </td>
                            </tr>
                            @endif
                            @endif
                        @endforeach
                        </tbody>

                        <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Custom Thumbnail</th>
                            <th>Video URL</th>
                            <th>Partner Logo</th>
                            <th>Partner Logo Link</th>
                            <th>Download Brochure</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Categories</th>
                        </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection