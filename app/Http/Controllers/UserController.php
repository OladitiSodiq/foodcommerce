<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

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
      return redirect()->route('login');
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


      return redirect('/dashboard');
    } else {
      Session::flash('flash', 'Invalid username/password combination');
      return redirect()->route('login');
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
  public function logout()
  {
    Session::flush();
    return redirect('/');
  }

  public function redirectToProvider()
  {
    return Socialite::driver('google')->redirect();
  }

  public function handleProviderCallback()
  {
    try {
      $user = Socialite::driver('google')->user();
    } catch (\Exception $e) {
      return redirect('/home');
    }
    //only worked for those who have company email
    if (explode("@", $user->email)[1] !== 'gmail.com') {
      return redirect()->to('/');
    }
    //check if existing user 
    $existinguser = User::where('email', $user->email)->first();
    if ($existinguser) {
      //log im
      login($existinguser, true);
    } else {
      //create new user
      $newUser = new User();
      $newUser->name = $user->name;
      $newUser->email = $user->email;
      $newUser->google_id = $user->id;
      $newUser->avatar = $user->avatar;
      $newUser->avatar_original = $user->avatar_original;
      $newUser->save();
    }
  }
}
