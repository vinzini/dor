<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Staff;

class StaffController extends Controller
{
    public function index(){
    	$staff = Staff::select('first_name','last_name','username','locale')->paginate();
    	return response()->json($staff,200);
    }

    public function staffD(){
    	$staff = Staff::first();
    	return response()->json($staff,200);
    }

    public function search($str = null){
    	$staff = Staff::whereLike(['first_name','last_name','username','locale'], $str)->get();
    	$staff =  Staff::query()
				   ->where('first_name', 'LIKE', "%{$searchTerm}%") 
				   ->orWhere('last_name', 'LIKE', "%{$searchTerm}%") 
				   ->get();
    	return response()->json($staff,200);
    }
}
