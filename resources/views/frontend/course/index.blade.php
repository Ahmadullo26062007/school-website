@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));
    @endphp
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>Course</h2>
                <ul>
                    <li><a href="classes.html#" title="">Home</a></li>
                    <li><span>Courses</span></li>
                </ul>
            </div>
            <!--pager-content end-->
{{--            <h2 class="page-titlee">{{$a->name}}</h2>--}}
        </div>
    </section>
    <!--pager-section end-->
    <section class="classes-page">
        <div class="container">
            <div class="classes-banner"><span>Try now</span>
                <h2>Ozingizga mos kursni tanlang va biz bilan bog`laning</h2><a href="{{route('about')}}" title="" class="btn-default">Biz Haqimizda <i
                        class="fa fa-long-arrow-alt-right"></i></a>
            </div>
            <!--classes-banner end-->
            <!--classes-banner end-->
            @livewire('course-index')

    <!--classes-page end-->
    <!--newsletter-sec end-->
@endsection
