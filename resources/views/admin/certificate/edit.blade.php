@extends('layouts.admin')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            @livewire('edit-certificate',['certificate' => $certificate])
        </div>
    </main>
@endsection
