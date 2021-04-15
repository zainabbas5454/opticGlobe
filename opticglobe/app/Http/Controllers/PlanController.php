<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Plans;
use App\Models\DaysDetail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        $pid=$id;

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
        return view('MyPlans.PlanDetail',compact('days','pid'));
    }

    public function ViewDaysDetail($pid)
    {


        return view('MyPlans.DaysDetail', ['pid' => $pid]);
    }

    public function DaysDetail(Request $req)
    {
        $req->validate([
            'start_time'=>'required',
            'end_time'=>'required',
            'day'=>'required|integer|min:1'
        ]);

        $data = new DaysDetail();

        $data->start_time = $req->start_time;
        $data->end_time = $req->end_time;
        $data->activity = $req->activity;
        $data->description = $req->description;
        $data->day = $req->day;
        $data->plan_id = $req->plan_id;
        $data->user_id =  Auth::user()->id;;

        $data->save();

        return redirect(route('showdetail', $req->plan_id))->with(['success'=>'Days Detail added successfully']);
    }

    public function delete($id)
    {
        Plans::find($id)->delete();
        return Redirect::back()->with(['success'=>'Plan Deleted Successfully']);
    }

    public function ShowDaysDetail(Request $request)
    {
        $data = DB::table('days_details')
                ->where([
                    'user_id' => Auth::user()->id,
                    'plan_id' => $request->route('id')
                ])
                ->get();

        return view('MyPlans.show_days_detail',compact('data'));
    }

    public function deleteDays($id)
    {
        DaysDetail::find($id)->delete();
        return Redirect::back()->with(['success'=>'Acitvity Deleted Successfully']);
    }
}
