@extends('layouts.frontend')

@section('content')
       @php
           $a = \App\Models\About::find(env('SCHOOL_ID'));

       @endphp
    <section style="background-image: url({{asset("images/$blog->image")}});" class="pager-section blog-version">
        <div class="container">
            <div class="pager-content text-center">
                <ul>
                    <li><a href="{{route('home')}}" title="">Home</a></li>
                    <li><a href="{{route('blog.index')}}" title="">Blog</a></li>
                    <li><span> {{$blog->title}} </span></li>
                </ul>
                <h2>{{$blog->title}}</h2><span class="categry"> {{$blog->category->name}}, {{$a->name}}</span>
                <ul class="meta">
                    <li><a href="" title="">{{$blog->created_at->format('d/m/y')}}</a></li>
                    <li><a href="" title="">by Admin</a></li>
                    <li><img src="" alt=""><a href="" title="">{{$blog->category->name}},</a><a href="" title=""> maktab</a></li>
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


                    <div class="row">
                        <div class="col-md-6">
                            <div class="oderd">
                                <h3>Tartibsiz jadval</h3>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <!--ordrd end-->
                        </div>
                        <div class="col-md-6">
                            <div class="oderd">
                                <h3>Tartibsiz jadval</h3>
                                <ol>
                                    <li>1. Etiam ante nisl, maximus vitae sem non, dignissim</li>
                                    <li>2. Donec blandit, sapien eu porttitor blandit</li>
                                    <li>3. Sed at urna at massa viverra feugiat non</li>
                                </ol>
                            </div>
                            <!--ordrd end-->
                        </div>
                    </div>


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
                    <!--widget-categories end-->
                    <div class="widget widget-posts">
                        <h3 class="widget-title">Ohirgi yangiliklar</h3>
                        <div class="wd-posts">
                            @foreach(\App\Models\Blog::where('school_id',env('SCHOOL_ID'))->take(3)->orderByDesc('id')->get() as $b)
                                <div class="wd-post d-flex flex-wrap">
                                    <div class="wd-thumb"><img style="width: 52px;height: 52px;border-radius: 18%" src="{{asset('images/'.$b->image)}}" alt=""></div>
                                    <div class="wd-info">
                                        <h3><a href="{{route('blog.show',$b->id)}}" title="">{{$b->title}}</a></h3>
                                        <span>{{$b->created_at->format('d/m/y')}}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--wd-posts end-->
                    </div>


                    <!--widget-archives end-->
                    <div class="widget widget-tags">
                        <h3 class="widget-title">Turlar</h3>
                        <ul>
                            @foreach(\App\Models\Category::all() as $c)
                                <li><a wire:click="category({{$c->id}})" title="">{{$c->name}}</a></li>

                            @endforeach

                            <li><a wire:click="category(0)" title="">hammasi</a></li>

                        </ul>
                    </div>
                    <!--widget-tags end-->
                    <div class="widget widget-calendar">
                        <h3 class="widget-title">Calendar</h3>
                        <div class="mdp-calendar">
                            <h3 class="month"> {{now()->format('d M Y')}}</h3>
                            {{--                    <table>--}}
                            {{--                        <thead>--}}
                            {{--                        <tr>--}}
                            {{--                            <th>S</th>--}}
                            {{--                            <th>M</th>--}}
                            {{--                            <th>T</th>--}}
                            {{--                            <th>W</th>--}}
                            {{--                            <th>T</th>--}}
                            {{--                            <th>F</th>--}}
                            {{--                            <th>S</th>--}}
                            {{--                        </tr>--}}
                            {{--                        </thead>--}}
                            {{--                        <tbody>--}}
                            {{--                        <tr>--}}
                            {{--                            <td></td>--}}
                            {{--                            <td></td>--}}
                            {{--                            <td></td>--}}
                            {{--                            <td>1</td>--}}
                            {{--                            <td>2</td>--}}
                            {{--                            <td>3</td>--}}
                            {{--                            <td>4</td>--}}
                            {{--                        </tr>--}}
                            {{--                        <tr>--}}
                            {{--                            <td>5</td>--}}
                            {{--                            <td class="active">6</td>--}}
                            {{--                            <td>7</td>--}}
                            {{--                            <td>8</td>--}}
                            {{--                            <td>9</td>--}}
                            {{--                            <td>10</td>--}}
                            {{--                            <td>11</td>--}}
                            {{--                        </tr>--}}
                            {{--                        <tr>--}}
                            {{--                            <td>12</td>--}}
                            {{--                            <td>13</td>--}}
                            {{--                            <td>14</td>--}}
                            {{--                            <td>15</td>--}}
                            {{--                            <td>16</td>--}}
                            {{--                            <td>17</td>--}}
                            {{--                            <td>18</td>--}}
                            {{--                        </tr>--}}
                            {{--                        <tr>--}}
                            {{--                            <td>19</td>--}}
                            {{--                            <td>20</td>--}}
                            {{--                            <td>21</td>--}}
                            {{--                            <td>22</td>--}}
                            {{--                            <td>23</td>--}}
                            {{--                            <td>24</td>--}}
                            {{--                            <td>25</td>--}}
                            {{--                        </tr>--}}
                            {{--                        <tr>--}}
                            {{--                            <td>26</td>--}}
                            {{--                            <td>27</td>--}}
                            {{--                            <td>28</td>--}}
                            {{--                            <td>29</td>--}}
                            {{--                            <td>30</td>--}}
                            {{--                            <td>31</td>--}}
                            {{--                        </tr>--}}
                            {{--                        </tbody>--}}
                            {{--                    </table>--}}
                            {{--                    <ul class="controls">--}}
                            {{--                        <li><a href="blog.html#" title=""><i class="fa fa-angle-left"></i> Prev</a>--}}
                            {{--                        </li>--}}
                            {{--                        <li><a href="blog.html#" title="">Next <i class="fa fa-angle-right"></i></a>--}}
                            {{--                        </li>--}}
                            {{--                    </ul>--}}
                        </div>
                        <!--mdp-calendar end-->
                    </div>
                    <!--widget-calendar end-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--newsletter-sec end-->
@endsection
