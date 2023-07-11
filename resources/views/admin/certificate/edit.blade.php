@extends('layouts.admin')
@section('content')
    <main class="content">
       
        <div class="container-fluid p-0">
           @livewire('edit-certifcate', ['certificate'=> $certificate])
        </div>
    </main>
@endsection
