<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Session;

class ClientController extends Controller
{
    //
    

    function home(){
      $clients=Product::All()->pluck('desc1','desc1');
      return view ('home')->with('clients',$clients);
    }
          
  //**pour acceder a la page signup***/
  function signup(){
    return view ('signup');
}

//**pour acceder a la page loogin** */
function loogin(){
    return view ('loogin');
}

//***pour creer un compte*** */
function creer_compte(Request $request){
    $this->validate($request, ['email' => 'email|required|unique:clients', 
                                'password' => 'required|min:4']);
      $client = new client();
    $client->email = $request->input('email');
    $client->password = bcrypt($request->input('password'));
    $client->save();
    return back()->with ('status','compte bien creer');
}


//**pour acceder a son compte***/

function acceder_compte(Request $request){
    $this->validate($request, ['email' => 'email|required',
                                'password' =>'required']);

                                $client=Client::where('email',$request->input('email'))->first();
                                
                                if ($client) {
                                    # code...
                                    if (Hash::check($request->input('password'),$client->password )) {
                                        # code...
                                        Session::put('client',$client);
                                        return redirect ('/');
                                    } else {
                                        # code...
                                    return back()->with ('status','mauvais mot de pass ou email ');

                                    }
                                    
                                } else {
                                    # code...
                                    return back()->with ('status','vous n\'avez pas compte ');

                                }
                                
      }

//pour se deconnecter//
      function logout(){
       Session::forget('client');
        return back();
    }

     
}


