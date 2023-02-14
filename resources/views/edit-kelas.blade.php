@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/kelas/update/{{$id}}" method="post">
                    @csrf

                        <div class="form-group">
                            <input type="text" id="nama" name="nama_kelas" class="form-control" placeholder="nama_kelas">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="id_kk" class="form-control" placeholder="id_kk">

                        </div>

                        <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                        </div>
                    </form>


                        @endsection
