<section class="page-content">
    <div class="container">
        <div class="teachers-section p-0">
            <div class="teachers">
                <div class="row griddd">
                    @foreach ($teachers as $teacher)
                        <div>
                            <div class="teacher">
                                <div class="teacher-img">
                                    <div style="height: 300px">

                                        <img style="width: 235px; height: 300px;" src="{{ asset("images/$teacher->image") }}" alt="" class="w-100">
                                    </div>

                                    <div class="teacher-info">
                                        <h3><a href="#" title="">{{ $teacher->firstname }}
                                                {{ $teacher->lastname }}</a></h3>
                                        <span>{{ $teacher->category }}
                                            O'qituvchisi</span>
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
                                    </div>
                                </div>
                                <!--teacher end-->
                            </div>
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
                            <li class="page-item"><a style="color:#f37335 " class="page-link" wire:click="pilus()">Yana+</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
            <!--pagination-end-->
        </div>
</section>
