<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ config('app.name', 'Test Laravel') }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">  
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Start here for the blueimp-gallery -->
<base href="{{ SITEURL }}">
<link href="backend/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"/>
<link href="backend/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
<link href="backend/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
<link href="backend/plugins/jquery-file-upload/css/jquery.fancybox.css" rel="stylesheet"/>
<!-- end blueimp-gallery  -->
<link rel="stylesheet" href="backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="backend/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="backend/bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="backend/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="backend/plugins/iCheck/all.css">
<link rel="stylesheet" href="backend/plugins/timepicker/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="backend/bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="backend/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="backend/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Google Font -->
<link rel="stylesheet" href="backend/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{-- <link rel="stylesheet" href="/backend/dist/js/pages/jquery.min.js"> --}}
<script>
  var SITEURL="{{SITEURL}}"
window.Laravel = <?php echo json_encode([
'csrfToken' => csrf_token(),
]); ?>
</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   <!--  <div class="wrapper"> -->
@include('include.backend.head')
@include('include.backend.sidebar')  

@yield('content')
   <!--  </div> -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 </strong> All rights
    reserved.
  </footer>

  <!-- end here for the main wrapper  -->
</div>


@include('include.backend.rightsidebar')


<script src="backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="backend/plugins/jQueryUI/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
{{--  start here jquery validtion  --}}
<script src="backend/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/backend/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>


<!-- start here for the blu-emp-gallery multiple upload-->
<!-- <script src="http://localhost/upload-master/js/vendor/jquery.ui.widget.js"></script> -->
<script src="backend/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="backend/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="backend/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="backend/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="backend/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="backend/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="backend/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="backend/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="backend/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="backend/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="backend/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="backend/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
<!-- <script src="http://localhost/upload-master/js/main.js"></script> -->
<!-- Fancybox plugin -->
<!-- end gallery multiple upload -->

<script src="backend/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="backend/plugins/input-mask/jquery.inputmask.js"></script>
<script src="backend/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="backend/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="backend/bower_components/moment/min/moment.min.js"></script>
<script src="backend/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="backend/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="backend/plugins/iCheck/icheck.min.js"></script>
<script src="backend/bower_components/fastclick/lib/fastclick.js"></script>
<script src="backend/dist/js/adminlte.min.js"></script>
<script src="backend/dist/js/demo.js"></script>
<script src="backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {    
    $('.editor').wysihtml5()
  })
</script>
<script src="/backend/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
  //Data table
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

var hashes = window.location.href.slice(window.location.href.indexOf('/') + 1).split('/'); 
var $queryasdfsd=hashes[3].split('?'); 

$(".sidebar-menu").find("li[class='active']").removeClass('active');
$(".sidebar-menu").find("li a[href='/admin/"+hashes[3]+"']").parents('.treeview').addClass('active');
$(".sidebar-menu").find("li a[href='/admin/"+hashes[3]+"']").parent('li').addClass('active');

</script>
<!-- for show image in popup -->
<script>
    $('.img_how_pop').on('click', function(){     
    $('#show_image_model').modal('show');
    var $thisImg = $(this).attr('data-img');
    $('.show_img img').attr('src' , $thisImg);
});
</script>
<div class="modal fade" id="show_image_model" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header" style="padding:0;">
        <div class="close" style="opacity: 1;position: absolute;right: 15px;top: 15px;background: #9E9E9E; width: 25px;height: 25px;border-radius: 50% !important;text-align: center;
        background-position: center;" data-dismiss="modal">&times;</div>
        <div class="show_img" style="text-align:center"><img src="" style="max-width:100%;"></div>
    </div>
</div>
</div>
</div>
<!-- end show image in popup -->

</body>
</html>