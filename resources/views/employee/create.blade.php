@extends('../template/layout2')

@section('system', 'Employee')

@section('title', 'Add Karyawan')

@section('subtitle', 'Add Page')

@section('content')
    <div class="w-full">
        <h3>Add Karyawan</h3>

        <a href="/employee" class="btn btn-info">Kembali</a>

        <br />
        <br />

        <form action="/employee/store" method="post">
            {{ csrf_field() }}
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="id1">
                    Kode Pegawai
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="id1" placeholder="Input kode pegawai"
                        name="kodepegawai" required="required">
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="id2">
                    Nama Lengkap
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="id2" placeholder="Input nama lengkap"
                        name="namalengkap" required="required">
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="id2">
                    Divisi
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="id2" placeholder="Input divisi" name="divisi"
                        required="required">
                </div>
            </div>
            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="id2">
                    Departemen
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="id2" placeholder="Input nama lengkap"
                        name="departemen" required="required">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </form>
    </div>
@endsection
