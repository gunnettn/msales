@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{url('action/create')}}" class="btn btn-primary">Create</a>
        <table class="table">
<div class="container">
    <table class="table">
        <tr>
            <th>Date</th>
            <th>Target</th>
        </tr>
        @foreach($actions as $action)
            <tr>
            <td>{{$action->recieveDate}}</td>
                <td>{{$action->target}}</td>



            <td><a href="{{url('action')}}<?php echo '/'.$action->id.'/edit' ?>" class="btn btn-warning">Edit</a></td>
            <td>
                <form class="" action="action/{{$action->id}}" method="post">
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
