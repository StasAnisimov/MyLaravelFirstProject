<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
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

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function attemptLogin(Request $request)
{
    return $this->guard()->attempt(
        $this->credentials($request), $request->filled('remember')
    );
}
protected function credentials(Request $request)
{
    return array_add($request->only($this->username(), 'password'), 'verified', true);
}
public function redirectToProvider($provider)
{
    return Socialite::driver($provider)->redirect();
}

/**
 * Obtain the user information from GitHub.
 *
 * @return Response
 */
 public function handleProviderCallback($provider)
 {
    $user = Socialite::driver($provider)->stateless()->user();
    $authUser = $this->findOrCreateUser($user,$provider);
    Auth::login($authUser,true);
    return redirect('/home');
 }

 /**
 * Create or get a user based on provider id.
 *
 * @return Object $user
 */
 public function findOrCreateUser($user, $provider)
 {
   $authUser = User::where('provider_id',$user->id)->first();
   if($authUser){
     return $authUser;
   }
   return User::create([
     'name' => $user->name,
     'email'=> $user->email,
     'provider'=> strtoupper($provider),
     'provider_id' => $user->id
   ]);
 }
}
