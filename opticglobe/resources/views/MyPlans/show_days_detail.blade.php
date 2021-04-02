@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
    <table class="table">
        <thead>
            <tr>


                <th>Start time</th>
                <th>End time</th>
                <th>Description</th>
                <th>Day Number</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $item )
        <tbody>
            <tr>

                <td>{{$item->start_time}}</td>
                <td>{{$item->end_time}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->day}}</td>

                 <td colspan="2"><a class="btn btn-danger btn-sm mr-3" href="{{route('daysdelete',$item->id)}}">Delete</a>


            </tr>
        </tbody>
        @endforeach

    </table>
</div>
@endsection
