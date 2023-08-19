    <div class="classes-section">
    <div class="classes-sec">
        <div class="row">
            @foreach ($classes as $class)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="classes-col">
                        <div class="class-thumb"><img src="{{ asset("images/$class->image") }}" alt="class image"
                                class="w-100">
                        </div>
                        <div class="class-info">
                            <h3><a href="{{ route('class.detail', $class->id) }}"
                                    title="">{{ $class->class }} Sinf</a>
                            </h3>
                            <span>Xarkuni</span> <span></span>
                            <div class="d-flex flex-wrap align-items-center">
                                @php
                                    $image = $class->teacher->image;
                                @endphp
                    
                                <div class="posted-by"><img style="width: 30px; height: 30px" src="{{ $image }}" alt="">
                                    <a title="">{{ $class->teacher->firstname }}
                                        {{ $class->teacher->lastname }}</a></div>
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
                @if(count(\App\Models\Classes::where('school_id',env('SCHOOL_ID'))->get()->ToArray()) > $count)

                    <li class="page-item"><a wire:click="viewMore()" class="page-link" role="button" type="button">Yana</a>
                @endif
            </ul>
        </nav>
        {{-- <button wire:click="viewMore" role="button" type="button" class="btn btn-danger">Yana</button> --}}
    </div>
    <!--pagination-end-->


</div>
