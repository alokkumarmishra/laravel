@extends('layouts.adminapp')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    
    <section class="content-header">
      Enquiry Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Enquiry Management</li>
      </ol>
      @include('include.backend.flash')
    </section>

    <!-- Main content -->
    <section class="content">       
      <div class="box box-default">
       <div class="box-header">
              <h3 class="box-title">Enquiry Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>date</th>
                  <th>Action</th>                  
                </tr>
                </thead>
                <tbody>   
                  @if (count($data) > 0)  
                  <?php $i=1; ?>               
                     @foreach ($data as $value)                    
                       <tr id='order_{{$value->id}}'>
                      <td>{{ $i }}</td>                  
                       <td>{{$value->name}}</td>
                       <td>{{$value->email}}</td>
                       <td>{{$value->phone}}</td>
                       <td>{{date('d M Y',$value->date)}}</td>
                       <td>                        
                      <a href="{{SITEURL}}admin/view-enquiry?id={{$value->id}}"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;</a>
                      <a href="{{SITEURL}}admin/enquiry?id={{$value->id}}&type=del" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-times"></i>&nbsp;&nbsp;</a>
                      
                       </td>                  
                     </tr>
                    <?php $i++; ?>
                     @endforeach
                     @endif       
              
               
                
                </tbody>
                <tfoot>
                <tr>
                    <th>Sr No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>date</th>
                    <th>Action</th>  
                </tr>
                </tfoot>
              </table>
            </div>
       
      </div>
    </section>
  </div>

@endsection
