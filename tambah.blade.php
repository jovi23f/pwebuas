@extends('fidela')

@section('atas')
    <a class="btn btn-primary" href="/pegawai">Kembali</a>
@endsection

@section('bawah')
    <form class="form-horizontal" action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label class="control-label col-sm-2" for="nama">Nama:</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="jabatan">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" name="jabatan" class="form-control" id="jabatan"
                    placeholder="Masukkan jabatan Anda">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="jabatan">Umur</label>
            <div class="col-sm-10">
                <input type="text" name="umur" class="form-control" id="umur" placeholder="Masukkan Umur Anda">
            </div>

        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="alamat">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda">
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Simpan data</button>
            </div>
        </div>
    </form>
    {{-- <div class="container">
        <h2><a href="https://www.linkedin.com/in/fidelajovita">5026211112 - Fidela Jovita Kanedi</a></h2>
        <h3>Data Pegawai</h3>

        <a href="/pegawai"> Kembali</a>

        <br/>
        <br/>

        <form action="/pegawai/store" method="post">
            {{ csrf_field() }}
            Nama <input type="text" name="nama" required="required"> <br/>
            Jabatan <input type="text" name="jabatan" required="required"> <br/>
            Umur <input type="number" name="umur" required="required"> <br/>
            Alamat <textarea name="alamat" required="required"></textarea> <br/>
            <input type="submit" value="Simpan Data">
        </form>
    </div> --}}
@endsection
