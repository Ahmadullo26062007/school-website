@extends('layouts.frontend')

@section('content')
       @php
           $a = \App\Models\About::find(env('SCHOOL_ID'));

       @endphp
    <section style="background-image: url({{$blog->image}});" class="pager-section blog-version">
        <div class="container">
            <div class="pager-content text-center">
                <ul>
                    <li><a href="{{route('home')}}" title="">Home</a></li>
                    <li><a href="{{route('blog.index')}}" title="">Blog</a></li>
                </ul>
                <h2>{{substr($blog->title,0,30)}}...</h2><span class="categry"> {{$blog->category->name}}, {{$a->name}}</span>
                <ul class="meta text-light">
                    <li>{{$blog->created_at->format('d/m/y')}}</li>
                    <li>by Admin</li>
                    <li><img src="" alt="">{{$blog->category->name}}, {{$a->name}}</li>
                </ul>
            </div><!--pager-content end-->
        </div>
    </section><!--pager-section end-->
<section class="page-content p80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-post single">
                    <p>{{$blog->description}}</p>


                </div>
                <!--blog-post single end-->

                <!--mdp-contact end-->
            </div>
            <div class="col-lg-3">
                <div class="sidebar">

                    <!--widget-search end-->
                    <div class="widget widget-categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            @foreach(\App\Models\Category::all() as $c)
                                <li><a href="blog.html#" title="">{{$c->name}}</a> <span>{{count($c->blogs->ToArray())}}</span></li>

                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--newsletter-sec end-->
@endsection
