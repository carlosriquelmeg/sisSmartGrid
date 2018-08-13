<?php

namespace sisSmartGrid\Http\Controllers;

use Illuminate\Http\Request;

use sisSmartGrid\Http\Requests;
use sisSmartGrid\Temperatura;
use Illuminate\Support\Facades\Redirect;
use sisSmartGrid\Http\Requests\TemperaturaFormRequest;
use DB;


class TemperaturaController extends Controller
{
  public function __construct()
 {
   $this->middleware('auth');
 }

 public function index(Request $request)
   {
     if($request)
     {
       //$query=trim($request->get('searchText'));
       //$temperaturas=DB::table('tabla')->where('temperatura','LIKE','%'.$query.'%');
       //$temperaturas = Temperatura::all();
       $temperaturas = Temperatura::orderBy('id','DESC')
       ->take(1)
       ->get();
       //->take(1);
       return view('temperatura.temperatura.index', ["temperaturas"=>$temperaturas]);
       //return view('temperatura.temperatura.index', ["temperaturas"=>$temperaturas,"searchText"=>$query]);
     }
   }

   public function show()
   {

   }
}
