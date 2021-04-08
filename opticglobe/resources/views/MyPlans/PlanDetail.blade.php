
@extends('layouts.app')
@section('content')
<div class="container">

    <a href="{{route('showdetail')}}" class="btn btn-success mt-4 mb-4">Show Days Detail</a>

    <div class="card">
        
        <div class="card-header">
         Days Of Plan
        </div>

        <div class="card-body">
            @for ($i = 0; $i < $days; $i++)
                <div class="d-flex justify-content-between">
                    <div>
                        <span>Day {{$i+1}}</span>
                    </div>
                    <div>
                        <a class="btn btn-danger" href="/ViewDaysDetail/{{$pid}}/{{$i+1}}">  Add Detail</a><br><br>
                    </div>
                </div>
            @endfor
        </div>
      </div>

</div>
@endsection
