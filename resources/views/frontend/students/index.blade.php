@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));

    @endphp
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>O'quvchilar</h2>
                <ul>
                    <li><a href="{{ route('front.students') }}" title="">Bosh sahifa</a></li>
                    <li><span>O'quvchilar</span></li>
                </ul>
            </div>
            <!--pager-content end-->
            {{--            <h2 class="page-titlee">{{$a->name}}</h2> --}}
        </div>
    </section>
    <!--pager-section end-->
    <section class="classes-page">
            <!--classes-banner end-->
            @livewire('frontend.students-table')
    </section>
    <!--classes-page end-->
    <!--newsletter-sec end-->
@endsection
