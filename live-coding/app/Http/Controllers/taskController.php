<?php

namespace App\Http\Controllers;
use App\Models\task;
use App\Models\brief;
use Illuminate\Http\Request;

class taskController extends Controller
{

    public function ViewAddTask($id){

        return view('task',compact('id'));
    }

    public function ViewAllTasks(){

        return view('showTask');
    }


    public function addTask(Request $request ,$id)

    {

        $task = new Task();
        $task->name = $request->taskName;
        $task->start_date = $request->startTask;
        $task->end_date = $request->endDate;
        $task->brief()->associate($id);
        $task->save();
        return redirect("showBriefs");
    }

    public function updateTask(Request $req)
    {
        $id = $req->hiddenId;
        Brief::where('id', $id)->update(["name" => $req->briefN, "start_date" => $req->startD, "end_date" => $req->endD, "Description" => $req->Description]);
        return redirect("showBriefs");
    }

    




}
