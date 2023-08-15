@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title ">Menejerni barcha ma'lumotlarini ko'rish</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <tr>
                                <th>Ism Familyasi</th>
                                <td>{{$meneger->fullname}}</td>
                            </tr>
                            <tr>
                                <th>Ro'li</th>
                                @php
                                    $role=\App\Models\Role::find($meneger->role_id);
                                    $school=\App\Models\About::find($meneger->school_id);
                                @endphp
                                <td>{{$role->title}}</td>
                            </tr>
                            <tr>
                                <th>Maktabi</th>
                                <td>{{$school->name}}</td>
                            </tr>
                            <tr>
                                <th>Rasimi</th>
                                <td><img width="400px" src="{{asset('images/'.$meneger->image)}}"
                                         alt="Menejer rasimi"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <a class="btn btn-secondary mt-3" href="{{route('menegers.index')}}">
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
