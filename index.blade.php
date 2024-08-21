@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Partners
@endsection

@section('contentheader_title')
    <span class="header-title">Partners</span>
@endsection

@section('contentheader_action')
    <a href="{{ Route('admin-partners-create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> Add Partner</a>
@endsection

@section('main-content')


    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid">
                <div class="box-body">
                    <table class="table table-bordered table-striped admin-data-table">

                        <thead>
                        <tr>
                            <th>Sr no.</th>
                            <th>Category</th>
                            <th>Logo</th>
                            <th>Status</th>
                            <th>Date</th>
							<th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $i=1; ?>
                        @foreach($partners as $lv)

                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $lv->category }}</td>
                                <td>
                                    <a class="cms-img" href="{{ $lv->logo }}">
                                        <img src="{{ $lv->logo }}" alt="" style="width: 100px;">
                                    </a>
                                </td>
								<td>{{ $lv->status == '1' ? 'ENABLE':'DISABLE' }}</td>
								<td>{{ date("d/m/Y H:i:s", strtotime($lv->created_at)) }}</td>
                                <td class="action-db-button">
                                    <a href="{{ route('admin-partners-edit', ['id' => $lv->id]) }}" class="btn btn-xs btn-success"><i
                                                class="fa fa-pencil"></i></a>
                                    <form class="delete-form" id="delete-form{{  $lv->id }}" method="post"
                                          action="{{ route('admin-partners-destroy', ['id'=>$lv->id]) }}">
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
                                                $("#delete-form{{  $lv->id }}").submit();
                                                } else {
                                                // swal("Cancelled", "Your imaginary file is safe :)", "error");
                                                // Do Nothing
                                                }
                                                });'>
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
								
                                
                            </tr>

						<?php $i++ ; ?>
                        @endforeach

                        </tbody>
                        

                        <tfoot>
                        <tr>
                            <th>Category</th>
                            <th>Logo</th>
                            <th>Status</th>
                            <th>Date</th>
							<th>Action</th>
                        </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection