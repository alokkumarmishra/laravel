@extends('layouts.adminapp') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
          Manage Profile
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{SITEURL}}admin">
                    <i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Manage Profile</li>
        </ol>
        @include('include.backend.flash')
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Manage Profile</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> -->
                </div>
            </div>
            <!-- /.box-header -->
            {{ Form::Model($data,array('name'=>'add-form','id'=>'add-form','method'=>'post','url'=>'/admin/profile','enctype'=>'multipart/form-data'))}}
            <div class="box-body pad">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            {{Form::label('name', 'Name',['class'=>'calssName'])}} 
                            {{ Form::text('name', null, array('class' => 'form-control','required'=>'required'))
                            }}
                            <label class="error">{{ $errors->first('name') }}</label>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            {{ Form::label('email','Email') }}
                             {{ Form::email('email', null, array('class'=>'form-control','required'=>'required')) }}
                            <label class="error">{{ $errors->first('email') }}</label>
                        </div>
                        <div class="form-group">
                            {{Form::label('old_password', 'Old Password',['class'=>'calssName'])}} 
                            {{ Form::password('old_password', array('class' => 'form-control','minlength'=>"6"))
                            }}
                        </div>
                        <div class="form-group">
                            {{Form::label('new_password', 'New Password',['class'=>'calssName'])}} 
                            {{ Form::password('new_password', array('class' => 'form-control','minlength'=>"6"))
                            }}
                        </div>
                        <div class="form-group">
                            {{Form::label('confirm_password', 'Confirm Password',['class'=>'calssName'])}} 
                            {{ Form::password('confirm_password', array('class' => 'form-control','minlength'=>"6"))
                            }}
                        </div>
                     
                        <div class="form-group">
                                {{ Form::label('feature image','Profile Image') }} 
                                {{ Form::file('image','',['class'=>'form-control']) }}
                                {{Form::hidden('image2',$data->profile_image,[])}}
                                <a href="javascript:void(0);" data-img="{{SITEURL}}data/images/{{$data->profile_image}}" class="img_how_pop"><i class="fa fa-picture-o" aria-hidden="true" data-toggle="modal"></i></a>
                                <i class="fa fa-file-image"></i>                               
                               
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-xs-12 mtop text-center">
                <button type="submit" name="submit" id="add" class="btn green">
                    <i class="fa fa-check"></i> Submit</button>
                <!--  <button type="submit" name="submit" id="add" class="btn cancel"><i class="fa fa-ban" aria-hidden="true"></i>Cancel</button> -->
            </div>
        </div>


        {{ Form::close() }}


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