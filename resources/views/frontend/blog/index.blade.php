@extends('layouts.frontend')

@section('content')
    @php
        $a = \App\Models\About::find(env('SCHOOL_ID'));

    @endphp
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>Blog</h2>
                <ul>
                    <li><a href="blog.html#" title="">Home</a></li>
                    <li><span>Blog</span></li>
                </ul>
            </div>
            <!--pager-content end-->
{{--            <h2 class="page-titlee">{{$a->name}}</h2>--}}
        </div>
    </section>
    <!--pager-section end-->
    <section class="page-content">
        <div class="container">
                  @livewire('blog-index')



        </div>
    </section>
    <!--page-content end-->
    <!--newsletter-sec end-->
@endsection
