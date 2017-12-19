<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function attemptLogin(Request $request)
        {
            return Auth::attempt(
               // $this->credentials($request) + ["isActivated" => true],["isValid"=>false],
    //            $this->credentials($request) + ["isActivated" => true, "isValid"=> true],
                $this->credentials($request) + ["status" => 1]
    
            );
        }

    protected function authenticated(Request $request, $user)
    {
        if($user->type =='librarian')
            return redirect()->intended("/homeLibrarian");

        else if($user->type == 'admin')
            return redirect()->intended("/homeAdmin");

        else if($user->type == 'student')
            return redirect()->intended("/homeUser");

        else if($user->type == 'teacher')
            return redirect()->intended("/homeUser");

    }
}
