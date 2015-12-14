<?php


namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use JWTAuth;
    use Tymon\JWTAuth\Exceptions\JWTException;
    use App\User;


class AuthenticateController extends Controller
{

    public function __construct()
    {
        // Apply the jwt.auth middleware to all methods in this controller
        // except for the authenticate method. We don't want to prevent
        // the user from retrieving their token if they don't already have it
        $this->middleware('jwt.auth', ['except' => ['authenticate']]);

    }

    public function index(Request $request)
    {
        $email = $request->input('email');
        if(!is_null($email)){
            return User::where('email', $email);
        }
        $users = User::all();
        return $users;
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');

//        dd($request);

        try {
            // verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // if no errors are encountered we can return a JWT
        return response()->json(compact('token'));
    }
}