<section class="page-content">
    <div class="container">
        <!--classes-banner end-->
        <div class="classes-section">
            <div class="classes-sec">
                <div class="row">
                    @foreach ($teachers as $teacher)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="classes-col">
                                {{-- @dd($teacher)--}}
                                <div class="class-thumb"><img src="{{"$teacher->image"}}"
                                                              alt="Student's class image"
                                                              style="width: 277px; height: 100px">
                                </div>
                                <div class="class-info">
                                    <h3>{{ $teacher->firstname }} {{$teacher->lastname}}
                                    </h3>
                                    <span>{{$teacher->category}} O'qtuvchisi</span>
                                    <h5>
                                        @if (empty($teacher->degrees[0]))
                                            <span class="text-dark">
                                                Yangi toifa
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
</section>
