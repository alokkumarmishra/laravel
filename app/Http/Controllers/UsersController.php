<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function index()
	{
		$users=[
		'0'=>['first_name'=>'Vinay','last_name'=>'Kumar','location'=>'Delhi'],
		'1'=>['first_name'=>'Amit','last_name'=>'Kumar','location'=>'Mumbai']
		
		];
		
		return view('admin.users.index',compact('users'));
		//print_r($users);
	}
	public function create()
	{
		return view('admin.users.create');
	}
	public function store(Request $request)
	{
		User::create($request->all());
		return 'sucess';
		return $request->all();
	}
    //
}
