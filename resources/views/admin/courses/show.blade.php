@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title 0">Kursni barcha ma'lumotlarini ko'rish</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <tr>
                                <th>Kurs</th>
                                <td>{{$course->name}}</td>
                            </tr>
                            <tr>
                                <th>Kurs raxbari</th>
                                @php
                                    $teacher=\App\Models\Teacher::find($course->teacher_id);
                                @endphp
                                @if($teacher)
                                    <td>{{$teacher->firstname}} {{$teacher->lastname}}</td>
                                @else
                                    <td>Kurs raxbari yoq</td>
                                @endif
                            </tr>
                            <tr>
                                <th>Kurs kunlari</th>
                                <td>
                                @foreach($course->weeks as $week)
                                    {{$week->name}} |
                                @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Boshlanish vaqti</th>
                                <td>{{$course->start_time}}</td>
                            </tr>
                            <tr>
                                <th>Tugash vaqti</th>
                                <td>{{$course->end_time}}</td>
                            </tr>
                            <tr>
                                <th>Tavsifi</th>
                                <td>{{$course->description}}</td>
                            </tr>
                            <tr>
                                <th>Puli</th>
                                <td>{{$course->price}}</td>
                            </tr>
                            <tr>
                                <th>Rasimi</th>
                                <td><img width="100px" src="{{asset("images/$course->image")}}" alt="{{$course->name}} rasimi"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <a class="btn btn-secondary mt-3" href="{{route('courses.index')}}">
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
