@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="" action="{{ action('SideController@update', ['id' =>$value->id]) }}" method="POST" accept-charset="UTF-8">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="row">

                <div class="col-sm-8 col-sm-offset-2">
                    <label for="date" class="col-md-4">Recieve Date</label>
                    <div class="col-md-8">
                        <input type="date" name="recieveDate" class="form-control" id="date" value="{{$value->recieveDate}}">
                    </div>

                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <label for="target" class="col-md-4">Target</label>
                    <div class="col-md-8">
                        <input type="number" name="target" id="target" value="{{ $value->target}}" placeholder="Target" class="form-control" required="required">
                    </div>

                </div>

                <div class="col-sm-8 col-sm-offset-2">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <button type="submit" name="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection