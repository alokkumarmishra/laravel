@extends('layouts.adminapp') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Category Management
            <small>Form Details</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="/admin">
                    <i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Edit Category Management</li>
        </ol>
        @include('include.backend.flash')
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Category Management</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> -->
                </div>
            </div>
            <!-- /.box-header -->

  
            {{ Form::model($data,array('name'=>'add-form','id'=>'add-form','method'=>'post','url'=>"/admin/category/edit/{$data->id}",'enctype'=>'multipart/form-data'))}}
            <div class="box-body pad">
             

                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            {{Form::label('name', 'Category Name',['class'=>'calssName'])}} {{ Form::text('name', null, array('class' => 'form-control','required'=>'required'))
                            }}

                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                              
                            {{ Form::label('category slug','Category Slug') }} {{ Form::text('slug', null, array('class'=>'form-control')) }}
                            <label class="error">{{ $errors->first('slug') }}</label>
                        </div>
                        <div class="form-group">
                            {{ Form::label('short description','Category short description') }} {{ Form::textarea('short_description',null,['class'=>'form-control','style'=>'height:100px'])
                            }}

                        </div>
                        <div class="form-group">
                            {{ Form::label('Long description','Category Long description') }} {{ Form::textarea('long_description',null,['class'=>'form-control
                            editor']) }}
                        </div>
                        <div class="form-group">
                                {{ Form::label('feature image','Feature Image') }} 
                                {{ Form::file('image','',['class'=>'form-control']) }}
                                {{Form::hidden('image2',$data->feature_image,[])}}
                                <a href="javascript:void(0);" data-img="{{SITEURL}}data/images/{{$data->feature_image}}" class="img_how_pop"><i class="fa fa-picture-o" aria-hidden="true" data-toggle="modal"></i></a>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
        </div>
        {{-- for seo meta details --}}
        <div class="box collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">Seo Management</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-plus"></i>
                    </button>
                    <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> -->
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad" style="display:none;">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            {{Form::label('meta_title', 'Meta Title',['class'=>'calssName'])}} {{ Form::text('meta_title', null, array('class' => 'form-control'))
                            }}

                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            {{ Form::label('meta_keyword','Meta Keyword') }} {{ Form::textarea('meta_keyword', null, ['class'=>'form-control','style'=>'height:100px'])
                            }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('meta description','Meta description') }} {{ Form::textarea('meta_description',null,['class'=>'form-control','style'=>'height:120px;'])
                            }}
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