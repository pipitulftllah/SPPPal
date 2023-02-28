@extends('welcome')

@section('content')


<br>

<form action="/siswa/prosesbayar/{{$siswa->nisn}}" method="post">


@csrf

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            </div>
            <div class="card-body p-5">
              <div class="table-responsive p-0">
                <!-- <h6>Nama Siswa</h6>
                <div class="mb-3"><input type="text" class="form-control"></div> -->
                <!-- <h6>Nisn</h6>
                <div class="mb-3"><input type="text" name="nisn" class="form-control"></div> -->
                <!-- <h6>Nis</h6>
                <div class="mb-3"><input type="text" class="form-control"></div>
                <h6>Kelas</h6>
                <div class="mb-3"><input type="text" class="form-control"></div> -->
                <h6>Untuk Tahun</h6>
                <div class="mb-3">
            
                <select name="tahun_dibayar" id="" class="form-control">
                @foreach(DB::table('spp')->get() as $item)
                <option value="{{ $item->tahun }}">{{ $item->tahun }}</option>            
            @endforeach

                </select>
                </div>
                <!-- <h6>Nominal Spp</h6>
                <div class="mb-3"><input type="text" name="jumlah_bayar" class="form-control"></div> -->
                <h6>Untuk Bulan</h6>
                <div class="mb-3">

                <div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="Januari" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">Januari</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="Februari" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">Februari</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="Maret" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">Maret</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="April" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">April</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="Mei" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">Mei</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="Juni" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">Juni</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="Juli" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">Juli</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="Agustus" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">Agustus</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="September" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">September</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="Oktober" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">Oktober</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="November" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">November</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name="bulan_dibayar[]" value="Desember" id="fcustomCheck1" checked="">
  <label class="custom-control-label" for="customCheck1">Desember</label>
</div>


                </div>
                <!-- <h6>Total Bayar</h6>
                <div class="mb-3"><input type="text" class="form-control"></div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary">Konfirmasi</button>

</form>
      

@endsection
