<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;
class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $_REQUEST;
        if(empty($data["item"])){
            $beers = Beer::all();
        }
        if(!empty($data["item"])){
            $beers = Beer::where("name", "=", $data["item"])->get();
        }

        return view('/beers',compact('beers'));
    }


     /**
     * Display the specified resource.
     *
     * @param  int  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        return view('/product',compact('beer'));
    }

}
