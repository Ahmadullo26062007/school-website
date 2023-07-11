@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title">O'qtuvchi qo'shish</h5>
                        </div>


                        <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
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

                                    <h5 class="card-title mb-0">Ismi</h5>

                                    <div class="card-body">
                                        <input type="text" name="firstname" class="form-control"
                                               placeholder="O'qtuvchi ismi">
                                    </div>
                                </div>
                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Familyasi</h5>

                                    <div class="card-body">
                                        <input type="text" name="lastname" class="form-control"
                                               placeholder="O'qtuvchi familyasi">
                                    </div>
                                </div>
                                <div class="col-6 ">

                                    <h5 class="card-title mb-0">Fani</h5>

                                    <div class="card-body">
                                        <input type="text" name="category" class="form-control"
                                               placeholder="O'qtuvchi qaysi fandan dars berishi">
                                    </div>
                                </div>
                                <div class="col-6">

                                    <h5 class="card-title mb-0">O'qtuvchi rasimi</h5>

                                    <div class="card-body">
                                        <input type="file" class="form-control" name="image"
                                               placeholder="O'qtuvchi rasimi">
                                    </div>
                                </div>
                                @if(auth()->user()->school_id==null)
                                <div class="col-6 ">
                                    <h5 class="card-title mb-0">Maktabi</h5>
                                    <div class="card-body">
                                        <select class="form-select" name="school_id" id="">
                                            <option disabled selected>Maktabni tanlang</option>
                                            @foreach($school as $id=> $s)
                                                <option value="{{$id}}">{{$s}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @endif
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
                            <a class="btn btn-secondary mt-3" href="{{ route('teacher.index') }}">
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
