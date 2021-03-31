
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
         Days Of Plan
        </div>

        <div class="card-body">
            @for ($i = 0; $i <$days; $i++)
                <a class="btn btn-primary" href="{{route('ViewDaysDetail',$i+1)}}" value="{{$i+1}}">Day {{$i+1}}</a>

            @endfor
        </div>
      </div>

</div>
@endsection
