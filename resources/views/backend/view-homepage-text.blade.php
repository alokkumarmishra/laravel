@extends('layouts.adminapp')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    
    <section class="content-header">
      <h1>
        Homepage Text
        <small>Homepage Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">view homepage text</li>
      </ol>
      @include('include.backend.flash')
    </section>

    <!-- Main content -->
    <section class="content">       
      <div class="box box-default">
       <div class="box-header">
              <h3 class="box-title">Homepage Text Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Title</th>
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
                       <td>                        
                      <a href="/admin/edit-homepage-text?id={{$value->id}}"><i class="fa fa-edit"></i>&nbsp;&nbsp;</a>
                      <a href="/admin/view-homepage-text?id={{$value->id}}&type=del" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-times"></i>&nbsp;&nbsp;</a>
                      @if ($value->active==1)
                      <a href="/admin/view-homepage-text?id={{$value->id}}&type=dact" title="Deactive this"><i class="fa fa-check"></i></i>&nbsp;&nbsp;</a>
                       @endif 
                      
                      @if ($value->active==0)
                      <a href="/admin/view-homepage-text?id={{$value->id}}&type=act" title="Active this"><i class="fa fa-ban"></i></i></i></a>
                      @endif 
                       </td>                  
                     </tr>
                    <?php $i++; ?>
                     @endforeach
                     @endif       
              
               
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Sr No.</th>
                  <th>Title</th>
                  <th>Action</th>   
                </tr>
                </tfoot>
              </table>
            </div>
       
      </div>
    </section>
  </div>
  <script src="/backend/plugins/jQueryUI/jquery-ui2.js"></script>

  <script type="text/javascript"> 
$.ajaxSetup(
{
  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
});
$("#example1 tbody" ).sortable({
axis: "y",
cursor: "move",
//containment: "parent",
  update: function( event, ui ) {
  var data = $(this).sortable('serialize');    
  $.post('/admin/sorting', { orders:data, type:'homepagetext' },
   function(theResponse){  
  });
    }
});
</script>
@endsection
