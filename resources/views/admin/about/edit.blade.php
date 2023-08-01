@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title">Maktab ma'lumotlarini yangilash</h5>
                        </div>
                        <form action="{{route('abouts.update',$about->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                        <div class="row">
                            <div class="col-6 ">

                                <h5 class="card-title mb-0">Maktab nomi</h5>

                                <div class="card-body">
                                    <input type="text" name="name" class="form-control" placeholder="Maktab nomi"
                                           value="{{$about->name}}">
                                </div>
                            </div>
                            <div class="col-6 ">

                                <h5 class="card-title mb-0">Telefon raqami</h5>

                                <div class="card-body">
                                    <input type="number" name="phone_number" class="form-control" placeholder="Telefon raqam"
                                           value="{{$about->phone_number}}">
                                </div>
                            </div>
                            <div class="">

                                <h5 class="card-title mb-0">Ma'lumotlar</h5>

                                <div class="card-body">
                                    <textarea class="form-control" name="description" rows="2"
                                              placeholder="Ma'lumotlar">{{$about->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-6">

                                <h5 class="card-title mb-0">Darslar boshlanish vaqti</h5>

                                <div class="card-body">
                                    <input type="time" class="form-control" name="start_time" placeholder="Darslar boshlanish vaqti"
                                           value="{{$about->start_time}}">
                                </div>
                            </div>
                            <div class="col-6">

                                <h5 class="card-title mb-0">Darslar tugash vaqti</h5>

                                <div class="card-body">
                                    <input type="time" class="form-control" name="end_time" placeholder="Darslar tugash vaqti"
                                           value="{{$about->end_time}}">
                                </div>
                            </div>
                            <div class="col-6">

                                <h5 class="card-title mb-0">Maktab joylashgan viloyat</h5>

                                <div class="card-body">
                                    <input type="text" class="form-control" name="viloyat" placeholder="Maktab joylashgan viloyat"
                                           value="{{$about->viloyat}}">
                                </div>
                            </div>
                            <div class="col-6">

                                <h5 class="card-title mb-0">Maktab joylashgan tuman</h5>

                                <div class="card-body">
                                    <input type="text" class="form-control" name="tuman" placeholder="Maktab joylashgan tuman"
                                           value="{{$about->tuman}}">
                                </div>
                            </div>
                            <div class="col-6">

                                <h5 class="card-title mb-0">Maktab ijtimoiy tarmoqlari--->Facebook</h5>

                                <div class="card-body">
                                    <input type="text" name="facebook" class="form-control"
                                           placeholder="Maktab ijtimoiy tarmoqlari Facebook"
                                           value="{{$about->facebook}}">
                                </div>
                            </div>
                            <div class="col-6">

                                <h5 class="card-title mb-0">Maktab ijtimoiy tarmoqlari--->Instagram</h5>

                                <div class="card-body">
                                    <input type="text" class="form-control" name="instagram"
                                           placeholder="Maktab ijtimoiy tarmoqlari Instagram"
                                           value="{{$about->instagram}}">
                                </div>
                            </div>
                            <div class="col-6">

                                <h5 class="card-title mb-0">Maktab rasimi</h5>

                                <div class="card-body">
                                    <input type="file" class="form-control" name="image"
                                           placeholder="Maktab rasimi">
                                </div>
                            </div>
                            <div class="col-6">

                                <h5 class="card-title mb-0">Maktab rasimi</h5>

                                <div class="card-body">
                                    <img width="100px" src="{{$about->image}}" alt="Maktab rasimi">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success mt-3" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                                Saqlash
                            </button>
                            <a class="btn btn-secondary mt-3" href="{{route('abouts.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                                Orqaga
                            </a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
