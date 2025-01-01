<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function showPage(Request $request){
     $numPage =$request->n;
    $tabOfNames = ['amine','ali'];
     return view('testview', compact('numPage','tabOfNames'));
    }
}
