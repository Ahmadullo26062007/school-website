@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));

    @endphp
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <div id="chart">
                </div>
            </div>
            <!--pager-content end-->
            {{--            <h2 class="page-titlee">{{$a->name}}</h2> --}}
        </div>
    </section>
    <!--pager-section end-->
    <section class="classes-page">

            <!--classes-banner end-->
            @livewire('statistika-index')

    </section>
    <script>
        var options = {
            chart: {
                type: "bar"
            },
            series: [
                {
                    name: "sales",
                    data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
                }
            ],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();

    </script>
    <!--classes-page end-->
    <!--newsletter-sec end-->
@endsection
