<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class verifierDocumentController extends Controller
{
    public function verifierDocument(){
        return view('client.verifierDocument');
    }
}
