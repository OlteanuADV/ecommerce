<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, DB, Cache\Cache, Storage;
use App\Models\User;


class APIController extends Controller
{
    public function index() {
        $adv = [
            'auth' => [
                'check' => Auth::check(),
                'user' => Auth::user(),
            ],
            '_token' => csrf_token(),
            'url' => url('/'),
            'name' => config('app.name'),
            'facebook' => env('FACEBOOK_APP_ID'),
            'google' => env('GOOGLE_APP_ID')
        ];
        return $adv;
    }

    public function checkLoginGoogle($token) {
		$data = file_get_contents("https://oauth2.googleapis.com/tokeninfo?id_token=".$token);

		$data = json_decode($data);
      
        $user = User::where('email', $data->email)->first();
        
        if(is_null($user))
        {
            $user = new User;
            $user->name = $data->given_name;
            $user->email = $data->email;
            $user->picture = $data->picture;
            $user->password = md5("123456");
            $user->remember_token = "";
            $user->save();
        }

        Auth::login($user, true);

        return 1;
	}

    public function checkLoginFacebook($token)
    {
        $url = "https://graph.facebook.com/v13.0/me?fields=id%2Cname%2Cemail%2Cbirthday%2Cgender%2Cfirst_name%2Clast_name%2Ceducation%2Cpicture&access_token=".$token;

        $data = json_decode(file_get_contents($url));
        
        $user = User::where('email', $data->email)->first();

        if(is_null($user))
        {
            $user = new User;
            $user->name = $data->name;
            $user->email = $data->email;
            $user->picture = $data->picture->data->url;
            $user->password = md5("123456");
            $user->remember_token = "";
            $user->save();
        }
        
        Auth::login($user, true);
        
        return 1;
    }

    public function storage($path)
    {
        $file = Storage::path($path);
        return response()->file($file);
    }
}
