@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{url('pos/create')}}" class="btn btn-primary">Create</a>
        <table class="table">
<div class="container">
    <table class="table">
        <tr>
            <th>Date</th>
            <th>Target</th>
        </tr>
        @foreach($poss as $pos)
            <tr>
            <td>{{$pos->recieveDate}}</td>
                <td>{{$pos->target}}</td>



            <td><a href="{{url('pos')}}<?php echo '/'.$pos->id.'/edit' ?>" class="btn btn-warning">Edit</a></td>
            <td>
                <form class="" action="pos/{{$pos->id}}" method="post">
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
