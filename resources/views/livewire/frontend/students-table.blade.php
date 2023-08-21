<div class="container">
    @php
        
        function student_b($s)
        {
            if ($s->certificate) {
                return true;
            } else {
                return false;
            }
        }
        
    @endphp
    <div class="classes-section">

        <div class="classes-sec">
            <div class="row d-flex flex-wrap mt-5">

                <div class="col-12 d-flex justify-content-center mb-5">
                    <h1 style="color: #0a0a0a;font-size: 30px; font-weight: 500; ">IELTS olganlar</h1>
                </div>
            </div>
            <div class="row">
                @php
                    $count_ielts_student = 0;
                @endphp
                @foreach ($students as $student)

                    {{--                @if (student_b($student)) --}}
                    @if ($student->certificate)
                        @if ($student->certificate->type == 1)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="classes-col">
                                    {{-- @dd($student) --}}
                                    <div class="class-thumb"><img src="{{ "$student->image" }}"
                                            alt="Student's class image" class="w-100">
                                    </div>
                                    <div class="class-info">
                                        <p>
                                            @php
                                                $a = \App\Models\About::find($student->school_id);
                                            @endphp
                                            {{ $a->name }} O'quvchisi:
                                        </p>
                                        <h3>{{ $student->fullname }}
                                        </h3>
                                        <span>
                                            @if (!empty($student->certificate))
                                                @if (App\Models\Student::TYPES[$student->certificate->type] == 1)
                                                    {{ App\Models\Student::TYPES[$student->certificate->type] }}
                                                @else
                                                    {{ App\Models\Student::TYPES[$student->certificate->type] }}
                                                    {{ App\Models\Student::DEGREE[$student->certificate->degree] }}
                                                    @if ($student->certificate->ball > 0)
                                                        {{ $student->certificate->ball }}
                                                    @endif
                                                @endif
                                            @else
                                                Sertifikat yo'q
                                            @endif
                                        </span> <span></span>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="posted-by text-dark">{{ $student->class->class }} Sinf
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--classes-col end-->
                            </div>
                            @php
                                $count_ielts_student = 1;
                            @endphp
                        @endif
                    @endif
                @endforeach
                @if ($count_ielts_student == 0)
                    <div class="col-12 d-flex justify-content-center">
                        <h1 style="color: #ff0000;font-size: 30px; font-weight: 500;  margin-bottom:5%;">Mavjud
                            emas
                        </h1>
                    </div>
                @endif
            </div>
        </div>
        <!--classes-sec end-->

        <!--pagination-end-->


    </div>
    <div class="classes-section">

        <div class="classes-sec">
            <div class="row d-flex flex-wrap mt-5">

                <div class="col-12 d-flex justify-content-center mb-5">
                    <h1 style="color: #0a0a0a;font-size: 30px; font-weight: 500; ">SEFR olganlar</h1>
                </div>
            </div>
            <div class="row">
                @php
                    $count_seft_student = 0;
                @endphp
                @foreach ($students as $student)

                    {{--                @if (student_b($student)) --}}
                    @if ($student->certificate)
                        @if ($student->certificate->type == 2)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="classes-col">
                                    {{-- @dd($student) --}}
                                    <div class="class-thumb"><img src="{{ "$student->image" }}"
                                            alt="Student's class image" class="w-100">
                                    </div>
                                    <div class="class-info">
                                        <p>
                                            @php
                                                $a = \App\Models\About::find($student->school_id);
                                            @endphp
                                            {{ $a->name }} O'quvchisi:
                                        </p>
                                        <h3>{{ $student->fullname }}
                                        </h3>
                                        <span>
                                            @if (!empty($student->certificate))
                                                @if (App\Models\Student::TYPES[$student->certificate->type] == 1)
                                                    {{ App\Models\Student::TYPES[$student->certificate->type] }}
                                                @else
                                                    {{ App\Models\Student::TYPES[$student->certificate->type] }}
                                                    {{ App\Models\Student::DEGREE[$student->certificate->degree] }}
                                                    @if ($student->certificate->ball > 0)
                                                        {{ $student->certificate->ball }}
                                                    @endif
                                                @endif
                                            @else
                                                Sertifikat yo'q
                                            @endif
                                        </span> <span></span>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="posted-by text-dark">{{ $student->class->class }} Sinf
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--classes-col end-->
                            </div>
                            @php
                                $count_seft_student = 1;
                            @endphp
                        @endif
                    @endif
                @endforeach
                @if ($count_seft_student == 0)
                    <div class="col-12 d-flex justify-content-center">
                        <h1 style="color: #ff0000;font-size: 30px; font-weight: 500;  margin-bottom:5%;">Mavjud
                            emas
                        </h1>
                    </div>
                @endif
            </div>
        </div>
        <!--classes-sec end-->

        <!--pagination-end-->


    </div>
    <div class="classes-section">

        <div class="classes-sec">
            <div class="row d-flex flex-wrap mt-5">

                <div class="col-12 d-flex justify-content-center mb-5">
                    <h1 style="color: #0a0a0a;font-size: 30px; font-weight: 500;">IT o`quvchilar</h1>
                </div>
            </div>
            <div class="row">
                @php
                    $count_it_student = 0;
                @endphp
                @foreach ($students as $student)

                    {{--                @if (student_b($student)) --}}
                    @if ($student->certificate)
                        @if ($student->certificate->type == 3)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="classes-col">
                                    {{-- @dd($student) --}}
                                    <div class="class-thumb"><img src="{{ "$student->image" }}"
                                            alt="Student's class image" class="w-100">
                                    </div>
                                    <div class="class-info">
                                        <p>
                                            @php
                                                $a = \App\Models\About::find($student->school_id);
                                            @endphp
                                            {{ $a->name }} O'quvchisi:
                                        </p>
                                        <h3>{{ $student->fullname }}
                                        </h3>
                                        <span>
                                            @if (!empty($student->certificate))
                                                @if (App\Models\Student::TYPES[$student->certificate->type] == 1)
                                                    {{ App\Models\Student::TYPES[$student->certificate->type] }}
                                                @else
                                                    {{ App\Models\Student::TYPES[$student->certificate->type] }}
                                                    {{ App\Models\Student::DEGREE[$student->certificate->degree] }}
                                                    @if ($student->certificate->ball > 0)
                                                        {{ $student->certificate->ball }}
                                                    @endif
                                                @endif
                                            @else
                                                Sertifikat yo'q
                                            @endif
                                        </span> <span></span>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="posted-by text-dark">{{ $student->class->class }} Sinf
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--classes-col end-->
                            </div>
                            @php
                                $count_it_student = 1;
                            @endphp
                        @endif
                    @endif
                @endforeach
                @if ($count_it_student == 0)
                    <div class="col-12 d-flex justify-content-center">
                        <h1 style="color: #ff0000;font-size: 30px; font-weight: 500;  margin-bottom:5%;">Mavjud
                            emas
                        </h1>
                    </div>
                @endif
            </div>
        </div>
        <!--classes-sec end-->

        <!--pagination-end-->


    </div>
    <div class="classes-section">

        <div class="classes-sec">
            <div class="row d-flex flex-wrap mt-5">

                <div class="col-12 d-flex justify-content-center mb-5">
                    <h1 style="color: #0a0a0a;font-size: 30px; font-weight: 500; ">Sertificatsiz Oquvchilar</h1>
                </div>
            </div>
            <div class="row">
                @php
                    $count_student = 0;
                @endphp
                @foreach ($students as $student)

                    {{--                @if (student_b($student)) --}}
                    @if (!$student->certificate)

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="classes-col">
                                {{-- @dd($student) --}}
                                <div class="class-thumb"><img src="{{ "$student->image" }}" alt="Student's class image"
                                        class="w-100">
                                </div>
                                <div class="class-info">
                                    <p>
                                        @php
                                            $a = \App\Models\About::find($student->school_id);
                                        @endphp
                                        {{ $a->name }} O'quvchisi:
                                    </p>
                                    <h3>{{ $student->fullname }}
                                    </h3>
                                    <span>
                                        @if (!empty($student->certificate))
                                            @if (App\Models\Student::TYPES[$student->certificate->type] == 1)
                                                {{ App\Models\Student::TYPES[$student->certificate->type] }}
                                            @else
                                                {{ App\Models\Student::TYPES[$student->certificate->type] }}
                                                {{ App\Models\Student::DEGREE[$student->certificate->degree] }}
                                                @if ($student->certificate->ball > 0)
                                                    {{ $student->certificate->ball }}
                                                @endif
                                            @endif
                                        @else
                                            Sertifikat yo'q
                                        @endif
                                    </span> <span></span>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="posted-by text-dark">{{ $student->class->class }} Sinf
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--classes-col end-->
                        </div>
                        @php
                            $count_student = 1;
                        @endphp
                    @endif

                @endforeach
                @if ($count_student == 0)
                    <div class="col-12 d-flex justify-content-center">
                        <h1 style="color: #ff0000;font-size: 30px; font-weight: 500;  margin-bottom:5%;">Mavjud
                            emas
                        </h1>
                    </div>
                @endif
            </div>
        </div>
        <!--classes-sec end-->
        <div class="mdp-pagiation">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if (count(
                            \App\Models\Student::where('school_id', env('SCHOOL_ID'))->get()->ToArray()) > $count)
                        <li class="page-item"><a wire:click="viewMore()" class="page-link" role="button"
                                type="button">Yana</a>
                    @endif
                    </li>
                </ul>
            </nav>
            {{-- <button wire:click="viewMore" role="button" type="button" class="btn btn-danger">Yana</button> --}}
        </div>
        <!--pagination-end-->


    </div>

</div>
