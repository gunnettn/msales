@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{url('tran/create')}}" class="btn btn-primary">Create</a>
        <table class="table">
<div class="container">
    <table class="table">
        <tr>
            <th>Date</th>
            <th>Target</th>
        </tr>
        @foreach($trans as $tran)
            <tr>
            <td>{{$tran->recieveDate}}</td>
                <td>{{$tran->target}}</td>



            <td><a href="{{url('tran')}}<?php echo '/'.$tran->id.'/edit' ?>" class="btn btn-warning">Edit</a></td>
            <td>
                <form class="" action="tran/{{$tran->id}}" method="post">
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
