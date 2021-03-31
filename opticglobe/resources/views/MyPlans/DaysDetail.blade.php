@extends('layouts.app')

@section('content')
<div class="container">

<div class="card">

    <div class="card-header">
     Plans Progress
    </div>
    <div class="card-body">
      <h5 class="card-title">Enter Progress</h5>
     <form action="" method="POST">
        @csrf

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
        <button class="btn btn-primary" type="submit">Submit</button>
     </form>
    </div>
  </div>
</div>
@endsection
