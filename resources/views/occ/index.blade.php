@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{url('occ/create')}}" class="btn btn-primary">Create</a>
        <table class="table">
<div class="container">
    <table class="table">
        <tr>
            <th>Date</th>
            <th>Target</th>
        </tr>
        @foreach($occs as $occ)
            <tr>
            <td>{{$occ->recieveDate}}</td>
                <td>{{$occ->target}}</td>



            <td><a href="{{url('occ')}}<?php echo '/'.$occ->id.'/edit' ?>" class="btn btn-warning">Edit</a></td>
            <td>
                <form class="" action="occ/{{$occ->id}}" method="post">
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
