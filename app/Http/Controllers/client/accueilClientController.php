<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accueilClientController extends Controller
{
   public function accueilClient(){
    return view('client.accueilClient');
   }
}
