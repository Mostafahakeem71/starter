<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
   public function showUserName(){

       return 'mostafa hakeem';
   }

    public function getIndex(){
       /* $obj = new \stdClass();
        $obj -> name = 'ahmed';
        $obj -> id = 4;
        $obj -> gender = 'male';*/

       $data=[];
        return view('welcome' ,compact('data')) ;
    }
}
