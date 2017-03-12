@extends('layouts.app')

@section('content')
<div class="" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" >
                <div class="panel-heading"> M Data Management ( Daily )</div>
                <div class="panel-body">


                        <form class="form-group" action="{{action('ActionController@store')}}"method="post">
                            {{csrf_field()}}

                            <div class="form-group">

                               <div class="col-sm-8 col-sm-offset-2 ">
                                    <label for="recieveDate" class="col-md-4">Date</label>
                                    <div class="col-md-8">
                                        <input type="date" name="recieveDate" class="form-control" id="recieveDate">
                                    </div>
                                </div>



                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <br>
                                    <label for="Box office" class="col-md-4">Box office</label>
                                    <div class="col-md-8">
                                        <input type="number" name="target" class="form-control" id="target">
                                    </div>


                                </div>

                            </div>

                        </form>

            <form class="form-group" action="{{action('ActconController@store')}}"method="post">
                 {{csrf_field()}}
            <div class="form-group">

            </div>
                 <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <br>
                     <label for="target" class="col-md-4">Concesssion</label>
                    <div class="col-md-8">
                    <input type="number" name="target" class="form-control" id="target">
                </div>
                    </div>
            </div>
            </form>



        <form class="form-group" action="{{action('AdmissionController@store')}}"method="post">
            {{csrf_field()}}
            <div class="form-group">

            </div>
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2 pull-left">
                    <br>
                    <label for="target" class="col-md-4">Admission</label>
                    <div class="col-md-8">
                        <input type="number" name="target" class="form-control" id="target">
                    </div>

                </div>
            </div>
        </form>


            <form class="form-group" action="{{action('KioskController@store')}}"method="post">
                {{csrf_field()}}


                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="page-header"> %Revenue </div>
                        <label for="target" class="col-md-4">Kiosk</label>
                        <div class="col-md-8">
                            <input type="number" name="target" class="form-control" id="target">
                        </div>

                    </div>

            </form>




                <form class="form-group" action="{{action('MobileController@store')}}"method="post">
                    {{csrf_field()}}


                        <div class="col-sm-8 col-sm-offset-2">
                            <br>
                            <label for="target" class="col-md-4">Mobile</label>
                            <div class="col-md-8">
                                <input type="number" name="target" class="form-control" id="target">
                            </div>

                        </div>

                </form>




                    <form class="form-group" action="{{action('PosController@store')}}"method="post">
                        {{csrf_field()}}


                            <div class="col-sm-8 col-sm-offset-2">
                                <br>
                                <label for="target" class="col-md-4">POS</label>
                                <div class="col-md-8">
                                    <input type="number" name="target" class="form-control" id="target">
                                </div>

                            </div>

                    </form>




                        <form class="form-group" action="{{action('MgenController@store')}}"method="post">
                            {{csrf_field()}}
                            <div class="form-group">

                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="page-header"> Product </div>
                                    <label for="target" class="col-md-4">M gen</label>
                                    <div class="col-md-8">
                                        <input type="number" name="target" class="form-control" id="target">
                                    </div>

                                </div>
                            </div>
                        </form>




                            <form class="form-group" action="{{action('SideController@store')}}"method="post">
                                {{csrf_field()}}
                                <div class="form-group">

                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <br>
                                        <label for="target" class="col-md-4">Side item</label>
                                        <div class="col-md-8">
                                            <input type="number" name="target" class="form-control" id="target">
                                        </div>

                                    </div>
                                </div>
                            </form>




                                <form class="form-group" action="{{action('AtpController@store')}}"method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <div class="page-header"> Other </div>
                                            <label for="target" class="col-md-4">ATP</label>
                                            <div class="col-md-8">
                                                <input type="number" name="target" class="form-control" id="target">
                                            </div>

                                        </div>
                                    </div>
                                </form>




                                    <form class="form-group" action="{{action('TranController@store')}}"method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">

                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <br>
                                                <label for="target" class="col-md-4">Transaction</label>
                                                <div class="col-md-8">
                                                    <input type="number" name="target" class="form-control" id="target">
                                                </div>

                                            </div>
                                        </div>
                                    </form>




                                        <form class="form-group" action="{{action('OccController@store')}}"method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">

                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <br>
                                                    <label for="target" class="col-md-4">Occ</label>
                                                    <div class="col-md-8">
                                                        <input type="number" name="target" class="form-control" id="target">
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
</div>


    <div class="col-md-8 pull-right">
        <br>
        <button type="submit" name="button" class="btn btn-primary">Submit</button>
    </div>

</div>



</div>

    </div>
@endsection
