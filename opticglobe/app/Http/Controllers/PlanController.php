<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Plans;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function MyPlan()
    {
        $data = DB::table('plans')
                        ->where('user_id','=',Auth::user()->id)
                        ->get();
        return view('MyPlans.myplan',compact('data'));
    }

    public function ViewPlanDetail()
    {
        return view('Plans.PlanDetail');
    }

    public function PlanDetail($id)
    {
        $name = DB::table('plans')
                        ->select('name')
                        ->where('id','=',$id)->get();
        $starting_date = DB::table('plans')
                        ->select('starting_date')
                        ->where('id','=',$id)->get();

        $date1 = $starting_date->pluck('starting_date')->toArray();
       $new = $date1[0];

        $end_date = DB::table('plans')
                        ->select('end_date')
                        ->where('id','=',$id)->get();
        $date2 = $end_date->pluck('end_date')->toArray();
       $new1 = $date2[0];

        $datetime1 = new DateTime($new);
        $datetime2 = new DateTime($new1);




        $interval = $datetime1->diff( $datetime2 );
        $days =$interval->format('%a');
        return view('MyPlans.PlanDetail',compact('days'));
    }

    public function ViewDaysDetail()
    {
        return view('MyPlans.DaysDetail');
    }

    public function DaysDetail(Request $req,$id)

    {
        dd($req->all(),$id);
    }
}
