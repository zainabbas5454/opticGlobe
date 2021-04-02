
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <a href="{{route('showdetail')}}" class="btn btn-success">Show Days Detail</a>
        <div class="card-header">
         Days Of Plan
        </div>

        <div class="card-body">
            @for ($i = 0; $i <$days; $i++)

                <a class="btn btn-primary">Day {{$i+1}}</a><a class="btn btn-danger" href="{{route('ViewDaysDetail',$pid)}}">  Add Detail</a><br><br>

            @endfor
        </div>
      </div>

</div>
@endsection
