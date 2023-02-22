@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/spp/update/{{$id}}" method="post">
                    @csrf

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Tahun</label>
                            <input type="text" id="nama" name="tahun" class="form-control" placeholder="tahun" value="{{ $spp->tahun }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nominal</label>
                            <input type="text" id="nama" name="nominal" class="form-control" placeholder="nominal" value="{{ $spp->nominal }}">
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        </div>
                    </form>


                        @endsection
