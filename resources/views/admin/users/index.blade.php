@foreach($users as $users)
<li>{!! $users['first_name'] !!} {!! $users['last_name'] !!} {!! $users['location'] !!}</li>
@endforeach
