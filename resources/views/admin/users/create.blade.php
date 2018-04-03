@extends('layouts.app')
@section('content')
<form method='POST' action='/users'>
{!! csrf_field() !!}
<input type='text' name='name'>
<input type='text' name='email'>
<input type='text' name='password'>
<input type='submit' name='submit' value='submit'>
</form>
@endsection