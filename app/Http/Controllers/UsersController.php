<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Hash;

use Validator;
use Auth;

class UsersController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('role:admin');
	}

     public function edit()
    {
        return view('profile.edit');
    }
		public function update(){
		        // custom validator
		        Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
		            return Hash::check($value, \Auth::user()->password);
		        });
		        // message for custom validation
		        $messages = [
		            'password' => 'Invalid Current Password.',
		        ];
		        // validate form
		        $validator = Validator::make(request()->all(), [
		            'current_password'      => 'required|password',
		            'password'              => 'required|min:6|confirmed',
		            'password_confirmation' => 'required',
		        ], $messages);
		        // if validation fails
		        if ($validator->fails()) {
		            return redirect()
		                ->back()
		                ->withErrors($validator->errors());
		        }
		        // update password
		        $user = User::find(Auth::id());
		        $user->password = bcrypt(request('password'));
		        $user->save();
		        return redirect()
		            ->route('profile.edit')
		            ->withSuccess('Password Has Been Updated.');
		    }
    // public function update(Request $request)
    // {
    // 	$this->validate($request, [
    // 		'name'=>'alpha|max:20',
    // 		'email'=>'max:20',
    // 		'password'=>'max:20'
    // 	]);
		//
    // 	Auth::user()->update([
    // 		'name'=>$request->input('name'),
    // 		'email'=>$request->input('email'),
    // 		'password'=>$request->input('password'),
    // 	]);
		//
    //      \Flash::success('Profile has been updated');
    //     return redirect()->route('profile.edit');
    // }

}
