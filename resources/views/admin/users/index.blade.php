@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title 0">Maktablar haqida</h5>
                                <a href="{{route('users.create')}}"
                                   class="btn btn-success">Yaratish</a>


                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Ism</th>
                                <th>Foydalanuvchi nomi</th>
                                <th class="d-none d-xl-table-cell">Maktabi</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    @php
                                        $school=\App\Models\About::find($user->school_id);
                                    @endphp
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->username}}</td>
                                        @if($school)
                                        <td class="d-none d-md-table-cell">{{$school->name}}</td>
                                        @else
                                            @if($user->school_id==null)
                                                <td class="d-none d-md-table-cell">Ega</td>
                                            @endif
                                        @endif
                                        <td>
                                            <a href="{{route('users.edit',[$user->id])}}"
                                               class="btn btn-info">Edit</a>
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
