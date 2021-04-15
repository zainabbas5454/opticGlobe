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

    <a href="{{route('myplan')}}" class="btn custom-btn mt-4 mb-4">My Plans</a>
  <div class="card">
    <div class="card-header">
      My Plans
    </div>
    <div class="card-body">
      <h5 class="card-title">Create Plan</h5>
     <form action="{{route('plan.store')}}" method="POST">
        @csrf
         <div class="form-group">
             <label for="name">Name</label>
             <input type="text" name="name" id="name" placeholder="Enter name" class="form-control">
         </div>

         <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type='date' name="start_date" id="start_date" placeholder="Enter Start Date" class="form-control">
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type='date' name="end_date" id="end_date" placeholder="Enter End Date" class="form-control">
        </div>
        <button class="btn custom-btn" type="submit">Submit</button>
     </form>
    </div>
  </div>
</div>
@endsection
