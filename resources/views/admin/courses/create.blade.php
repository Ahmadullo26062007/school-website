@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title">Kurs qo'shish</h5>
                        </div>


                        <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            @csrf
                            <div class="row">
                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Kurs nomi</h5>

                                    <div class="card-body">
                                        <input type="text" name="name" class="form-control"
                                               placeholder="Kurs nomi">
                                    </div>
                                </div>
                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Kurs o'qtuvchisi</h5>

                                    <div class="card-body">
                                        <select class="form-select" name="teacher_id">
                                            <option disabled selected>O'qtuvchini tanlang</option>
                                            @foreach($teacher as $id=> $t)
                                                <option value="{{$id}}">{{$t}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Kurs boshlanish vaqti</h5>

                                    <div class="card-body">
                                        <input type="time" name="start_time" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Kurs tugash vaqti</h5>

                                    <div class="card-body">
                                        <input type="time" name="end_time" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Kurs Kunlari</h5>

                                    <div class="card-body">
                                        <select class="form-select" name="weeks[]" multiple>
                                            <option disabled selected>Hafta kunlarini tanlang</option>
                                            @foreach($weeks as $id=> $week)
                                                <option value="{{$id}}">{{$week}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Kurs Rasimi</h5>

                                    <div class="card-body">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>

                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Kurs Puli</h5>

                                    <div class="card-body">
                                        <input type="text" name="price" placeholder="Kurs pulini yozing"
                                               class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <h5 class="card-title mb-0">Sinf haqida</h5>
                                    <div class="card-body">
                                        <label class="form-label">
                                            <textarea class="form-control" rows="5" cols="100" name="description"
                                                      placeholder="Sinf haqida">

                                            </textarea>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd"
                                          d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                Yaratish
                            </button>
                            <a class="btn btn-secondary mt-3" href="{{ route('courses.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                                Orqaga
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
