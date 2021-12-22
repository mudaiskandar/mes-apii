<?php

namespace App\Http\Controllers;
use App\Models\Ssp;

class SspController extends Controller
{
  public function index($id){
      return Ssp::where('HANDLERNAME',$id)->get();
    //return Ssp::all();
  }
}
