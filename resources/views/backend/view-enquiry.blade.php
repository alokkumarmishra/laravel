@extends('layouts.adminapp') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
           Enquiry Management           
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="admin">
                    <i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active"> Enquiry Management</li>
        </ol>
        @include('include.backend.flash')
    </section>

    <!-- Main content -->
    <section class="content">
      
        {{-- for seo meta details --}}
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Enquiry Management</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-plus"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> -->
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                                <label for="User-Name">User Name</label>
                                <p>{{$data->name}}</p>
                        </div>
                        <div class="form-group">
                                <label for="Email">User Email</label>
                                <p>{{$data->email}}</p>
                        </div>
                        <div class="form-group">
                                <label for="Phone">User Phone</label>
                                <p>{{$data->phone}}</p>
                        </div>
                        <div class="form-group">
                                <label for="ip">Ip</label>
                                <p>{{$data->ip}}</p>
                        </div>                        
                        <div class="form-group">
                                <label for="Dateip">Date</label>
                                <p>{{date('d M Y',$data->date)}}</p>
                        </div>
                        <div class="form-group">
                                <label for="Message">Message</label>
                                <p>{{$data->message}}</p>
                        </div>
                        <div class="form-group">
                                <a href="{{SITEURL}}admin/enquiry"><button class="btn green">Back</button></a></a>
                        </div>
                       
                       

                    </div>
                </div>
                <!-- /.row -->

            </div>
        </div>
      
    </section>
</div>
<script>
    $('#add').on('click', function () {		
		if ($('#add-form').valid()) {
            return true;            
        }
        else
        {
            return false;
        }
    });
</script>
@endsection