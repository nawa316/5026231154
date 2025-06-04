@extends('../template')

@section('content')
	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>
 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="id1">
            Nama
        </label>
        <div class="col-sm-6">
            <input class="form-control" 
                    type="text" 
                    id="id1" 
                    placeholder="Input nama pegawai"
                    name="nama"
                    required="required"
                    value="{{ $p->pegawai_nama }}">
        </div>
    </div>
    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="id2">
            Jabatan
        </label>
        <div class="col-sm-6">
            <input class="form-control" 
                    type="text" 
                    id="id2" 
                    placeholder="Input jabatan pegawai"
                    name="jabatan"
                    required="required"
                    value="{{ $p->pegawai_jabatan }}">
        </div>
    </div>
    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="id3">
            Umur
        </label>
        <div class="col-sm-6">
            <input class="form-control" 
                    type="text" 
                    id="id3" 
                    placeholder="Input umur pegawai"
                    name="umur"
                    required="required"
                    value="{{ $p->pegawai_umur }}">
        </div>
    </div>
    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="id4">
            Alamat
        </label>
        <div class="col-sm-6">
            <textarea class="form-control" 
                    id="id4" 
                    placeholder="Input alamat pegawai"
                    name="alamat"
                    required="required">{{ $p->pegawai_alamat }}</textarea>
        </div>
    </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
	@endforeach
@endsection