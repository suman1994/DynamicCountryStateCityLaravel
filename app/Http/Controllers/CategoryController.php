<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Redirect;
use App\Category;
use App\User;
use DB;

class CategoryController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function getCSC(){
		$data = array();
		$allCountry = DB::table('countries')->get();
		$data['allCountry'] = $allCountry;
		return view('location.index',$data);
	}

	public function getStateCountryWise($id){
		$getState = DB::table('states')->where('country_id',$id)->get();
		return json_encode($getState);
	}

	public function getCityStateWise($id){
		$getState = DB::table('cities')->where('state_id',$id)->get();
		return json_encode($getState);
	}

}
