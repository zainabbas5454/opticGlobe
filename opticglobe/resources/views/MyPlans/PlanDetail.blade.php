
@extends('layouts.app')
@section('content')
<div class="container">

    <a href="{{route('showdetail', $pid)}}" class="btn custom-btn mt-4 mb-4">Show Days Detail</a>

    <h6 class="mb-3" style=" font-weight: bold ">
        Days Of Plan
    </h6>

    @for ($i = 0; $i < $days; $i++)
        <a class="btn custom-btn" href="/ViewDaysDetail/{{$pid}}/{{$i+1}}">  Day {{ $i + 1 }}</a> 
    @endfor

</div>
@endsection
