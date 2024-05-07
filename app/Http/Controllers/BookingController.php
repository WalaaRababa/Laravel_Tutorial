<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    function myFunction(Request $request)
    {
return $request;
        // return('<h1>hello world</h1>');
    }
    function login()
    {
        return(" <h1>login</h1>");
    }
    function sayHello(Request $request,$n)
    {
// return view('hello')->with('requestedName',$n);
   $isAuthaintacited=false;
if($n==='test')
{
    $isAuthaintacited=true;
    return response()->json(['data'=>["name"=>$n]]);

}
else{
    // return redirect('/login');
    return back();// to web application 
}
    }
}
