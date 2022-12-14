@extends('fidela')
@section('atas')
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
@endsection
@section('bawah')
    <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form>
	<table class="table table-bordered table-striped" width="100%">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a class="btn btn-warning" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				<a class="btn btn-danger"  href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}
@endsection
