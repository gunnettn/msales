@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{url('actcon/create')}}" class="btn btn-primary">Create</a>
        <table class="table">
<div class="container">
    <table class="table">
        <tr>
            <th>Date</th>
            <th>Target</th>
        </tr>
        @foreach($actcons as $actcon)
            <tr>
            <td>{{$actcon->recieveDate}}</td>
                <td>{{$actcon->target}}</td>



            <td><a href="{{url('actcon')}}<?php echo '/'.$actcon->id.'/edit' ?>" class="btn btn-warning">Edit</a></td>
            <td>
                <form class="" action="actcon/{{$actcon->id}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <button type="submit" name="button" class="btn btn-danger">Delete</button>
                </form>
            </td>

            </tr>
@endforeach
    </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
