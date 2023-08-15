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
                        <form action="{{route('roles.update',$role->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                        <div class="row">

                            <div class="col-6 ">
                                <h5 class="card-title mb-0">Ismi</h5>

                                <div class="card-body">
                                    <input type="text" name="title" class="form-control" value="{{$role->title}}" placeholder="Nomi">

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
                            <a class="btn btn-secondary mt-3" href="{{route('roles.index')}}">
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
