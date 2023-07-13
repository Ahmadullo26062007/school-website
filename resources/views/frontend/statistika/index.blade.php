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

    <!--classes-page end-->
    <!--newsletter-sec end-->
@endsection
