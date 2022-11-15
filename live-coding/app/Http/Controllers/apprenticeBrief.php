<?php

namespace App\Http\Controllers;

use App\Models\apprentice;
use Illuminate\Http\Request;

class apprenticeBrief extends Controller
{
    public function index(){
        return view('apprentice',compact('id'));
        
    }

    public function allStudent($id){
    
    $all = apprentice::all();
    return view('apprentice',compact('all','id'));

    }

    public function assignToStudent($idstudent,$idbrief){
    
    $apprenticeS = apprentice::where('id', $idstudent)->first();
    $apprenticeS->brief()->attach($idbrief);  
    return "done";

    }

    // public function unsignStudent(Request $request){
    
    //     $apprenticeID = $request->input('idbrief');
    //     $birefId = $request->input('idStudent');
    //     $apprenticeS = apprentice::where('id', $apprenticeID)->first();
    //     $apprenticeS->brief()->detach($apprenticeID);  
    //     return redirect('apprentice');
    
    // }



}
