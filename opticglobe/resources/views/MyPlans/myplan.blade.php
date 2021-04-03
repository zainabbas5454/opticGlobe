@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
    <table class="table">
        <thead>
            <tr>

                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $item )
        <tbody>
            <tr>
                <td><a href="{{route('PlanDetail',$item->id)}}">{{$item->name}}</a></td>
                <td>{{$item->starting_date}}</td>
                <td>{{$item->end_date}}</td>

                 <td colspan="2"><a class="btn btn-danger btn-sm mr-3" href="{{route('daysdelete',$item->id)}}">Delete</a>


            </tr>
        </tbody>
        @endforeach

    </table>
</div>
@endsection