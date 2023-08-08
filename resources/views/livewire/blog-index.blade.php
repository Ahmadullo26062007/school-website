<div class="row">

    <div class="col-lg-9">
        @php
            $a = \App\Models\About::find(env('SCHOOL_ID'));

        @endphp
        <div class="blog-section p-0 posts-page">
            <div class="blog-posts">

                    @if(!empty($blogs->ToArray()))
                @foreach($blogs as $blog)
                        <div class="blog-post">
                            <div class="blog-thumbnail">
                                <a href="" title="">
                                    <img src="{{$blog->image}}" alt="" class="w-100">
                                </a>
                                <span class="category"> {{$blog->category->name}}, {{$a->name}}</span></div>
                            <div class="blog-info">
                                <ul class="meta">
                                    <li><a title="">{{$blog->created_at->format('d/m/Y')}}</a></li>
                                    <li><a title="">by Admin</a></li>
                                    <li><img src="assets/img/icon13.png" alt="">
                                        <a href="" title="">{{$blog->category->name}},</a><a href="blog.html#" title="">
                                            School</a>
                                    </li>
                                </ul>
                                <h3 class="stick"><a href="{{route('blog.show',$blog->id)}}"
                                                     title="">{{$blog->title}}</a></h3>
                                <p>{{$blog->description}}</p>
                                <a href="{{route('blog.show',$blog->id)}}" title="" class="read-more">Ko`rish <i
                                        class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                @endforeach
                    @else
                        <h1 class="text-danger">Hozircha yangiliklar mavjud emas</h1>
                    @endif

            </div>
            <div class="mdp-pagiation">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        @if((count( \App\Models\Blog::where('school_id',env('SCHOOL_ID'))->get()->ToArray() )>$count))
                            <li class="page-item"><a style="color:#f37335 " class="page-link"
                                                     wire:click="pilus()">Yana+</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <!--blog-section end-->

        <!--pagination-end-->
    </div>

    <div class="col-lg-3">
        <div class="sidebar">

            <!--widget-search end-->
            <div class="widget widget-categories">
                <h3 class="widget-title">Categories</h3>
                <ul>
                    @foreach(\App\Models\Category::all() as $c)
                        <li><a title="">{{$c->name}}</a> <span>{{count($c->blogs->ToArray())}}</span></li>

                    @endforeach

                </ul>
            </div>
            <!--widget-categories end-->
            <div class="widget widget-posts">
                <h3 class="widget-title">Ohirgi yangiliklar</h3>
                <div class="wd-posts">
                    @foreach(\App\Models\Blog::where('school_id',env('SCHOOL_ID'))->take(3)->orderByDesc('id')->get() as $b)
                        <div class="wd-post d-flex flex-wrap">
                            <div class="wd-thumb"><img style="width: 52px;height: 52px;border-radius: 18%"
                                                       src="{{asset('images/'.$b->image)}}" alt=""></div>
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
        <!--sidebar end-->
    </div>
</div>
