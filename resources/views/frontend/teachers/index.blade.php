@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));

    @endphp

    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>O'qtuvchilar</h2>
                <ul>
                    <li><a href="{{ route('home') }}" title="">Bosh sahifa</a></li>
                    <li><span>O'qtuvchilar</span></li>
                </ul>
            </div>
            <!--pager-content end-->
            {{--            <h2 class="page-titlee">{{$a->name}}</h2> --}}
        </div>
    </section>
    <section class="classes-page">

            <!--classes-banner end-->
    @livewire('frontend.teachers-table')

    </section>
    <!--pager-section end-->

@endsection
