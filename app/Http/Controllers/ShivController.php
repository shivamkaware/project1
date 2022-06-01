<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shiv;

class ShivController extends Controller
{
    public function store(Request $request){
        $shiv= new Shiv();
        $shiv->email=$request->email;
        $shiv->pwd=$request->pwd;
        $shiv->save();
    }
}
