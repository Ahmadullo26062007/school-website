@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title 0">Kurslar</h5>
                            <a class="btn btn-primary mb-3" href="{{route('courses.create')}}">
                                Kurs qo'shish
                            </a>
                        </div>


                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kurs</th>
                                <th>Kurs raxbari</th>
                                <th class="d-none d-xl-table-cell">Kurs rasmi</th>
                                <th>Maktabi</th>
                                <th class="d-none d-xl-table-cell">Tavsifi</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                @php
                                    $about=App\Models\About::find(auth()->user()->school_id);
                                @endphp
                                @foreach($about->courses as $course)
                                    <tr>

                                        <td>{{$course->id}}</td>
                                        <td>{{$course->name}}</td>
                                        @if($course->teacher_id)
                                        @php
                                            $teacher=\App\Models\Teacher::find($course->teacher_id);
                                        @endphp
                                        <td>{{$teacher->firstname}} {{$teacher->lastname}}</td>
                                        @else
                                            <td>Hali O'qtuvchi tayinlanmagan</td>
                                        @endif
                                        <td><img width="100px" src="{{'images/'.$course->image}}"
                                                 alt="{{$course->name}} rasimi"></td>
                                        @php
                                            $school=App\Models\About::find($course->school_id);
                                        @endphp
                                        <td>{{$school->name}}</td>
                                        <td class="d-none d-xl-table-cell">
                                            {{$course->description}}
                                        </td>

                                        <td>
                                            <a href="{{route('courses.edit',[$course->id])}}" class="btn btn-info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                </svg>
                                            </a>
                                            <a href="{{route('courses.show',[$course->id])}}" class="btn btn-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                    <path
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                </svg>
                                            </a>
                                            <form class="d-inline" action="{{ route('courses.destroy', $course->id) }}"
                                                  method="post" onsubmit="return confirm('{{ trans('Ochirish') }}');">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-flat show_confirm"
                                                        data-toggle="tooltip"
                                                        title='Delete' type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                         fill="currentColor" class="bi bi-trash-fill"
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
