@extends('../template/layout')

@section('title', 'Edit VGA')

@section('subtitle', 'Edit Page')

@section('content')
	<h3>Edit VGA</h3>

	<a href="/vga" class="btn btn-info">Kembali</a>

	<br/>
	<br/>

	@foreach($vga as $v)
	<form action="/vga/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $v->id }}">
    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="id1">
            Merk
        </label>
        <div class="col-sm-6">
            <input class="form-control" 
                    type="text" 
                    id="id1" 
                    placeholder="Input merk vga"
                    name="merk"
                    required="required"
                    value="{{ $v->merk_vga }}">
        </div>
    </div>
    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="id2">
            Harga 
        </label>
        <div class="col-sm-6">
            <input class="form-control" 
                    type="text" 
                    id="id2" 
                    placeholder="Input harga vga"
                    name="harga"
                    required="required"
                    value="{{ $v->harga_vga }}">
        </div>
    </div>
    <div class="form-group has-success">
    <label class="control-label col-sm-2">
        Ketersediaan
    </label>
    <div class="col-sm-6">
        <div class="custom-control custom-switch">
            {{-- 1. Kirim nilai '0' sebagai default (jika checkbox tidak dicentang) --}}
            <input type="hidden" name="tersedia" value="0">

            {{-- 2. Atur value='1' dan tambahkan 'checked' jika data dari database adalah 1 --}}
            <input type="checkbox" class="custom-control-input" id="switch1" name="tersedia" value="1" {{ $v->tersedia == 1 ? 'checked' : '' }}>
            
            <label class="custom-control-label" for="switch1">Tersedia</label>
        </div>
    </div>
    </div>
    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="id4">
            Berat
        </label>
        <div class="col-sm-6">
            <input class="form-control" 
                    type="text" 
                    id="id4" 
                    placeholder="Input berat vga"
                    name="berat"
                    required="required"
                    value="{{ $v->berat }}">
        </div>
    </div>
		<input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
	@endforeach
@endsection