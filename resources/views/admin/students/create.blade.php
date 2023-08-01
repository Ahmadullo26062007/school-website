@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title">O'quvchi qo'shish</h5>
                        </div>


                        <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger text-danger"  role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            @csrf
                            <div class="row">
                                <div class="col-6 ">


                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Ism Familya</h5>
                                        <input type="text" name="fullname" class="form-control"
                                               placeholder="O'quvchi ism familyasi">
                                    </div>
                                </div>
                                <div class="col-6 ">

                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Sinifi</h5>
                                       <select name="class_id" class="form-select">
                                           <option disabled selected>Sinifini tanlang</option>
                                           @foreach($classes as $id=>$item)
                                               <option value="{{$id}}">{{$item}}</option>
                                           @endforeach
                                       </select>
                                    </div>
                                </div>
                                @if(auth()->user()->school_id==null)
                                    <div class="col-6">
                                        <div class="card-body">
                                        <h5 class="card-title ">Maktabi</h5>
                                            <select class="form-select" name="school_id" id="">
                                                <option disabled selected>Maktabni tanlang</option>
                                                @foreach($school as $id=> $s)
                                                    <option value="{{$id}}">{{$s}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-6">
                                    <div class="card-body">
                                        <h5 class="card-title ">Rasimi</h5>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <h5 class="card-title mb-0">To'p o'quvchi</h5>
                                    <div class="card-body">
                                        <select class="form-select" name="great_student" id="">
                                            <option disabled selected>Tanlang</option>
                                            <option selected value="0">Yoq</option>
                                            <option value="1">Ha</option>
                                        </select>
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
                            <a class="btn btn-secondary mt-3" href="{{ route('students.index') }}">
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
