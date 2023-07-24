
<div class="classes-section">
    <div class="classes-sec">
        <div class="row">
            @foreach($classes as $course)

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="classes-col">
                        <div class="class-thumb"><img src="{{asset('images/'.$course->image)}}" alt="" class="w-100"> <a
                                href="{{route('course.detail',$course->id)}}" title="" class="crt-btn">
                                <img src="{{asset('assets/img/icon10.png')}}" alt=""></a></div>
                        <div class="class-info">
                            <h3><a href="{{route('course.detail',$course->id)}}" title="">{{$course->name}}</a>
                            </h3>
                            <span>
                                @php $weeks='' ;
                                foreach($course->weeks as $k=>$w){
                                    if($k==0){
                                        $weeks=substr($w->name,0, 4);

                                    }else{
                                       $weeks=$weeks.'-'.substr($w->name,0, 4);
                                    }
                                }
                                @endphp
                                {{$weeks}}
                            </span> <span>{{$course->start_time}} - {{$course->end_time}}</span>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="posted-by"><img style="width: 30px; height: 30px"
                                                            src="{{asset('images/'.$course->teacher->image)}}" alt="">
                                    <a href="classes.html#"
                                       title="">{{$course->teacher->firstname}} {{$course->teacher->lastname}}</a></div>
                                <strong
                                    class="price">{{$course->price}}</strong>
                            </div>
                        </div>
                    </div>
                    <!--classes-col end-->
                </div>
            @endforeach
        </div>

    </div>
    <!--classes-sec end-->
    <div class="mdp-pagiation">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                @if((count( \App\Models\Course::where('school_id',env('SCHOOL_ID'))->get()->ToArray() )>8))
                    <li class="page-item"><a style="color:#f37335 " class="page-link" wire:click="pilus()">Yana+</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
    <!--pagination-end-->
</div>
</div>
</section>
