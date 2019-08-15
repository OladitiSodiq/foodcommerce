<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use DB;


class UserController extends Controller
{
  //
  public function login(Request $request)
  {

    $this->validate($request, [
      'username' => 'required',
      'password' => 'required'
    ]);

    $username = $request['username'];
    $form_password = $request['password'];

    $user = DB::table('users')
      ->where('email', $username)
      ->orWhere('username', $username)
      ->first();

    if ($user == '') {
      Session::flash('flash', 'Invalid email/password combination');
      return redirect()->route('user.login');
    }

    $db_password = $user->password;

    $password_match = password_verify($form_password, $db_password);

    if ($password_match) {
      Session::put('logged_in', true);
      Session::put('role', $user->role);
      Session::put('name', $user->firstname . ' ' . $user->lastname);
      Session::put('username', $user->username);
      Session::put('user_id', $user->id);
      Session::put('email', $user->email);


      return redirect('/login/success');
    } else {
      Session::flash('flash', 'Invalid username/password combination');
      return redirect()->route('user.login');
    }
  }

  public function register(Request $request)
  {
    $this->validate($request, [
      'username' => 'required | unique:users',
      'password' => 'required | same:password2',
      'email' => 'required | email | unique:users',
      'firstname' => 'required',
      'lastname' => 'required',
      'street' => 'required',
      'zip' => 'required',
      'city' => 'required',
      'state' => 'required',
      'country' => 'required',
      'phone' => 'required | numeric',
    ]);

    $user = new User();
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = password_hash($request->password, PASSWORD_BCRYPT);
    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
    $user->street = $request->street;
    $user->zip = $request->zip;
    $user->city = $request->city;
    $user->state = $request->state;
    $user->country = $request->country;
    $user->phone = $request->phone;
    $user->role = 100;
    if ($user->save()) {
      Session::flash('flash', 'Registration successful, You can now login.');
      Session::put('name', $user->firstname . ' ' . $user->lastname);
      return redirect('/register_success');
    } else {
      Session::flash('flash', 'Registration Un successful');
      return redirect('/');
    }
  }
}
