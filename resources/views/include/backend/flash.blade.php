@if (session('status'))
<div class="alert alert-success alert-dismissable close-alert-notify">
    {{ session('status') }}
</div>
@endif
@if (count($errors)) 

   <div class="alert alert-danger alert-dismissable close-alert-notify">
   	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @foreach($errors->all() as $error) 
            <p>{{ $error }}</p>
        @endforeach 
    </div>
@endif 


@if(Session::has('success'))
    <div class="alert alert-success">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	<span class="glyphicon glyphicon-ok"></span> {!! session('success') !!}</div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	<span class="glyphicon glyphicon-remove">&nbsp;</span> {!! session('error') !!}</div>
@endif


