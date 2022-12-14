@extends('fidela')

@section('atas')
    <a class="btn btn-primary" href="/pegawai">Kembali</a>
@endsection

@section('bawah')
    @foreach ($pegawai as $p)
        <form class="form-horizontal" action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="form-group row">
                <label class="control-label col-sm-2" for="nama" >Nama:</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="jabatan">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" name="jabatan" class="form-control" id="jabatan"
                    value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="jabatan">Umur</label>
                <div class="col-sm-10">
                    <input type="text" name="umur" class="form-control" id="umur" value="{{ $p->pegawai_umur }}">
                </div>

            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="alamat">Alamat</label>
                <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" id="alamat">
                        {{ $p->pegawai_alamat }}
                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan data</button>
                </div>
            </div>
        </form>
    @endforeach

    {{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach ($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach --}}
@endsection
