<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function createUser( Request $request)
    {
        $user=User::create([
          "email"=>"ali@gmal.com" ,
          "name"=>"ali",
          "password"=>"123456"
        ]);
        
return response()->json($user, 201);
    }
    function register(Request $request)
    {
      $hashed_password = password_hash($request->input("password"), PASSWORD_DEFAULT);

      $user=User::create([
        "email"=>$request->input("email"),
        "name"=>$request->input("name"),
        "password"=>$hashed_password
      ]);
      return response()->json($user, 201);

    }
    function login(Request $request)
    {
      $user=User::where("email",$request->input("email"))->first();
      if(!$user)
      {
        return response()->json("email doesn't found", 401);
      }
// if($user->password!=$request->input("password"))
// {
//   return response()->json("password doesn't match", 401);
// }

if (!password_verify($request->input("password"), $user->password)) {
  return response()->json("password doesn't match", 401);
    }
    $token=$user->createToken("auth_token")->plainTextToken;
    return response()->json($token, 200,);

}
}