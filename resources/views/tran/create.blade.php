@extends('layouts.app')

@section('content')
<div class="container">
    <form class="" action="{{action('TranController@store')}}"method="post">
        {{csrf_field()}}

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <label for="recieveDate" class="col-md-4">Date</label>
                <div class="col-md-8">
                    <input type="date" name="recieveDate" class="form-control" id="recieveDate">
                </div>

            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <label for="target" class="col-md-4">Target</label>
                <div class="col-md-8">
                    <input type="number" name="target" class="form-control" id="target">
                </div>

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
