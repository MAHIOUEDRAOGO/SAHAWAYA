<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class envoyerDocumentController extends Controller
{
    public function envoyerDocument(){
        return view('client.envoyerDocument');
    }
}
