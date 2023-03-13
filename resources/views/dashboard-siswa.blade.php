@extends('welcome')

@section('content')
@if (Auth::check())

<div class="container-fluid py-4">

        <div class="card" style="width: 13rem;">
            <img src="assets/img/SPPPal.png" class="card-img-top" alt="...">
        </div>

        <div class="container-fluid py-4">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Selamat Datang, Siswa!") }}
                    </div>
                </div>
            </div>
        </div>
        @endif

@endsection