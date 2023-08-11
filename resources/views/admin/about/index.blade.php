@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                              @if(auth()->user()->school_id==null)
                            <h5 class="card-title 0">Maktablar haqida</h5>
                                <a href="{{route('abouts.create')}}"
                                   class="btn btn-success">yaratish</a>
                            @else
                            <h5 class="card-title 0">Maktab haqida</h5>
                              @endif


                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>Maktab nomi</th>
                                <th class="d-none d-xl-table-cell">Rasimi</th>
                                <th>Telefon raqam</th>
                                <th class="d-none d-xl-table-cell">Joylashgan viloyati</th>
                                <th class="d-none d-xl-table-cell">Joylashgan tumani</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(auth()->user()->school_id==null)
                                @foreach($abouts as $about)

                                    <tr>
                                        <td>{{$about->name}}</td>
                                        <td class="d-none d-xl-table-cell"><img width="100px"
                                                                                src="{{$about->image}}"
                                                                                alt="{{$about->name}} rasimi"></td>
                                        <td>{{$about->phone_number}}</td>
                                        <td class="d-none d-md-table-cell">{{$about->viloyat}}</td>
                                        <td class="d-none d-md-table-cell">{{$about->tuman}}</td>
                                        <td>
                                            <a href="{{route('abouts.edit',[$about->id])}}"
                                               class="btn btn-info">Edit</a>
                                            <a href="{{route('abouts.show',[$about->id])}}"
                                               class="btn btn-success">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @php
                                    $about2=App\Models\About::find(auth()->user()->school_id)
                                @endphp
                                <tr>
                                    <td>{{$about2->name}}</td>
                                    <td class="d-none d-xl-table-cell"><img width="100px"
                                                                            src="{{$about2->image}}"
                                                                            alt="{{$about2->name}} rasimi"></td>
                                    <td>{{$about2->phone_number}}</td>
                                    <td class="d-none d-md-table-cell">{{$about2->viloyat}}</td>
                                    <td class="d-none d-md-table-cell">{{$about2->tuman}}</td>
                                    <td>
                                        <a href="{{route('abouts.edit',[$about2->id])}}"
                                           class="btn btn-info">Edit</a>
                                        <a href="{{route('abouts.show',[$about2->id])}}"
                                           class="btn btn-success">View</a>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
