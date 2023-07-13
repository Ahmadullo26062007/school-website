@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));

    @endphp
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">

            </div>
            <!--pager-content end-->
            {{--            <h2 class="page-titlee">{{$a->name}}</h2> --}}
        </div>
    </section>
    <!--pager-section end-->
    <section class="classes-page">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div id="chart">
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
            <!--classes-banner end-->
            @livewire('statistika-index')

    </section>

    <!--classes-page end-->
    <!--newsletter-sec end-->
@endsection
