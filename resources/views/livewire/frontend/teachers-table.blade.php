<div class="container">

    <div class="classes-section">
        <div class="classes-sec">
            <div class="row d-flex flex-wrap mt-5">

                <div class="col-12 d-flex justify-content-center">
                    <h1 style="color: #0a0a0a;font-size: 30px; font-weight: 500">Oliy toifalilar</h1>
                </div>
            </div>
            <div class="row">
                @foreach ($teachers as $teacher)
                    @if($teacher->degrees)
                        @if(count($teacher->degrees->ToArray())>0 )
                        @if($teacher->degrees[0]->type_id==1 )


                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="classes-col">
                                    {{-- @dd($teacher)--}}
                                    <div class="class-thumb"><img src="{{"$teacher->image"}}"
                                                                  alt="Teacher's class image"
                                                                  style="width: 100%; height: 100px">
                                    </div>
                                    <div class="class-info">
                                        <p>@php
                                                $a=\App\Models\About::find($teacher->school_id);
                                            @endphp
                                            {{$a->name}} O'qtuvchisi
                                        </p>
                                        <h3>{{ $teacher->firstname }} {{$teacher->lastname}}
                                        </h3>
                                        <span>{{$teacher->category}} Fani O'qtuvchisi</span>
                                        <h5>
                                            @if (empty($teacher->degrees[0]))
                                                <span class="text-dark">
                                                O`rta maxsus
                                            </span>
                                            @else
                                                @foreach ($teacher->degrees as $degree)
                                                    <span class="text-dark">
                                                    {{ App\Models\Degree::TYPES[$degree->type_id] }}
                                                </span>
                                                @endforeach
                                            @endif
                                        </h5>
                                    </div>
                                </div>
                                <!--classes-col end-->
                            </div>
                        @endif
                        @endif
                    @endif
                @endforeach
            </div>
            <!--teachers end-->
        </div>
        <!--teachers-section end-->

        <!--pagination-end-->
    </div>
    <div class="classes-section">
        <div class="classes-sec">
            <div class="row d-flex flex-wrap mt-5">

                <div class="col-12 d-flex justify-content-center">
                    <h1 style="color: #0a0a0a;font-size: 30px; font-weight: 500">1-toifalilar</h1>
                </div>
            </div>
            <div class="row">
                @foreach ($teachers as $teacher)
                    @if($teacher->degrees)
                        @if(count($teacher->degrees->ToArray())>0 )
                        @if($teacher->degrees[0]->type_id==2 )


                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="classes-col">
                                    {{-- @dd($teacher)--}}
                                    <div class="class-thumb"><img src="{{"$teacher->image"}}"
                                                                  alt="Teacher's class image"
                                                                  style="width: 100%; height: 100px">
                                    </div>
                                    <div class="class-info">
                                        <p>@php
                                                $a=\App\Models\About::find($teacher->school_id);
                                            @endphp
                                            {{$a->name}} O'qtuvchisi
                                        </p>
                                        <h3>{{ $teacher->firstname }} {{$teacher->lastname}}
                                        </h3>
                                        <span>{{$teacher->category}} Fani O'qtuvchisi</span>
                                        <h5>
                                            @if (empty($teacher->degrees[0]))
                                                <span class="text-dark">
                                                O`rta maxsus
                                            </span>
                                            @else
                                                @foreach ($teacher->degrees as $degree)
                                                    <span class="text-dark">
                                                    {{ App\Models\Degree::TYPES[$degree->type_id] }}
                                                </span>
                                                @endforeach
                                            @endif
                                        </h5>
                                    </div>
                                </div>
                                <!--classes-col end-->
                            </div>
                        @endif
                        @endif
                    @endif
                @endforeach
            </div>
            <!--teachers end-->
        </div>
        <!--teachers-section end-->

        <!--pagination-end-->
    </div>
    <div class="classes-section">
    <div class="classes-sec">
        <div class="row d-flex flex-wrap mt-5">

            <div class="col-12 d-flex justify-content-center">
                <h1 style="color: #0a0a0a;font-size: 30px; font-weight: 500">2-toifalilar</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($teachers as $teacher)
                @if($teacher->degrees)
                    @if(count($teacher->degrees->ToArray())>0 )
                    @if($teacher->degrees[0]->type_id==3)


                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="classes-col">
                                {{-- @dd($teacher)--}}
                                <div class="class-thumb"><img src="{{"$teacher->image"}}"
                                                              alt="Teacher's class image"
                                                              style="width: 100%; height: 100px">
                                </div>
                                <div class="class-info">
                                    <p>@php
                                            $a=\App\Models\About::find($teacher->school_id);
                                        @endphp
                                        {{$a->name}} O'qtuvchisi
                                    </p>
                                    <h3>{{ $teacher->firstname }} {{$teacher->lastname}}
                                    </h3>
                                    <span>{{$teacher->category}} Fani O'qtuvchisi</span>
                                    <h5>
                                        @if (empty($teacher->degrees[0]))
                                            <span class="text-dark">
                                                O`rta maxsus
                                            </span>
                                        @else
                                            @foreach ($teacher->degrees as $degree)
                                                <span class="text-dark">
                                                    {{ App\Models\Degree::TYPES[$degree->type_id] }}
                                                </span>
                                            @endforeach
                                        @endif
                                    </h5>
                                </div>
                            </div>
                            <!--classes-col end-->
                        </div>
                    @endif
                    @endif
                @endif
            @endforeach
        </div>
                <!--teachers e11nd-->
            </div>
            <!--teachers-section end-->

            <!--pagination-end-->
        </div>
    <div class="classes-section">
        <div class="classes-sec">
            <div class="row d-flex flex-wrap mt-5">

                <div class="col-12 d-flex justify-content-center">
                    <h1 style="color: #0a0a0a;font-size: 30px; font-weight: 500">O`rta maxsus</h1>
                </div>
            </div>
            <div class="row">

                @foreach ($teachers as $teacher)
                    @if(count($teacher->degrees->ToArray())==0 )
                        @php
                            $a=\App\Models\About::find($teacher->school_id);
                        @endphp
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="classes-col">
                                        {{-- @dd($teacher)--}}
                                        <div class="class-thumb"><img src="{{"$teacher->image"}}"
                                                                      alt="Teacher's class image"
                                                                      style="width: 100%; height: 100px">
                                        </div>
                                        <div class="class-info">

                                            <div class="d-flex justify-content-between">
                                                <h3 style="font-size: 20px; font-weight: 600" class="text-dark">
                                                    {{ $teacher->firstname }} {{$teacher->lastname}}
                                                </h3>

                                                 @if(array_key_exists($teacher->id, $_SESSION ))
                                                    <button style="background:none ;color: red; font-size: 30px" >   <i class="fa-solid fa-heart"></i></button>
                                                @else
                                                            <button style="background:none ;color: red; font-size: 30px" wire:click="likeable({{$teacher->id}})">   <i class="fa-regular fa-heart"></i></i>
                                                            </button>
                                                @endif
                                            </div>
                                            <p>
                                                {{$a->name}} O'qtuvchisi
                                            </p><br>
                                            <span>{{$teacher->category}} Fani O'qtuvchisi</span>
                                            <h5>
                                                @if (empty($teacher->degrees[0]))
                                                    <span class="text-dark">
                                                O`rta maxsus
                                            </span>
                                                @else
                                                    @foreach ($teacher->degrees as $degree)
                                                        <span class="text-dark">
                                                    {{ App\Models\Degree::TYPES[$degree->type_id] }}
                                                       </span>
                                                    @endforeach
                                                @endif
                                            </h5>
                                        </div>
                                    </div>
                                    <!--classes-col end-->
                                </div>

                    @endif
                @endforeach
            </div>
            <!--teachers end-->
        </div>
        <!--teachers-section end-->
        <div class="mdp-pagiation">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if((count( \App\Models\Teacher::where('school_id',env('SCHOOL_ID'))->get()->ToArray() )>$count))
                        <li class="page-item"><a wire:click="viewMore" role="button" type="button"
                                                 class="page-link">Yana</a>
                        </li>
                    @endif

                </ul>
            </nav>
        </div>
        <!--pagination-end-->
    </div>
</div>
