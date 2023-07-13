@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title 0">O'quvchini barcha ma'lumotlarini ko'rish</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <tr>
                                <th>Ism familyasi</th>
                                <td>{{$student->fullname}}</td>
                            </tr>
                            <tr>
                                <th>Sinfi</th>
                                @php
                                    $class=\App\Models\Classes::find($student->class_id);
                                @endphp
                                <td>{{$class->class}}</td>
                            </tr>
                            @if(auth()->user()->school_id==null)
                                <tr>
                                    <th>Maktabi</th>
                                    @php
                                        $school=\App\Models\About::find($student->school_id);
                                    @endphp
                                    <td>{{$school->name}}</td>
                                </tr>
                            @endif
                            <tr>
                                <th>Rasimi</th>

                                <td><img width="340px" src="{{asset('images/'.$student->image)}}"
                                         alt="O'quchini rasimi">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <a class="btn btn-secondary mt-3" href="{{route('students.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Orqaga
            </a>
        </div>
    </main>
@endsection
