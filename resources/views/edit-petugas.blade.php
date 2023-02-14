@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/petugas/update/{{$id}}" method="post">
                    @csrf

                        <div class="form-group">
                            <input type="text" id="nama" name="nama_petugas" class="form-control" placeholder="nama_petugas">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="id_login" class="form-control" placeholder="id_login">

                        </div>

                        <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                        </div>
                    </form>


                        @endsection
