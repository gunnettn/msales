@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div style="width: 100%" id="element-chart"></div>
        </div>
    </div>

    <script>
        var data = {!! json_encode($response) !!};
        Morris.Line({
            element: 'element-chart',
            data: data,
            xkey: 'y',
            ykeys: ['action', 'target'],
            xLabels: 'day',
            labels: ['Action', 'Target'],
            xLabelFormat: function(x) {
                return x.toDateString();
            }
        });
    </script>
@endsection
