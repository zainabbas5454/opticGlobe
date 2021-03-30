<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function store(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
        ]);
        $data = new Plans();
        $data->name = $req->name;
        $data->starting_date = $req->start_date;
        $data->end_date = $req->end_date;
        $user_id = Auth::user()->id;
        $data->user_id = $user_id;
        $data->save();
        return redirect(route('home'))->with(['success'=>'Plan has been added successfully']);
    }
}
