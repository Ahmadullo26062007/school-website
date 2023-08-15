@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title 0">Rollar</h5>
                                <a href="{{route('roles.create')}}"
                                   class="btn btn-success">Yaratish</a>


                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nomi</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->title}}</td>
                                        <td>
                                            <a href="{{route('roles.edit',[$role->id])}}"
                                               class="btn btn-info">Tahrirlash</a>
                                            <form class="d-inline" action="{{ route('roles.destroy', $role->id) }}"
                                                  method="post" onsubmit="return confirm('{{ trans('Ochirish') }}');">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-flat show_confirm"
                                                        data-toggle="tooltip"
                                                        title='Delete' type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                         fill="currentColor" class="bi bi-trash-fill"
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                    </svg>
                                                </button>
                                            </form>
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
