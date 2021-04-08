@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

@if($errors->any())
@foreach ($errors->all() as $error )
<div class="alert alert-danger">
    {{$error}}
</div>
@endforeach
@endif

<div class="card">

    <div class="card-header">
     Plans Progress
    </div>
    <div class="card-body">
      <h5 class="card-title">Enter Progress</h5>

     <form action="{{route('DaysDetail')}}" method="POST">
        @csrf
            <input type="hidden" name="plan_id" value="{{$pid}}">
         <div class="form-group">

            <label for="start_time">Start Time</label>
            <input type='datetime-local' name="start_time" id="start_time" placeholder="Enter Start Time" class="form-control">
        </div>

        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type='datetime-local' name="end_time" id="end_time" placeholder="Enter End Time" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="10"></textarea>
        </div>

        <div class="form-group" hidden>
            <label for="day">Enter Day</label>
            <input type='number' name="day" value="{{Request::route('did')}}" id="day" placeholder="Enter Day Number" class="form-control">
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
     </form>
    </div>
  </div>
</div>
@endsection
