@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title 0">Maktab ma'lumotlarini ko'rish</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <tr>
                                <th>Maktab nomi</th>
                                <td>{{$about->name}}</td>
                            </tr>
                            <tr>
                                <th>Telefon raqam</th>
                                <td>{{$about->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Ma'lumotlari</th>
                                <td>{{$about->description}}</td>
                            </tr>
                            <tr>
                                <th>Joylashgan viloyati</th>
                                <td>{{$about->viloyat}}</td>
                            </tr>
                            <tr>
                                <th>Joylashgan tumani</th>
                                <td>{{$about->tuman}}</td>
                            </tr>
                            <tr>
                                <th>Darslar boshlanish vaqti</th>
                                <td>{{$about->start_time}}</td>
                            </tr>
                            <tr>
                                <th>Darslar tugash vaqti</th>
                                <td>{{$about->end_time}}</td>
                            </tr>
                            <tr>
                                <th>Facebook</th>
                                <td>{{$about->facebook}}</td>
                            </tr>
                            <tr>
                                <th>Instagram</th>
                                <td>{{$about->instagram}}</td>
                            </tr>
                            <tr>
                                <th>Rasimi</th>
                                <td><img width="100px" src="{{asset("images/$about->image")}}"
                                         alt="Maktab rasimi"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <a class="btn btn-secondary mt-3" href="{{route('abouts.index')}}">
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
