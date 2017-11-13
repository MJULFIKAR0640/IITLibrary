<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Input;
use Hash;
use Redirect;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

  /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'type' => 'required',
            'phone' => 'required|min:11|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }


     
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'type' => $data['type'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);
    }*/



    

/*    public function register(Request $request) {
        $rules = array (
            'name' => 'required|unique:users|alpha_num|min:4',
            'email' => 'required|unique:users|email',
            'type' => 'required',
            'phone' => 'required|min:11|unique:users',
            'password' => 'required|min:6|confirmed' 
        );
        $validator = Validator::make ( Input::all (), $rules );
        if ($validator->fails ()) {
            return Redirect::back ()->withErrors ( $validator, 'register' )->withInput ();
        } else {
            $user = new User ();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->type = $request->type;
            $user->phone = $request->phone;
            $user->password = Hash::make ( $request->password);
            $user->remember_token = $request->get ( '_token' );
            $user->save ();
            return Redirect::back ();
        }
    }
*/


    // public function register(Request $request)
    // {

    //    //Validates data
    //     $this->validator($request->all())->validate();

    //    //Create seller
    //     $user = $this->create($request->all());

    //     $this->guard()->login($user);

    //    //Redirects sellers
    //     return redirect($this->redirectPath);
    // }

/*    protected function guard()
   {
       return Auth::guard('web');
   }*/
}
