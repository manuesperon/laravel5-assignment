<?php
  
namespace App\Http\Controllers;
  
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
class UserController extends Controller{
  
  public function list() {
    $users  = User::all();
    //return response()->json($Users);  
    return view('users.list', compact('users'));
  }

  public function show($user) {
    $user  = User::find($user);
    return view('users.show', compact('user'));
  }

  public function create() {
    return view('users.create');
  }

  public function add (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'age' => 'required|max:255',
        'phone' => 'required|max:255',
        'email' => 'required|max:255',
    ]);

    if ($validator->fails()) {
      return redirect('/users')
        ->withInput()
        ->withErrors($validator);
    }

    $user = new User;
    $user->name = $request->name;
    $user->age = $request->age;
    $user->phone = $request->phone;
    $user->email = $request->email;
    $user->save();

    return redirect('/users');

}

  /*public function getUser($user) {
    $User  = User::all()->where('email', $user);
    return response()->json($User);
  } */

}

?>