<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller

{
    public function __construct (){
       $this -> Middleware('auth') ->except('showString2');
    }


   public  function  showString0 (){
       return 'ststic string0';
   }
    public  function  showString1 (){
        return 'ststic string1';
    }
    public  function  showString2 (){
        return 'ststic string2';
    }
    public  function  showString3 (){
        return 'ststic string3';
    }

}
