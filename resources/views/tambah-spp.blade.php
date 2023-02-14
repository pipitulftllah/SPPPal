@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/spp/store" method="post">
                    @csrf


                        <div class="form-group">
                            <input type="text" id="nama" name="id_spp" class="form-control" placeholder="id_spp">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="tahun" class="form-control" placeholder="tahun">
                        </div>

                        <div class="form-group">
                            <input type="text" id="nama" name="nominal" class="form-control" placeholder="nominal">

                        </div>

                        <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                        </div>
                    </form>


                        @endsection
