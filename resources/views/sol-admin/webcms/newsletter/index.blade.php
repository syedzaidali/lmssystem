@extends('layouts.crud-master')

@section('sol-style')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
@section('sol-content')

<div class="our-dashbord dashbord">
    <div class="dashboard_main_content">
        <div class="container-fluid">
            <div class="main_content_container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
                            <h4 class="title float-left">News Letter</h4>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12 my-3" style="text-align:end;">
                        <a class="btn btn-transparent divider-btn" href="javascript:void(0)" id="createNewProduct"
                            style="border: 2px solid #2441e7;">
                            Add News Letter
                        </a>
                    </div>
                </div>


                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Heading</th>
                            <th>Location</th>
                            <th>Photo</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade " id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="newsletterrForm" name="newsletter" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden"  id="actual_url" value="">
                    <input type="hidden" name="product_id" id="product_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Heading</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="heading"
                                placeholder="Enter Heading" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Location</label>
                        <div class="col-sm-12">
                            <input type="text" id="location" name="location" required="" placeholder="Enter location"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-12">
                            <input type="date" id="date" name="date" required="" placeholder="Enter location"
                                class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Photo</label>
                        <div class="col-sm-12">
                            <input type="file" id="photo" name="photo" multiple required="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('sol-script')

<link rel="stylesheet"
    href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css')}}" />
<link href="{{asset('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{asset('https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script>

<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('newsletter.index') }}",
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
          
            {
                data: 'heading',
                name: 'heading'
            },
            {
                data: 'location',
                name: 'location'
            },
            {
                data: 'photo',
                name: 'photo',
                render: function(data, type, full, meta) {
                    return "<img src=\"sol-assets/images/admin-newslatter/" + data +
                        "\" height=\"90\"/>";
                }
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
    });

    $('#createNewProduct').click(function() {

        $('#saveBtn').val("create-product");
        $('#product_id').val('');
        $('#newsletterrForm').trigger("reset");
        $('#modelHeading').html("Add News Latter");
        $('#ajaxModel').modal('show');
        $('#actual_url').val('add');
    });

    $('body').on('click', '.editProduct', function() {
        var product_id = $(this).data('id');
        $.get("{{route('newsletter.index') }}" + '/' + product_id + '/edit', function(data) {
            $('#modelHeading').html("Edit Product");
            $('#saveBtn').val("edit-user");
            $('#actual_url').val("edit");
            $('#ajaxModel').modal('show');
            $('#product_id').val(data.id);
            $('#name').val(data.heading);
            $('#location').val(data.location);
            $('#photo').val(data.photo);
            // $('#status').val(data.status);
        })
    });

    $('#saveBtn').click(function(e) {
        e.preventDefault();
        $(this).html('Sending..');

        // Get form
        var form = $('#newsletterrForm')[0];

        // Create an FormData object 
        var data = new FormData(form);
           var actural_url = '';
            if($('#actual_url').val() == 'add')
            {
                 actural_url= "{{ route('newsletter.store') }}"
            }
            if($('#actual_url').val() == 'edit')
            {
                 actural_url= "{{ route('newsletter-update') }}"
                alert('succces');
            }

        jQuery.each(jQuery('#photo')[0].files, function(i, file) {
            data.append('file-' + i, file);
        });

        $.ajax({
            url: actural_url,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',


            success: function(data) {
                alert('success');
                $('#newsletterrForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw();

            },
            error: function(data) {

                console.log('Error:', data);
                $('#saveBtn').html('Save Changes');
            }
        });
    });

    $('body').on('click', '.deleteProduct', function() {

        var product_id = $(this).data("id");
        confirm("Are You sure want to delete !");

        $.ajax({
            type: "DELETE",
            url: "{{ route('newsletter.store') }}" + '/' + product_id,
            success: function(data) {
                table.draw();
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    });

});
</script>