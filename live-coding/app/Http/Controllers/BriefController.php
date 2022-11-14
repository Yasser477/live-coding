<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{

    public function viewADD(){
        return view('addBrief');
    }

    public function viewBriefs(){
        return view('showBriefs');
    }

    public function viewEdit(){
        return view('editBrief');
    }


    public function addBrief(Request $request){

        $Brief = new Brief();
        $Brief->name = $request->briefName;
        $Brief->start_date = $request->startDate;
        $Brief->end_date = $request->endDate;
        $Brief->description = $request->description;
        $Brief->save();
        return view('addBrief');
    }

    public function showBriefs(){
        $Brief = Brief::all();
        return view('showBriefs',compact('Brief'));
    }

    public function editBrief($id){
        $brief = Brief::where('id', $id)->get();
        $brief1 = Brief::where('id', $id)->first();

        $allTasks = $brief1->tasks;
    
        return view('editBrief',compact('brief','allTasks'));

     }

     public function updateBrief(Request $req)
    {
        $id = $req->hiddenId;
        Brief::where('id', $id)->update(["name" => $req->briefN, "start_date" => $req->startD, "end_date" => $req->endD, "Description" => $req->Description]);
        return redirect("showBriefs");
    }

    public function DeleteBrief($id)
    {
        Brief::where('id', $id)->delete();
        return redirect("showBriefs");
    }


    }