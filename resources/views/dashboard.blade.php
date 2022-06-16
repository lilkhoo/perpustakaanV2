@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="fs-5">Selamat Datang {{ auth()->user()->name }}</h1>
                <img src="{{ $image }}" width="200" class="rounded-circle img-thumbnail mx-auto d-block">
            </div>
        </div>
    </div>
@endsection
